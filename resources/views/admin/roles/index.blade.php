@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li> <a href="{{route('admin.nivels.index')}}">Niveles</a></li>
    <li>Nuevo Nivel</li>
    
</ul>



<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="block ">
            <!-- Row Styles Title -->
            <div class="block-title">
                <h2><strong>Roles</strong> de Usuarios</h2>
                <div class="block-options pull-right">
                    <a  class="btn btn-success btn-xs" href="{{route('admin.roles.create')}}" data-toggle="tooltip" title="Nuevo"><strong>Nuevo</strong> Rol <strong> Escolar</strong></a>
                </div>
            </div>
            <!-- END Row Styles Title -->

            <!-- Row Styles Content -->
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">id</i></th>
                            <th class="text-center">Roles</th>
                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr class="">
                            <td class="text-center">{{$role->id}}</td>
                            <td class="text-center">{{$role->name}}</td>

                            <td class="text-center">
                                <div class="btn-group btn-group-md">
                                    <a href="{{route('admin.roles.edit', $role )}}" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteDocumento()" data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>                  
                        @endforeach
                    </tbody>
                </table>
                {{-- <form   action="{{route('admin.roles.destroy', $role)}}" 
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
@endsection