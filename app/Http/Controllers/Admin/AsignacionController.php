<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Asignacion;
use App\Models\Docente;
use App\Models\Grado;
use App\Models\Nivel;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contador = 1;
        $nivels= Nivel::all();
        $grados= Grado::all();
        $areas= Area::all();
        $docentes=Docente::all();
        $asignacions = Asignacion::all();
        return view('admin.docente.asignacion.index', compact('docentes', 'nivels', 'grados', 'areas', 'asignacions', 'contador'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'docente_id'=>'required',
            'nivel_id'=>'required',
            'grado_id'=>'required',
            'area_id'=>'required'
        ]);

        $asignacion = new Asignacion();
            $asignacion->docente_id = $request->docente_id;
            $asignacion->nivel_id = $request->nivel_id;
            $asignacion->grado_id = $request->grado_id;
            $asignacion->area_id = $request->area_id;
            $asignacion->save();

            session()->flash('swal',[
                'icon'=>'success',
                'title'=>'Muy bien!!',
                'text'=>'La asignacion se registro  correctamente'
            ]);
    
            return Redirect()->route('admin.asignacions.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        $request->validate([
            
            'nivel_id'=>'required',
            'grado_id'=>'required',
            'area_id'=>'required'
        ]);

        $asignacion->update($request->all());

            session()->flash('swal',[
                'icon'=>'success',
                'title'=>'Muy bien!!',
                'text'=>'La asignacion se Actualizo  correctamente'
            ]);
    
            return Redirect()->route('admin.asignacions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignacion $asignacion)
    {
        $asignacion->delete();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La asignacion se Elimino  correctamente'
        ]);

        return Redirect()->route('admin.asignacions.index');

    }
}
