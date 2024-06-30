@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="">Configuración</a></li>
    <li> <a href="">Configuración Inicial</a></li>
    <li>Grados</li>
</ul>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="block ">
            <!-- Row Styles Title -->
            <div class="block-title">
                <h2><strong>Lista de Asignacion </strong> Docente</h2>
                <div class="block-options pull-right">
                    <a  class="btn btn-success btn-xs" href="{{route('maestro.asignacions.create')}}" data-toggle="tooltip" title="Nuevo"><strong>Nueva</strong> Asignacion <strong> Docente</strong></a>
                </div>
            </div>
            <!-- END Row Styles Title -->

            <!-- Row Styles Content -->
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">id</i></th>
                            <th class="text-center">Docente</th>
                            <th class="text-center">Nivel</th>
                            <th class="text-center">Grado</th>
                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($asignacions as $asignacion)
                        <tr class="">
                            <td class="text-center">{{$asignacion->id}}</td>
                            <td class="text-center">{{$asignacion->docente_id}}</td>
                            <td class="text-center">{{$asignacion->nivel_id}}</td>
                            <td class="text-center">{{$asignacion->grado_id}}</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-md">
                                    <a href="{{route('maestro.asignacions.edit', $asignacion->id )}}" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteDocumento()" data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>                  
                        @endforeach
                    </tbody>
                </table>
                {{-- <form   action="{{route('admin.gestions.destroy', $gestion)}}" 
                                    method="POST" 
                                    id="FormDelete">
                                    @csrf
                                    @method('DELETE')   
                                    </form> --}}
            </div>
            <!-- END Row Styles Content -->
        </div>
    </div>
</div>
@push('js')
    <script>
        function deleteDocumento(){
            let form = document.getElementById('FormDelete');
            form.submit();
        }
    </script>  
@endpush
 
@endsection