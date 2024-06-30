@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li>Nuevo Administrador</li>
</ul>
<div class="row " >
    <div class="col-md-12">
        <div class="block">
            <!-- Normal Form Title -->
            <div class="block-title">
                <h1><strong>Crear</strong> Docente</h1>
            </div>
            <!-- END Normal Form Title -->

            <!-- Normal Form Content -->
            <form action="{{route('admin.docentes.store')}}" method="POST" class="form-horizontal form-bordered">
                @csrf
                <div class="form-group">
                <h4>Datos personales del<strong> Docente</strong></h4>
                    <div class="col-xs-4">
                        <label for="example-nf-email">Nombre</label>
                        <select id="user_id" name="user_id" class="form-control" size="1">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{{$user->name}}}</option>    
                            @endforeach   
                        </select>
    
                    </div>
                    <div class="col-xs-2">
                        <label for="example-nf-email">C I</label>
                        <input type="text" id="ci" name="ci" class="form-control" placeholder="Cedula de Identidad">
                    </div>
                    <div class="col-md-3">
                        <div class="input-group bootstrap-timepicker">
                            <label for="example-nf-email">Fecha de nacimiento</label>
                            <input type="text" id="fecha_nac" name="fecha_nac" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <label for="example-nf-email">Formación</label>
                        <input type="text" id="ocupacion" name="ocupacion" class="form-control" placeholder="Formación">
                     
    
                    </div>
                    <div class="col-md-6">
                        <label for="example-nf-email">Dirección</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección">
                    </div>
                    <div class="col-md-3">
                        <label for="example-nf-email">Telefono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono">
                    </div>
                </div>
                <div class="form-group">
                    <h4>Datos de <strong>función Docente</strong></h4>
                    <div class="col-xs-3">
                        <label for="example-nf-email">Asignacion</label>
                        <input type="text" id="especialidad" name="especialidad" class="form-control" placeholder="Asignacion Docente">
                    </div>
                    <div class="col-xs-3">
                        <label for="example-nf-email">RDA</label>
                        <input type="text" id="rda" name="rda" class="form-control" placeholder="Regsitro Docente Administrativo">
                    </div>
                    <div class="col-xs-3">
                        <label for="example-nf-email">Ítem</label>
                        <input type="text" id="item" name="item" class="form-control" placeholder="Item asignado">
                    </div>
                    <div class="col-xs-3">
                        <label for="example-nf-email">Antiguedad</label>
                        <input type="text" id="antiguedad" name="antiguedad" class="form-control" placeholder="Años de servicio">
                    </div>
                </div>
    
                <div class="form-group form-actions">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-sm btn-info">Guardar</button>
                    </div>
                </div>
            </form>
            <!-- END Normal Form Content -->
        </div>
    </div>

</div>

@endsection 