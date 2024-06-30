@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="">Configuración</a></li>
    <li> <a href="">Configuración Inicial</a></li>
    <li>Nuevo</li>
    
</ul>

<div class="row">
    <div class="col-md-6 col-md-offset-3 mt-9">
        <!-- Horizontal Form Block -->
        <div class="block">
            <!-- Horizontal Form Title -->
            <div class="block-title">
                <h2><strong>Crear Nueva</strong> Area</h2>
            </div>
            <!-- END Horizontal Form Title -->

            <!-- Horizontal Form Content -->
            <form method="POST"  id="gestion" action="{{route('admin.areas.store')}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Area</label>
                    <div class="col-md-9">
                        <input type="text" id="area" name="area" class="form-control" placeholder="Ingrese la nueva area">
                        
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="gi gi-sort"></i> Crear nueva Area</button>
                    </div>
                </div>
            </form>
            <!-- END Horizontal Form Content -->
        </div>
        <!-- END Horizontal Form Block -->
    </div>
</div>

@endsection