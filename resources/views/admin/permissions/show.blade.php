@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li> <a href="{{route('admin.nivels.index')}}">Niveles</a></li>
    <li>Nuevo Nivel</li>
    
</ul>
   
@endsection