@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="">Configuración</a></li>
    <li> <a href="">Configuración Inicial</a></li>
    <li>Grados</li>
</ul>
<!-- Page content -->
                    <div id="page-content">
                        @error('name')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "Deve incluir el nombre y apellidos del estudiante"
                            });
                        </script>
                        @enderror
                        @error('fecha_nac')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "Deve incluir la fechade  nacimiento de estudiante"
                            });
                        </script>
                        @enderror
                       
                        @error('rude')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "Deve incluir llenar el rude del estudiante"
                            });
                        </script>
                        @enderror
                        @error('nombre_apellido')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "Deve registrar un nombre y apellido del PPff"
                            });
                        </script>
                        @enderror
                        
                        <!-- Inbox Content -->
                        <form action="{{route('student.estudiantes.store')}}" method="POST" class="form-horizontal form-bordered">
                            @csrf
                            <div class="row">
                                <!-- Inbox Menu -->
                                <div class="col-sm-4 col-lg-3">
                                    <!-- Account Stats Block -->
                                    <div class="block">
                                        <!-- Account Status Title -->
                                        <div class="block-title">
                                            <h2><i class="fa fa-user"></i> Datos del <strong>Estudiante</strong></h2>
                                        </div>
                                        <!-- END Account Status Title -->

                                        <!-- Account Stats Content -->
                                        
                                        <div class="form-group">
                                            <label>Nombres y Apellidos</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Nombres y Apellidos...">
                                        </div>
                                        <div class="form-group">
                                            <label>Cédula de Identidad</label>
                                            <input type="text" id="ci" name="ci" class="form-control" placeholder="Cédula de Identidad...">
                                            <label>Fecha de Nacimiento</label>
                                            <input type="text" id="fecha_nac" name="fecha_nac" class="form-control" placeholder="Fecha de nacimiento...">
                                            <label>Telefono</label>
                                            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono...">
                                            <label>Direccion</label>
                                            <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección...">
                                            <span class="help-block">Por favor ingrese todos los datos</span>
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
                                                    <h2><i class="fa fa-graduation-cap"></i> Datos de <strong>Matricula</strong> del Estudiante</h2>
                                                </div>
                                                <!-- END Messages List Title -->
                                                <div class="form-group">
                                                    
                                                    <div class="col-md-4">
                                                        <label for="example-nf-email">Nivel</label>
                                                        <select id="nivel" name="nivel_id" class="form-control" size="1">
                                                            @foreach ($nivels as $nivel)
                                                            <option value="{{$nivel->id}}">{{$nivel->nivel}} - {{$nivel->turno}}</option>
                                                            @endforeach
                                                         </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="example-nf-email">Grado</label>
                                                        <select id="grado" name="grado_id" class="form-control" size="1">
                                                            @foreach ($grados as $grado)
                                                            <option value="{{$grado->id}}">{{$grado->curso}} - {{$grado->paralelo}}</option>
                                                            @endforeach 
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="example-nf-email">Rude</label>
                                                        <input type="text" id="rude" name="rude" class="form-control" placeholder="Cedula de Identidad">
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
                                                        <input type="text" id="nombre_apellido" name="nombre_apellido" class="form-control" placeholder="Nobres y Apellidos">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label >Cédula de Identidad</label>
                                                        <input type="text" id="cipf" name="cipf" class="form-control" placeholder="Cedula de Identidad">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label >Parentesco</label>
                                                        <select id="parentesco" name="parentesco" class="form-control" size="1">
                                                            <option value="Padre">Padre</option>
                                                            <option value="Madre">Madre</option>
                                                            <option value="Hermmana/o">Hermmana/o</option>
                                                            <option value="Tia/o">Tia/o</option>
                                                            <option value="Abuela/o">Abuela/o</option>
                                                            <option value="Tutor">Tutor</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label >Telefono</label>
                                                        <input type="text" id="telefonopf" name="telefonopf" class="form-control" placeholder="Teléfono del Padre de familia">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label >Direccion</label>
                                                        <input type="text" id="direccionpf" name="direccionpf" class="form-control" placeholder="Direccion del Padre de familia">
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
                                <button type="submit" class="btn btn-sm btn-primary"><i class="hi hi-ok"></i> Registrar al Estudiante</button>
                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Cancelar Registro</button>
                            </div>
                        </div>
                        </form>
                        <!-- END Inbox Content -->
                    </div>
                    <!-- END Page Content -->   
@endsection