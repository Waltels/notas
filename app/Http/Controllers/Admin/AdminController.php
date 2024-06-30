<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Persona;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = User::select()
                ->join('personas', 'users.id', '=', 'personas.user_id')
                ->join('admins', 'personas.id', '=', 'admins.persona_id')
                ->get();
        return view('admin.administracion.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.administracion.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'ci'=>'required',
            'fecha_nac'=>'required',
            'ocupacion'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
    
        ]);
        $persona = new Persona();
        $persona->user_id = $request->string('user_id');
        $persona->ci = $request->string('ci');
        $persona->fecha_nac = $request->string('fecha_nac');
        $persona->ocupacion = $request->string('ocupacion');
        $persona->direccion = $request->string('direccion');
        $persona->telefono = $request->string('telefono');
        $persona->save();

        $lastInsertId = $persona->id;

        $admin = new Admin();
        $admin->persona_id = $lastInsertId;
        $admin->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La gestión se registro  correctamente'
        ]);
        
        return Redirect()->route('admin.admins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $users = User::all();
        $data = User::select()
                ->join('personas', 'users.id', '=', 'personas.user_id')
                ->join('admins', 'personas.id', '=', 'admins.persona_id')
                ->where('admins.id', $id)
                ->get();

        foreach ($data as $admin) {
            $id = $admin->id;
            $idper = $admin->persona_id;
            $name = $admin->name;
            $ci = $admin->ci;
            $fecha_nac= $admin->fecha_nac;
            $ocupacion = $admin->ocupacion;
            $direccion = $admin->direccion;
            $telefono = $admin->telefono;
        }
           
        return view('admin.administracion.show', compact('users', 'admin','name', 'id','ci','fecha_nac','ocupacion','direccion','telefono' ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::all();
        $data = User::select()
                ->join('personas', 'users.id', '=', 'personas.user_id')
                ->join('admins', 'personas.id', '=', 'admins.persona_id')
                ->where('admins.id', $id)
                ->get();

        foreach ($data as $admin) {
            $id = $admin->id;
            $name = $admin->name;
            $ci = $admin->ci;
            $fecha_nac= $admin->fecha_nac;
            $ocupacion = $admin->ocupacion;
            $direccion = $admin->direccion;
            $telefono = $admin->telefono;
        }
        $users= User::all();
        return view('admin.administracion.edit', compact('users', 'admin','data' ));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $admin=Admin::find($id);
 
        $persona = Persona::find($admin->persona_id);
        $persona->ci = $request->ci;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->ocupacion = $request->ocupacion;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->save();
        
         session()->flash('swal',[
             'icon'=>'success',
             'title'=>'Muy bien!!',
             'text'=>'El admin se Actualizo  correctamente'
         ]);
 
         return Redirect()->route('admin.admins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
