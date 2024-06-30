@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="">Configuración</a></li>
    <li> <a href="">Configuración Inicial</a></li>
    <li>Grados</li>
</ul>
<div id="page-content">
    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Datatables</strong> integration</h2>
        </div>
        <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>RUDE</th>
                        <th class="text-center">Nombres y Apellidos</i></th>
                        <th>CI</th>
                        <th>Nivel</th>
                        <th>Grado</th>
                        <th>Paralelo</th>
                        <th>Turno</th>
                        <th>Estado</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td class="text-center">{{$estudiante->id}}</td>
                        <td class="text-center">{{$estudiante->rude}}</td>
                        <td class="text-center">{{$estudiante->name}}</td>
                        <td class="text-center">{{$estudiante->persona->ci}}</td>
                        <td class="text-center">{{$estudiante->nivel->nivel}}</td>
                        <td class="text-center">{{$estudiante->grado->curso}}</td>
                        <td class="text-center">{{$estudiante->grado->paralelo}}</td>
                        <td class="text-center">{{$estudiante->Nivel->turno}}</td>
                        <td class="text-center">                      
                            @if ($estudiante->estado_e == 0)
                            <a href="javascript:void(0)" class="label label-danger">RETIRADO</a>
                            @else
                            <a href="javascript:void(0)" class="label label-success">EFECTIVO</a>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{route('student.estudiantes.show', $estudiante->id)}}" data-toggle="tooltip" title="Ver" class="btn btn-xs btn-default"><i class="fa fa-play"></i></a>
                                <a href="{{route('student.estudiantes.edit', $estudiante->id)}}" data-toggle="tooltip" title="Modificar" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
</div>
 
@endsection