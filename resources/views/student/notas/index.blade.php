@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="">Configuración</a></li>
    <li> <a href="">Configuración Inicial</a></li>
    <li>Grados</li>
</ul>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="block ">
            <!-- Row Styles Title -->
            <div class="block-title">
                <h2><strong>Grados </strong> Asignados</h2> 
                <div class="block-options pull-right">
                    <a  class="btn btn-success btn-xs" href="" data-toggle="tooltip" title="Nuevo"><strong>Nueva</strong> Asignacion <strong> Docente</strong></a>
                </div>
            </div>
            <!-- END Row Styles Title -->

            <!-- Row Styles Content -->
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">id</i></th>
                            <th class="text-center">Nivel</th>
                            <th class="text-center">Turno</th>
                            <th class="text-center">Grado</th>
                            <th class="text-center">Paralelo</i></th>
                            <th class="text-center">Areas</th>
                            <th style="width: 150px;" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                     $contador = 0;
                @endphp
                       @foreach ($asignacions as $asignacion)
                       @if ( auth()->user()->email == $asignacion->docente->persona->user->email)
                       @php
                        $contador = $contador + 1;
                    @endphp
                        <tr class="">
                            <td class="text-center">{{$contador}}</td>
                            <td class="text-center">{{$asignacion->nivel->nivel}}</td>
                            <td class="text-center">{{$asignacion->nivel->turno}}</td>
                            <td class="text-center">{{$asignacion->grado->curso}}</td>
                            <td class="text-center">{{$asignacion->grado->paralelo}}</td>
                            <td class="text-center">{{$asignacion->area->area}}</td>
                            <td class="text-center">
                                {{ $asignacion->grado->id }}
                                <div class="btn-group btn-group-md">
                                    <a  class="btn btn-primary btn-xs" href="{{route('student.notas.create')}}?id_grado={{ $asignacion->grado->id }}" data-toggle="tooltip" title="Notas"><i class="gi gi-sort"></i> Notas</strong></a>
                                </div>
                            </td>
                        </tr> 
                        @endif                
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