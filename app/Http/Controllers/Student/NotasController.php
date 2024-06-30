<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asignacion;
use App\Models\Estudiante;
use App\Models\Notas;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignacions = Asignacion::all();
        return view('student.notas.index', compact('asignacions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $id_grado = $_GET['id_grado'];
        $estudiantes = Estudiante::all();

        return view('student.notas.create', compact('estudiantes', 'id_grado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          
    }

    /**
     * Display the specified resource.
     */
    public function show(Notas $nota)
    {
        return view('student.notas.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notas $nota)
    {
        return view('student.notas.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notas $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notas $nota )
    {
        //
    }
}
