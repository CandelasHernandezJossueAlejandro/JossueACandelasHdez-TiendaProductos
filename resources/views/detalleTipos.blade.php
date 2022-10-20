@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <center>
                <br>
                <h1 class="display-3">{{ $tipos -> nombre }}</h1>
            </center>
        </div>

        <div class="col-md-12 text-center">
            <p class="lead">
                Estatus: {{ $tipos -> activo }}
            </p>
        </div>

        <div class="col-md-12 text-center">
            <p class="lead">
                {{ $tipos -> detalle }}
            </p>
        </div>

        <div class="col-md-12">
            <center>
                <br>
                <a href="{{ route('listaTipos') }}">
                    <button type="button" class="btn btn-secondary">Volver</button>
                </a>
            </center>
        </div>
    </div>
</div>
@endsection