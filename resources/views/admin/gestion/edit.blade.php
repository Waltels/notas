@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li> <a href="{{route('admin.gestions.index')}}">Gestiones</a></li>
    <li>Actualizar Gestión</li>
    
</ul>

<div class="row">
    <div class="col-md-6 col-md-offset-3 mt-9">
        <!-- Horizontal Form Block -->
        <div class="block">
            <!-- Horizontal Form Title -->
            <div class="block-title">
                <h2><strong>Crear Nueva</strong> Gestión</h2>
            </div>
            <!-- END Horizontal Form Title -->

            <!-- Horizontal Form Content -->
            <form method="POST"  id="gestion" action="{{route('admin.gestions.update', $gestion)}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Gestion</label>
                    <div class="col-md-9">
                        <input type="text" id="gestion" name="gestion" class="form-control" placeholder="Ingrese la nueva gestión" value="{{$gestion->gestion}}">
                        
                    </div>
                </div>
                <div class="form-group text-center">
                    <label >ESTADO</label> <br>
                                                        <input type="hidden" name="estado" value="0">
                                                        <label class="switch switch-success"><input name="estado" value="1" type="checkbox" @checked($gestion->estado == 1)><span></span></label>
                                                        @if ($gestion->estado == 1)
                                                        <span class="text-success">La gestion {{$gestion->gestion}} es ACTIVA</span>
                                                        @else
                                                        <span class="text-danger">La gestion {{$gestion->gestion}} es inactiva</span>  
                                                        @endif
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-calendar"></i> Actualizar la Gestión</button>
                    </div>
                </div>
            </form>
            <!-- END Horizontal Form Content -->
        </div>
        <!-- END Horizontal Form Block -->
    </div>
</div>

@endsection