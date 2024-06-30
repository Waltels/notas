<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grado;
use App\Models\Nivel;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grados =Grado::all();
        return view('admin.grado.index', compact('grados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nivels =Nivel::all();
        return view('admin.grado.create', compact('nivels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'nivel_id'=>'required',
            'curso'=>'required',
            'paralelo'=>'required'
        ]);
    

        $save = new Grado();
        $save->nivel_id = $request->string('nivel_id');
        $save->curso = $request->string('curso');
        $save->paralelo = $request->string('paralelo');


        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El grado se registro  correctamente'
        ]);
        
        return Redirect()->route('admin.grados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Grado $grado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grado $grado)
    {
        $nivels = Nivel::all();
        return view('admin.grado.edit', compact('grado', 'nivels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grado $grado)
    {
        $request->validate([
            'nivel_id'=>'required',
            'curso'=>'required',
            'paralelo'=>'required'
        ]);
        $grado->update($request->all());


        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo el grado correctamente'
        ]);

        return redirect()->route('admin.grados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grado $grado)
    {
        $grado->delete();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El grado se elimino correctamente'
        ]);
        return redirect()->route('admin.grados.index');
    }
}
