@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="">Configuración</a></li>
    <li> <a href="">Configuración Inicial</a></li>
    <li>Actualizar</li>
    
</ul>

<div class="row">
    <div class="col-md-6 col-md-offset-3 mt-9">
        <!-- Horizontal Form Block -->
        <div class="block">
            <!-- Horizontal Form Title -->
            <div class="block-title">
                <h2><strong>Actualizar el </strong> Area de: <strong>{{$area->area}}</strong></h2>
            </div>
            <!-- END Horizontal Form Title -->

            <!-- Horizontal Form Content -->
            <form method="POST"  id="gestion" action="{{route('admin.areas.update', $area)}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Area</label>
                    <div class="col-md-9">
                        <input type="text" id="area" name="area" class="form-control" value="{{$area->area}}"> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Cambiar Estado</label>
                    <div class="col-md-9">
                        <select id="estado" name="estado" class="form-control" size="1">
                            <option value="1"@if($area->estado == "1") selected  @endif>Activo</option>
                            <option value="0"@if($area->estado == "0") selected  @endif>Inactivo</option>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="gi gi-sort"></i> Actualizar el Area</button>
                    </div>
                </div>
            </form>
            <!-- END Horizontal Form Content -->
        </div>
        <!-- END Horizontal Form Block -->
    </div>
</div>

@endsection