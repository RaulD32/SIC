@extends('plantilla')
@section('titulo', 'Agregar Estudiantes')
@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Agregar Estudiante</h2>
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success">
                    {{ $mensaje }}
                </div>
                @endif
                <form action="{{url('alumnos')}}" method="POST">

                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name_student" class="form-control" placeholder="Nombre" value="{{old('name_student')}}">
                        @error('name_student')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="id_student" class="form-control" placeholder="Matricula">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email_student" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="password_student" class="form-control" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
