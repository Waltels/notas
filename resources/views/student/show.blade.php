@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="">Configuración</a></li>
    <li> <a href="">Configuración Inicial</a></li>
    <li>Ver datos de inscripcion</li>
</ul>
<!-- Page content -->
                    <div id="page-content">
                        <!-- Inbox Content -->
                        <h3>Datos del <strong>Estudiante</strong>{{$estudiante->name}}</h3>
                            <div class="row">
                                <!-- Inbox Menu -->
                                <div class="col-sm-4 col-lg-3">
                                    <!-- Account Stats Block -->
                                    <div class="block">
                                        <!-- Account Status Title -->
                                        <div class="block-title">
                                            <h2><strong>Estudiante</strong></h2>
                                        </div>
                                        <!-- END Account Status Title -->

                                        <!-- Account Stats Content -->
                                        
                                        <div class="form-group">
                                            <label>Nombres y Apellidos</label>
                                            <p>{{$estudiante->name}}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Cédula de Identidad</label>
                                            <p>{{$estudiante->ci}}</p>
                                            <label>Fecha de Nacimiento</label>
                                            <p>{{$estudiante->fecha_nac}}</p>
                                            <label>Telefono</label>
                                            <p>{{$estudiante->telefono}}</p>
                                            <label>Direccion</label>
                                            <p>{{$estudiante->direccion}}</p>
                                            <span class="help-block">.</span>
                                        </div>
                                    </div>
                                    <!-- END Account Status Block -->
                                </div>
                                <!-- END Inbox Menu -->

                                <!-- Messages List -->
                                <div class="col-sm-8 col-lg-9">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="block">
                                                <!-- Messages List Title -->
                                                <div class="block-title">
                                                    <h2> El estudiante <strong>esta Matriculado</strong> en el:</h2>
                                                </div>
                                                <!-- END Messages List Title -->
                                                <div class="form-group">
                                                    
                                                    <div class="col-md-4">
                                                        <label for="example-nf-email">Nivel</label>
                                                        <p>{{$estudiante->nivel}} {{$estudiante->turno}}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="example-nf-email">Grado</label>
                                                        <p>{{$estudiante->curso}} {{$estudiante->paralelo}}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="example-nf-email">Rude</label>
                                                        <p>{{$estudiante->rude}}</p>
                                                    </div>
                                                    <span class="help-block">.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="block">
                                                <!-- Messages List Title -->
                                                <div class="block-title">
                                                    <h2><i class="fa fa-users"></i> Datos de <strong>Padres</strong> del Estudiante</h2>
                                                </div>
                                                <!-- END Messages List Title -->
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <label >Nombres y Apellidos</label>
                                                        <p>{{$estudiante->nombre_apellido}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label >Cédula de Identidad</label>
                                                        <p>{{$estudiante->cipf}}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label >Parentesco</label>
                                                        <p>{{$estudiante->parentesco}}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label >Telefono</label>
                                                        <p>{{$estudiante->telefonopf}}</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label >Direccion</label>
                                                        <p>{{$estudiante->direccionpf}}</p>
                                                    </div>
                                                    <span class="help-block">.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Messages List -->
                            </div>
                            
                        <div class="form-group form-actions">
                            <div class="col-md-8 col-md-offset-4">
                                <a href="{{route('student.estudiantes.index')}}" type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Regresar al listado</a>
                            </div>
                        </div>
                        <!-- END Inbox Content -->
                    </div>
                    <!-- END Page Content -->   
@endsection