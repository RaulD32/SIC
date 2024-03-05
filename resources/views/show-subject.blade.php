@extends('plantilla')
@section('titulo', 'Lista de asignaturas')
@section('contenido')
<h1>Lista de unidades</h1>

<h2>Nombre de la asignatura</h2>
{{$subject}}
{{$units}}
@endsection