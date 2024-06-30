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
                    <a  class="btn btn-success btn-xs" href="{{route('admin.docentes.create')}}" data-toggle="tooltip" title="Nuevo"><strong>Nuevo</strong> Docente <strong> U E</strong></a>
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
                            <th class="text-center">Funcion</th>
                            <th class="text-center">Telefono</th>

                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $docente)
                        <tr class="">
                            <td class="text-center">{{$docente->id}}</td>
                            <td class="text-center">{{$docente->name}}</td>
                            <td class="text-center">{{$docente->ci}}</td>
                            <td class="text-center">{{$docente->ocupacion}}</td>
                            <td class="text-center">{{$docente->telefono}}</td> 
                            <td class="text-center">
                                <div class="btn-group btn-group-md">
                                    <a href="{{route('admin.docentes.edit', $docente)}}" data-toggle="tooltip" title="Ver" class="btn btn-default"><i class="fa fa-play"></i></a>
                                   
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
@endsection 