@extends('plantilla')
@section('titulo', 'Detalles estudiante')
@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-primary text-white">Detalles del Estudiante</h5>
                <div class="card-body">
                    <div class="table-responsive" style="font-size: 1.4em;">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nombre del Estudiante</th>
                                    <th>Matrícula del Estudiante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$Student->name_student}}</td>
                                    <td>{{$Student->id_student}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-primary btn-block" href="/Alumnos">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
