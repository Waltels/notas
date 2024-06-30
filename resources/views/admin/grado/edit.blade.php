@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li> <a href="{{route('admin.grados.index')}}">Grados</a></li>
    <li>Actualizar Grados</li>
</ul>
<div class="row">
    <div class="col-md-6 col-md-offset-3 mt-9">
        <!-- Horizontal Form Block -->
        <div class="block">
            <!-- Horizontal Form Title -->
            <div class="block-title">
                <h2><strong>Actualilar el</strong> Grado <strong>{{$grado->curso}}</strong></h2>
            </div>
            <!-- END Horizontal Form Title -->

            <!-- Horizontal Form Content -->
            <form method="POST"  id="gestion" action="{{route('admin.grados.update', $grado)}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">NIvel</label>
                    <div class="col-md-9">
                        <select id="nivel_id" name="nivel_id" class="form-control" size="1">
                            @foreach ($nivels as $nivel)
                                @if ($nivel ['estado'] == "1")
                                <option value="{{$nivel->id}}" @if($grado->nivel_id == $nivel->id) selected  @endif>{{$nivel->nivel}} - {{$nivel->turno}}</option>
                                @endif      
                            @endforeach   
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Curso</label>
                    <div class="col-md-9">
                        <select id="cirso" name="curso" class="form-control" size="1">
                            <option value="Primero"@if($grado->curso == "Primeo") selected  @endif>Primero</option>
                            <option value="Segundo"@if($grado->curso == "Segundo") selected  @endif>Segundo</option>
                            <option value="Tercero"@if($grado->curso == "Tercero") selected  @endif>Tercero</option>
                            <option value="Cuarto"@if($grado->curso == "Cuarto") selected  @endif>Cuarto</option>
                            <option value="Quinto"@if($grado->curso == "Quinto") selected  @endif>Quinto</option>
                            <option value="Sexto"@if($grado->curso == "Sexto") selected  @endif>Sexto</option>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Paralelo</label>
                    <div class="col-md-9">
                        <select id="paralelo" name="paralelo" class="form-control" size="1">
                            <option value="A"@if($grado->paralelo == "A") selected  @endif>A</option>
                            <option value="B"@if($grado->paralelo == "B") selected  @endif>B</option>
                            <option value="C"@if($grado->paralelo == "C") selected  @endif>C</option>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="hi hi-tasks"></i> Actualizar Grado</button>
                    </div>
                </div>
            </form>
            <!-- END Horizontal Form Content -->
        </div>
        <!-- END Horizontal Form Block -->
    </div>
</div>  
@endsection