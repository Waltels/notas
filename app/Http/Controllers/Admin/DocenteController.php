<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Persona;
use App\Models\User;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::select()
                ->join('personas', 'users.id', '=', 'personas.user_id')
                ->join('docentes', 'personas.id', '=', 'docentes.persona_id')
                ->get();
        return view('admin.docente.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users= User::all();
        return view('admin.docente.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $persona = Persona::create([
            'user_id' => $request['user_id'],
            'ci' => $request['ci'],
            'fecha_nac' => $request['fecha_nac'],
            'ocupacion' => $request['ocupacion'],
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono']
        ]);

        $lastInsertId = $persona->id;

        $persona->docente = Docente::create([
            'persona_id' => $lastInsertId,
            'especialidad' => $request['especialidad'],
            'rda' => $request['rda'],
            'item' => $request['item'],
            'antiguedad' => $request['antiguedad']
        ]);

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El docente se registro  correctamente'
        ]);

        return Redirect()->route('admin.docentes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = User::select()
                ->join('personas', 'users.id', '=', 'personas.user_id')
                ->join('docentes', 'personas.id', '=', 'docentes.persona_id')
                ->where('docentes.id', $id)
                ->get();

        foreach ($data as $docente) {
            $id = $docente->id;
            $name = $docente->name;
            $ci = $docente->ci;
            $fecha_nac= $docente->fecha_nac;
            $ocupacion = $docente->ocupacion;
            $direccion = $docente->direccion;
            $telefono = $docente->telefono;
        }
        $users= User::all();
        return view('admin.docente.edit', compact('docente','users', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
       $docente=Docente::find($id);

       $docente->especialidad = $request->especialidad;
       $docente->rda = $request->rda;
       $docente->item = $request->item;
       $docente->antiguedad = $request->antiguedad;
       $docente->save();

       $persona = Persona::find($docente->persona_id);
       $persona->ci = $request->ci;
       $persona->fecha_nac = $request->fecha_nac;
       $persona->ocupacion = $request->ocupacion;
       $persona->direccion = $request->direccion;
       $persona->telefono = $request->telefono;
       $persona->save();
       
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El docente se Actualizo  correctamente'
        ]);

        return Redirect()->route('admin.docentes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
