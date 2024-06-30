<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\EstudianteController;
use App\Http\Controllers\Student\NotasController;

Route::resource('estudiantes', EstudianteController::class)->names('estudiantes');

Route::resource('notas', NotasController::class)->names('notas');

Route::get('notas/{id}', [NotasController::class, 'notas'])->name('nota');