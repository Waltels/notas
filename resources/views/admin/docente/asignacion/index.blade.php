@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li>Administración</li>
</ul>

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="block ">
            <!-- Row Styles Title -->
            <div class="block-title">
                <h2><strong>Gestiones</strong> Docentes</h2>
                <div class="block-options pull-right">
                    <a  class="btn btn-success btn-md" href="#modalCrearAsignacion" data-toggle="modal" title="Nuevo"><strong>Nueva</strong> Asignación <strong> Docente</strong></a>
                </div>
            </div>
            <!-- END Row Styles Title -->

            <!-- Row Styles Content -->
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">id</i></th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">C I</th>
                            <th class="text-center">Función Docente</th>
                            <th class="text-center">Areas</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($docentes as $docente)
                        <tr class="">
                            <td class="text-center">{{$docente->id}}</td>
                            <td class="text-center">{{$docente->persona->user->name}}</td>
                            <td class="text-center">{{$docente->persona->ci}}</td>
                            <td class="text-center">{{$docente->persona->ocupacion}}</td>
                            <td class="text-center">
                                <a  class="btn btn-primary btn-xs" href="#modalVerAsignacion{{$docente->id}}" data-toggle="modal" title="Nuevo"><i class="gi gi-nameplate"></i> <strong> Ver</strong> Areas <strong> Asignadas</strong></a>
                            <!-- MODAL VER ASIGNACION -->
                                <div id="modalVerAsignacion{{$docente->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header text-center">
                                                <h3 class="modal-title"><i class="fa fa-clipboard"></i> Areas Asignadas</h3>
                                            </div>
                                            <!-- END Modal Header -->

                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <div class="table-responsive">
                                                    
                                                        <h4>Docente: <strong>{{$docente->persona->user->name}}</strong></h4>
                                                    
                                                    <table class="table table-vcenter table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Nº</i></th>
                                                                <th class="text-center">Nivel</th>
                                                                <th class="text-center">Turno</th>
                                                                <th class="text-center">Grado</th>
                                                                <th class="text-center">Areas</th>
                                                                <th class="text-center">Acción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                    
                                                            @foreach ($asignacions as $asignacion)
                                                           
                                                            @if ($asignacion->docente_id == $docente->id) 
                                                            <tr>
                                                                <td class="text-center">{{$asignacion->id}}</td>
                                                                <td>{{$asignacion->nivel->nivel}}</td>
                                                                <td>{{$asignacion->nivel->turno}}</td>
                                                                <td>{{$asignacion->grado->curso}} {{$asignacion->grado->paralelo}}</td>
                                                                <td>{{$asignacion->area->area}}</td>
                                                                <td class="text-center">
                                                                    <div class="btn-group btn-group-sx">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <a href="#modalEditAsignacion{{$asignacion->id}}" data-toggle="modal"class="btn btn-success "><i class="fa fa-edit"></i></a>
                                                                                <!-- MODAL EDITAR ASIGNACION -->
                                                                                <div id="modalEditAsignacion{{$asignacion->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                                                    <div class="modal-dialog">
                                                                                        <div class="modal-content">
                                                                                            <!-- Modal Header -->
                                                                                            <div class="modal-header text-center">
                                                                                                <h4 class="modal-title"><i class="fa fa-clipboard"></i> Actualizar Asignación</h4>
                                                                                            </div>
                                                                                            <!-- END Modal Header -->

                                                                                            <!-- Modal Body -->
                                                                                            <div class="modal-body">
                                                                                                <form action="{{route('admin.asignacions.update', $asignacion->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                                                                                    @csrf
                                                                                                    @method('PUT')
                                                                                                    <fieldset>

                                                                                                        <div class="form-group">
                                                                                                            <label class="col-md-4 control-label">Nivel - Turno</label>
                                                                                                            <div class="col-md-8">
                                                                                                                <select id="nivel_id" name="nivel_id" class="form-control" size="1">
                                                                                                                    @foreach ($nivels as $nivel)
                                                                                                                        @if ($nivel ['estado'] == "1")
                                                                                                                        <option value="{{$nivel->id}}"@if($asignacion->nivel_id == $nivel->id) selected  @endif>{{$nivel->nivel}} - {{$nivel->turno}}</option>
                                                                                                                        @endif      
                                                                                                                    @endforeach   
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        
                                                                                                            <label class="col-md-4 control-label">Grado</label>
                                                                                                            <div class="col-md-8">
                                                                                                                <select id="grado_id" name="grado_id" class="form-control" size="1">
                                                                                                                    @foreach ($grados as $grado)
                                                                                                                        <option value="{{$grado->id}}" @if($asignacion->grado_id == $grado->id) selected  @endif>{{$grado->curso}} - {{$grado->paralelo}} | {{$grado->nivel->nivel}}</option>     
                                                                                                                    @endforeach   
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        
                                                                                                            <label class="col-md-4 control-label">Areas</label>
                                                                                                            <div class="col-md-8">
                                                                                                                <select id="area_id" name="area_id" class="form-control" size="1">
                                                                                                                    @foreach ($areas as $area)
                                                                                                                        <option value="{{$area->id}}" @if($asignacion->area_id == $area->id) selected  @endif>{{$area->area}}</option>     
                                                                                                                    @endforeach   
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                    <div class="form-group form-actions">
                                                                                                        <div class="col-xs-12 text-right">
                                                                                                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancelar</button>
                                                                                                            <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <!-- END Modal Body -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>  
                                                                            </div> 
                                                                            <div class="col-md-4">                                                                  
                                                                                <form action="{{ route('admin.asignacions.destroy', $asignacion) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    {{-- <a href="javascript:void(0)" onclick="deleteDocumento()" data-toggle="tooltip" class="btn btn-danger"><i class="fa fa-times"></i></a> --}}
                                                                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>  
                                                            @endif                                                              
                                                            @endforeach 
                                                        </tbody>
                                                    </table>
                                                    <div class="form-group form-actions">
                                                        <div class="col-xs-12 text-right">
                                                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Modal Body -->
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>                  
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END Row Styles Content -->
        </div>
    </div>
</div>

<!-- MODAL CREAR ASIGNACION -->
<div id="modalCrearAsignacion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-clipboard"></i> Nueva Asignación</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{route('admin.asignacions.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    @csrf
                    <legend class="text-center">Seleccione las opciones</legend>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Docente</label>
                            <div class="col-md-8">
                                <select id="docente_id" name="docente_id" class="form-control" size="1">
                                    @foreach ($docentes as $docente)
                                        @if ($docente ['estado_doc'] == "1")
                                        <option value="{{$docente->id}}">{{$docente->persona->user->name}}</option>
                                        @endif      
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nivel - Turno</label>
                            <div class="col-md-8">
                                <select id="nivel_id" name="nivel_id" class="form-control" size="1">
                                    @foreach ($nivels as $nivel)
                                        @if ($nivel ['estado'] == "1")
                                        <option value="{{$nivel->id}}">{{$nivel->nivel}} - {{$nivel->turno}}</option>
                                        @endif      
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Grado</label>
                            <div class="col-md-8">
                                <select id="grado_id" name="grado_id" class="form-control" size="1">
                                    @foreach ($grados as $grado)
                                        <option value="{{$grado->id}}">{{$grado->curso}} - {{$grado->paralelo}} | {{$grado->nivel->nivel}}</option>     
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Areas</label>
                            <div class="col-md-8">
                                <select id="area_id" name="area_id" class="form-control" size="1">
                                    @foreach ($areas as $area)
                                        <option value="{{$area->id}}">{{$area->area}}</option>     
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-sm btn-primary">Asignar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>
@endsection 
