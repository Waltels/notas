<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Nivel;
use App\Models\Persona;
use App\Models\Ppff;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes=Estudiante::with('persona')->get();
         
        return view('student.index', compact('estudiantes',));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nivels= Nivel::all();
        $grados= Grado::all();
        
        return view('student.create', compact( 'nivels', 'grados',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ocupacion = 'Estudiante';
        $request->validate([
            
            'ci'=>'nullable',
            'fecha_nac'=>'required',
            'direccion'=>'required',
            'telefono'=>'nullable',
            'name'=>'required',
            'rude'=>'required||unique:estudiantes,rude',
            'nombre_apellido'=>'required',
            'cipf'=>'required',
            'parentesco'=>'required',
            'telefonopf'=>'nullable',
            'direccionpf'=>'nullable',
        ]);
        
        $persona = new Persona();
            $persona->ci = $request->ci;
            $persona->fecha_nac = $request->fecha_nac;
            $persona->ocupacion = $ocupacion;
            $persona->direccion = $request->direccion;
            $persona->telefono= $request->telefono;
            $persona->save();

        $ppff = new Ppff();
            $ppff->nombre_apellido = $request->nombre_apellido;
            $ppff->cipf = $request->cipf;
            $ppff->parentesco = $request->parentesco;
            $ppff->telefonopf = $request->telefonopf;
            $ppff->direccionpf = $request->direccionpf;
            $ppff->save();

        $estudiante = new Estudiante();
            $estudiante->name = $request->name;
            $estudiante->ppff_id = $ppff->id;
            $estudiante->persona_id = $persona->id;
            $estudiante->nivel_id = $request->nivel_id;
            $estudiante->grado_id = $request->grado_id;
            $estudiante->rude = $request->rude;
            $estudiante->save();
         

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Estudiante se registro  correctamente'
        ]);

        return Redirect()->route('student.estudiantes.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $nivels = Nivel::all();
        $grados = Grado::all();

        $data = Persona::select()
        ->join('estudiantes', 'personas.id', '=', 'estudiantes.persona_id')
        ->join('nivels', 'nivels.id', '=', 'estudiantes.nivel_id')
        ->join('grados', 'grados.id', '=', 'estudiantes.grado_id')
        ->join('ppffs', 'estudiantes.id', '=', 'ppffs.estudiante_id')
        ->where('estudiantes.id', $id)
        ->get();

        foreach ($data as $estudiante) {
        }
        return view('student.show', compact('nivels','grados', 'data', 'estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        $nivels = Nivel::all();
        $grados = Grado::all();
        return view('student.edit', compact('nivels','grados', 'estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
     
        $ocupacion = 'Estudiante';
        $request->validate([
            
            'ci'=>'nullable',
            'fecha_nac'=>'required',
            'direccion'=>'required',
            'telefono'=>'nullable',
            'name'=>'required',
            'rude'=>'required',
            'nombre_apellido'=>'required',
            'cipf'=>'required',
            'parentesco'=>'required',
            'telefonopf'=>'nullable',
            'direccionpf'=>'nullable',
            'estado_e'=>'required|boolean'
        ]);

            $estudiante = Estudiante::find($id);
            $estudiante->name = $request->name;
            $estudiante->ppff_id = $request->ppff_id;
            $estudiante->persona_id = $request->persona_id;
            $estudiante->nivel_id = $request->nivel_id;
            $estudiante->grado_id = $request->grado_id;
            $estudiante->rude = $request->rude;
            $estudiante->estado_e = $request->estado_e;
            $estudiante->save();
        
            $persona = Persona::find($estudiante->persona_id);
            $persona->ci = $request->ci;
            $persona->fecha_nac = $request->fecha_nac;
            $persona->ocupacion = $ocupacion;
            $persona->direccion = $request->direccion;
            $persona->telefono= $request->telefono;            
            $persona->save(); 

            $ppff = Ppff::find($estudiante->ppff_id);
            $ppff->nombre_apellido = $request->nombre_apellido;
            $ppff->cipf = $request->cipf;
            $ppff->parentesco = $request->parentesco;
            $ppff->telefonopf = $request->telefonopf;
            $ppff->direccionpf = $request->direccionpf;
            $ppff->save();
         
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El Estudiante se Actualizo  correctamente'
        ]);

        return Redirect()->route('student.estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

