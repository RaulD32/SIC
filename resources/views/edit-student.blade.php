@extends('plantilla')
@section('titulo', 'Editar estudiante')
@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="font-size: 1.4em;">
                <h5 class="card-header bg-primary text-white">Editar Alumno</h5>
                <div class="card-body">
                    <form action="{{ route('Alumnos.update', $Student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name_student">Nombre:</label>
                            <input type="text" class="form-control" id="name_student" name="name_student" placeholder="Nombre" value="{{ $Student->name_student }}">
                            @error('name_student')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Editar</button>
                        <a class="btn btn-primary btn-block" href="/Alumnos">Regresar</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
