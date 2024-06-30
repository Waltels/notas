@extends('layouts.main')
@section('section')

@foreach ($estudiantes as $estudiante)
@if ($id_grado == $estudiante->grado_id)
    @php
    $grado = $estudiante->grado->curso;
    $paralelo = $estudiante->grado->paralelo;
    $nivel = $estudiante->nivel->nivel;
    @endphp     
@endif 
@endforeach
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="">Configuración</a></li>
    <li> <a href="">Configuración Inicial</a></li>
    <li>Grados</li>
</ul>
<div id="page-content">
    <!-- Datatables Content -->
    <h3>Estudiantes del curso <strong> {{$grado}} {{$paralelo}}</strong> del nivel <strong>{{$nivel}}</strong></h3>
    <div class="block full">
        <div class="block-title">
            <h2>Listado de <strong>Estudiantes</strong></h2>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>RUDE</th>
                        <th class="text-center">Nombres y Apellidos</i></th>
                        <th>Nivel</th>
                        <th>Grado</th>
                        <th>Paralelo</th>
                        <th class="text-center">1º TRIM</th>
                        <th class="text-center">2º TRIM</th>
                        <th class="text-center">3º TRIM</th>
                    </tr>
                </thead>
                <tbody>
                @php
                     $contador_estudiantes = 0;
                @endphp
                    @foreach ($estudiantes as $estudiante)
                    @if ($id_grado == $estudiante->grado_id)
                    @php
                        $contador_estudiantes = $contador_estudiantes + 1;
                    @endphp
                    <tr>
                        <td class="text-center">{{$contador_estudiantes}}</td>
                        <td class="text-center">{{$estudiante->rude}}</td>
                        <td class="text-center">{{$estudiante->name}}</td>
                        <td class="text-center">{{$estudiante->nivel->nivel}}</td>
                        <td class="text-center">{{$estudiante->grado->curso}}</td>
                        <td class="text-center">{{$estudiante->grado->paralelo}}</td>
                        <td class="text-center">
                            <input type="text" style="text-align: center" id="nota1_{{$contador_estudiantes}}" name="nota1" class="form-control" size="10" placeholder="Calificacion...">
                        </td>
                        <td class="text-center">
                            <input type="text" style="text-align: center" id="nota2_{{$contador_estudiantes}}" name="nota2" class="form-control" size="10" placeholder="Calificacion..." >
                        </td>
                        <td class="text-center">
                            <input type="text" style="text-align: center" id="nota3_{{$contador_estudiantes}}" name="nota3" class="form-control" size="10" placeholder="Calificacion..." >
                        </td>
                        {{-- <td class="text-center">
                            <input type="text" style="text-align: center" id="nota1_{{$estudiante->id}}" name="ci" class="form-control" size="10" value=" nota1 + " disabled>
                        </td> --}}
                    </tr>                          
                    @endif
                    @endforeach
                </tbody>
            </table>
            <br>
            <button type="submit" id="btnGuardar" class=" mt-3 btn btn-sm btn-primary"><i class="hi hi-ok"></i> Registrar Calificaciones</button>
            <script>
                $('#btnGuardar').click(function(){
                    var n = {{$contador_estudiantes}};
                    var i = 1;                    
                    for( i=1; i<=n; i++){
                        var a = '#nota1_'+ i;
                        var nota1 = $(a).val();

                        var b = '#nota2_'+ i;
                        var nota2 = $(b).val();

                        var c = '#nota3_'+ i;
                        var nota3 = $(c).val();
                        /* alert(nota1+" -"+nota2+" - "+nota3); */

                        $.ajax({
                            type: "GET",
                            url:"{{route('student.notas.store')}}",
                            data:{nota1:nota1},
                            success: function(datos){
                                alert ('data');
                                $("#msg").html(datos);
                            
                            } 

                        });
                    }
                });
            </script>
            <div id = 'msg'></div>           
    </div>
    <!-- END Datatables Content -->
</div>
 
@endsection