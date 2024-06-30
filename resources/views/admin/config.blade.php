@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li>Configuración</li>
</ul>
<div>
    <div class="row">
        <h3 class="text-center">Configuración Inicial</h3>
        <div class="col-sm-6 col-lg-4">
            <!-- Widget -->
            <a href="{{route('admin.permissions.index')}}" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="gi gi-notes_2"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        Permisos <strong>del Sisitema</strong><br>
                        <small>Gestión de permisos del Sistema</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Widget -->
            <a href="{{route('admin.roles.index')}}" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background animation-fadeIn">
                        <i class="gi gi-group"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        Roles  <strong>del Sistema</strong><br>
                        <small>Asignacion de permisos a los Roles de Usuario</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Widget -->
            <a href="{{route('admin.users.index')}}" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="hi hi-user"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        Usuarios <strong>del Sistema</strong><br>
                        <small>Asignación de Roles a Usuarios del Sistema</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <h3 class="text-center">Configuración Administrativa</h3>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="{{route('admin.admins.index')}}" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background animation-fadeIn">
                        <i class="gi gi-bank"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        Administración <strong>U E</strong><br>
                        <small>Gestión Administrativa</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="{{route('admin.gestions.index')}}" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                        <i class="gi gi-calendar"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        Gestion <strong>Educativa</strong><br>
                        <small>Gestión Académica</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="{{route('admin.nivels.index')}}" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="hi hi-signal"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        Niveles <strong>Educativos</strong><br>
                        <small>Gestión Académica</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="{{route('admin.grados.index')}}" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        Grados <strong>Educativos</strong><br>
                        <small>Gestión Académica</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
    </div>  

</div>
@endsection