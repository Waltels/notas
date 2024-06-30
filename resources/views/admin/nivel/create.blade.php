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
                <h2><strong>Crear Nuevo</strong> Nivel</h2>
            </div>
            <!-- END Horizontal Form Title -->

            <!-- Horizontal Form Content -->
            <form method="POST"  id="gestion" action="{{route('admin.nivels.store')}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Gestion</label>
                    <div class="col-md-9">
                        <select id="gestion_id" name="gestion_id" class="form-control" size="1">
                            @foreach ($gestions as $gestion)
                                @if ($gestion ['estado'] == "1")
                                <option value="{{$gestion->id}}">{{{$gestion->gestion}}}</option>
                                @endif      
                            @endforeach   
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Nivel</label>
                    <div class="col-md-9">
                        <select id="nivel" name="nivel" class="form-control" size="1">
                            <option value="Inicial">Inicial</option>
                            <option value="Primario">Primario</option>
                            <option value="Secundaria">Secundaria</option>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-hf-email">Turno</label>
                    <div class="col-md-9">
                        <select id="turno" name="turno" class="form-control" size="1">
                            <option value="Mañana">Mañana</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Mañana/Tarde">Mañana/Tarde</option>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="hi hi-signal"></i> Crear nuevo Nivel</button>
                    </div>
                </div>
            </form>
            <!-- END Horizontal Form Content -->
        </div>
        <!-- END Horizontal Form Block -->
    </div>
</div>

@endsection