@extends('layouts.header')
@section('content')

<div class="container">
    <br>
    <center>
        <h1>Tiendas - Detalle</h1>
    </center>
    <hr>
    <div class="row">
        <div class="col-12">
            <br>
            <center>
                <h3>Foto:</h3>
                <img src="{{ asset ('imgTiendas/'.$tiendas -> foto) }}" style="width: 200px; border-radius: 15px;">
                <h3>Clave:</h3>
                <p class="lead">{{ $tiendas->clave }}</p>
                <h3>Nombre:</h3>
                <p class="lead">{{ $tiendas->nombre }}</p>
            </center>
        </div>
    </div>
    <div class="col-12">
        <center>
            <br>
            <a href="{{ route('listaTiendas') }}">
                <button type="button" class="btn btn-secondary">Volver</button>
            </a>
        </center>
    </div>
</div>

@endsection