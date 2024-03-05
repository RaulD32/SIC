@extends('plantilla')
@section('contenido')
    <div class="container mt-5">
        <h1>Lista de Estudiantes</h1>
        <a href="/estudiantes" class="btn btn-primary mb-3">Agregar Nuevo Estudiante</a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Student as $student)
                <tr>
                    <td>{{ $student->id_student }}</td>
                    <td>{{ $student->name_student }}</td>
                    <td>{{ $student->email_student }}</td>
                    <td>
                        <a href="{{ route('Alumnos.show', $student->id) }}" class="btn btn-info">Detalles</a>
                        <a href="{{ route('Alumnos.edit', $student->id) }}" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    {{-- Botón "Anterior" --}}
                    <li class="page-item {{ $Student->previousPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $Student->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
            
                    {{-- Elementos de la paginación --}}
                    @for ($i = 1; $i <= $Student->lastPage(); $i++)
                        <li class="page-item {{ $i == $Student->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $Student->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
            
                    {{-- Botón "Siguiente" --}}
                    <li class="page-item {{ $Student->nextPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $Student->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
        </div>
    </div>
@endsection
