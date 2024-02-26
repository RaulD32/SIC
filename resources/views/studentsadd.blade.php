@extends('plantilla')
@section('contenido')
    <h1>Lista de Estudiantes</h1>
    <a href="/estudiantes" class="btn btn-primary mb-3">Agregar Nuevo Estudiante</a>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $student)
            <tr>
                <td>{{$student->id_student}}</td>
                <td>{{$student->name_student}}</td>
                <td>{{$student->email_student}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
