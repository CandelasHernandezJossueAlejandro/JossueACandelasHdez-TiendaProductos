@extends('layouts.header')
@section('content')
<div class="container">
    <br>
    <center>
        <h1>Modificar Tipos</h1>
    </center>
    <hr>
    <form class="row g-3" action="{{ route('salvarTipos', ['id' => $tipos->id_tipos]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field('PATHC') }}
        {{ method_field('PUT') }}
        <div class="col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" placeholder="{{ $tipos ->nombre }}" value="{{ $tipos ->nombre }}">
        </div>
        <div class="col-md-6">
            <label class="form-label">Detalle del tipos:</label>
            <textarea class="form-control" name="detalle" rows="3">{{ $tipos -> detalle }}</textarea>
        </div>
        <div class="col-md-3">
            <div class="form-check form-switch">
                <br><br>
                <input class="form-check-input" type="checkbox" role="switch" name="activo" {{ $tipos->activo > 0?'checked':''; }}>
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
                <button type="submit" class="btn btn-success">Modificar</button>
            </center>
        </div>
    </form>
</div>
@endsection