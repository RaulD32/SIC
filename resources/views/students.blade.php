@extends('plantilla')
@section('titulo', 'Agregar Estudiantes')
@section('contenido')

<div class="container">
    <h1>Lista de estudiantes</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Students as $student)
            <tr>
                <td>{{ $student->id_student }}</td>
                <td>{{ $student->name_student }}</td>
                <td>{{ $student->lastname_student }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<<<<<<< HEAD
</div>

@endsection
=======
    {{-- ({$Students->links()}) --}}
</div>


@endsection




>>>>>>> raul
