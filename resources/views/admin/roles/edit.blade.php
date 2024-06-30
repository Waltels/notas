@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li> <a href="{{route('admin.nivels.index')}}">Niveles</a></li>
    <li>Nuevo Nivel</li>
    
</ul>
<div class="row">
    <div class="col-md-6 col-md-offset-3 mt-9">
        <!-- Horizontal Form Block -->
        <div class="block">
            <!-- Horizontal Form Title -->
            <div class="block-title">
                <h2><strong>Actualizar</strong> Rol</h2>
            </div>
            <!-- END Horizontal Form Title -->

            <!-- Horizontal Form Content -->
            <form method="POST"  id="rol" action="{{route('admin.roles.update', $role)}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Rol</label>
                    <div class="col-md-9">
                        <input type="text" id="name" name="name" class="form-control"  value="{{$role->name}}">  
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Permisos</label>
                    <div class="col-md-9">
                        @foreach ($permissions as $permission)
                            <div class="checkbox">
                                <label for="example-checkbox1">
                                    <x-checkbox 
                                        name="permissions[]" 
                                        value="{{$permission->id}}"
                                        :checked="in_array($permission->id, $role->permissions->pluck('id')->toArray())"/>
                                        {{$permission->name}}
                                </label>
                            </div>                            
                        @endforeach
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-calendar"></i> Actualizar el Rol</button>
                    </div>
                </div>
            </form>
            <!-- END Horizontal Form Content -->
        </div>
        <!-- END Horizontal Form Block -->
    </div>
</div>   
@endsection