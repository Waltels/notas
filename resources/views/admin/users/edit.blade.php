@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li> <a href="{{route('admin.nivels.index')}}">Niveles</a></li>
    <li>Usuarios</li>
    
</ul>

<div class="row">
    <div class="col-md-6 col-md-offset-3 mt-9">
        <!-- Normal Form Block -->
        <div class="block">
            <!-- Normal Form Title -->
            <div class="block-title">
                <h2><strong>Actualizar </strong> Usuario</h2>
            </div>
            <!-- END Normal Form Title -->

            <!-- Normal Form Content -->
            <form action="{{route('admin.users.update', $user)}}" method="POST" class="form-bordered">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="example-nf-email">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}" >
                    <label for="example-nf-email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}">
                    <label for="example-nf-password">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password..">
                    <label for="example-nf-password">Confirmar Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password..">
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Roles</label>
                    <div class="col-md-9">
                        @foreach ($roles as $role)
                            <div class="checkbox">
                                <label for="example-checkbox1">
                                    <x-checkbox 
                                        name="roles[]" 
                                        value="{{$role->id}}"
                                        :checked="in_array($role->id, old('roles', $user->roles->pluck('id')->toArray()))"/>
                                        {{$role->name}}
                                </label>
                            </div>                            
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Actualizar</button>
                </div>
            </form>
            <!-- END Normal Form Content -->
        </div>
<!-- END Normal Form Block -->
    </div>
</div>

@endsection