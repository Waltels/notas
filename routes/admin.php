<?php
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\AsignacionController;
use App\Http\Controllers\Admin\DocenteController;
use App\Http\Controllers\Admin\GestionController;
use App\Http\Controllers\Admin\GradoController;
use App\Http\Controllers\Admin\NivelController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::resource('gestions', GestionController::class)->names('gestions');

Route::resource('nivels', NivelController::class)->names('nivels');

Route::resource('grados', GradoController::class)->names('grados');

Route::resource('areas', AreaController::class)->names('areas');

Route::resource('admins', AdminController::class)->except('destroy');

Route::resource('/roles', RoleController::class)->names('roles');

Route::resource('/permissions', PermissionController::class)->names('permissions');

Route::resource('/users', UserController::class)->except('show', 'create', 'store');

Route::resource('docentes', DocenteController::class)->except('show', 'destroy');

Route::resource('asignacions', AsignacionController::class)->names('asignacions');


