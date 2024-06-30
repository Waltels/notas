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
                <h2><strong>Actialer</strong> Permiso</h2>
            </div>
            <!-- END Horizontal Form Title -->

            <!-- Horizontal Form Content -->
            <form method="POST"  id="rol" action="{{route('admin.permissions.update', $permission)}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Rol</label>
                    <div class="col-md-9">
                        <input type="text" id="name" name="name" class="form-control"  value="{{$permission->name}}">
                        
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-calendar"></i> Actualizar el permiso</button>
                    </div>
                </div>
            </form>
            <!-- END Horizontal Form Content -->
        </div>
        <!-- END Horizontal Form Block -->
    </div>
</div>   
@endsection