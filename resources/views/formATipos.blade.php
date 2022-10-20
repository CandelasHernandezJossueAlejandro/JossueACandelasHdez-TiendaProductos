@extends('layouts.header')
@section('content')
<div class="container">
    <br>
    <center>
        <h1>Formulario Tipos</h1>
    </center>
    <hr>
    <h3>Agregar</h3>
    <br>
    <form class="row g-3" action="{{ route('registrarTipos') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" placeholder="">
        </div>
        <div class="col-md-6">
            <label class="form-label">Detalle del tipos:</label>
            <textarea class="form-control" name="detalle" rows="3"></textarea>
        </div>
        <div class="col-md-3">
            <div class="form-check form-switch">
                <br><br>
                <input class="form-check-input" type="checkbox" role="switch" name="activo" checked disabled>
                <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
            </div>
        </div>
        <div class="col-md-6">
            <center>
                <a href="{{ route('listaTipos') }}">
                    <button type="button" class="btn btn-secondary">Volver</button>
                </a>
            </center>
        </div>
        <div class="col-md-6">
            <center>
                <button type="submit" class="btn btn-success">Registrar</button>
            </center>
        </div>
    </form>
</div>
@endsection