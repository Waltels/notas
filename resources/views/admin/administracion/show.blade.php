@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li> <a href="{{route('admin.admins.index')}}">Administracion</a></li>
    <li>Datos del Administrador</li>
</ul>
<div class="row " >
    <div class="col-md-10 col-md-offset-1">
        <!-- View Message Block -->
        <div class="block full">
            <!-- View Message Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                </div>
                <h2>Datos del Administrador<strong> {{$admin->name}}</strong></h2>
            </div>
            <!-- END View Message Title -->

            <!-- Message Meta -->
            <table class="table table-borderless table-vcenter remove-margin">
                <tbody>
                    <tr>
                        
                        <td class="text-right"><strong>June 5, 2014 - 09:10 am</strong></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <!-- END Message Meta -->

            <!-- Message Body -->
            <p>El adminsitrador <strong>{{$admin->name}}</strong>, dentro los dataos registrados en el sistema, nacio en fecha <strong>{{$admin->fecha_nac}}</strong>, actualmente cuenta con su Cèdula de Identidad Nº <strong>{{$admin->ci}} </strong>, tienen como ocupacion <strong>{{$admin->ocupacion}}</strong>, siendo la direccion de su domicilio <strong>{{$admin->direccion}}</strong>, y su número de Teléfomo el <strong>{{$admin->telefono}}</strong>  </p>
            <hr>
            <!-- END Message Body -->

            <!-- Attachments Row -->
            <div class="row block-section">
                <div class="col-xs-6 col-sm-4 text-center">
                    <span class="text-muted">Sistema de administracion escolar</span>
                </div>
            </div>
            <!-- END Attachments Row -->
        </div>
        <!-- END View Message Block -->
    </div>
</div>

@endsection 