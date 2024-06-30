@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li> <a href="{{route('admin.nivels.index')}}">Niveles</a></li>
    <li>Actualizar Nivel</li>
    
</ul>

<div class="row">
    <div class="col-md-6 col-md-offset-3 mt-9">
        <!-- Horizontal Form Block -->
        <div class="block">
            <!-- Horizontal Form Title -->
            <div class="block-title">
                <h2><strong>Actualizar el</strong> Nivel <strong>{{$nivel->nivel}}</strong></h2>
            </div>
            <!-- END Horizontal Form Title -->

            <!-- Horizontal Form Content -->
            <form method="POST"  id="gestion" action="{{route('admin.nivels.update', $nivel)}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Gestion</label>
                    <div class="col-md-9">
                        <select id="gestion_id" name="gestion_id" class="form-control" size="1">
                            @foreach ($gestions as $gestion)
                                @if ($gestion ['estado'] == "1")
                                <option value="{{$gestion->id}}" @if($nivel->gestion_id == $gestion->id) selected  @endif>{{$gestion->gestion}}</option>
                                @endif      
                            @endforeach   
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Nivel</label>
                    <div class="col-md-9">

                        <select id="nivel" name="nivel" class="form-control" size="1">
                            <option value="Inicial"@if($nivel->nivel == "Inicial") selected  @endif>Inicial</option>
                            <option value="Primario" @if($nivel->nivel == "Primario") selected  @endif>Primario</option>
                            <option value="Secundaria" @if($nivel->nivel == "Secundaria") selected  @endif>Secundaria</option>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Turno</label>
                    <div class="col-md-9">
                        <select id="turno" name="turno" class="form-control" size="1">
                            <option value="Mañana" @if($nivel->turno == "Mañana") selected  @endif>Mañana</option>
                            <option value="Tarde" @if($nivel->turno == "Tarde") selected  @endif>Tarde</option>
                            <option value="Mañana/Tarde" @if($nivel->turno == "Mañana/Tarde") selected  @endif>Mañana/Tarde</option>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="hi hi-signal"></i> Actualizar Nivel</button>
                    </div>
                </div>
            </form>
            <!-- END Horizontal Form Content -->
        </div>
        <!-- END Horizontal Form Block -->
    </div>
</div>

@endsection