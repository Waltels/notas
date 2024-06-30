<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gestion;
use App\Models\Nivel;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nivels = Nivel::all();
        return view('admin.nivel.index', compact('nivels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gestions = Gestion::all();
        return view('admin.nivel.create', compact('gestions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'nivel'=>'required',
            'turno'=>'required',
            'gestion_id'=>'required'
        ]);
    

        $save = new Nivel();
        $save->nivel = $request->string('nivel');
        $save->turno = $request->string('turno');
        $save->gestion_id = $request->string('gestion_id');


        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El nivel se registro  correctamente'
        ]);
        
        return Redirect()->route('admin.nivels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nivel $nivel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nivel $nivel)
    {
        $gestions = Gestion::all();
        return view('admin.nivel.edit', compact('nivel', 'gestions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nivel $nivel)
    {
        $request->validate([
            'nivel'=>'required',
            'turno'=>'required',
            'gestion_id'=>'required'
        ]);
        $nivel->update($request->all());


        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo la gestión correctamente'
        ]);

        return redirect()->route('admin.nivels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nivel $nivel)
    {
        $nivel->delete();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El nivel se elimino correctamente'
        ]);
        return redirect()->route('admin.nivels.index');
    }
}
