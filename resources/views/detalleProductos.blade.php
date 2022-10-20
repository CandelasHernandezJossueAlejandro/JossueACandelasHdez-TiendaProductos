@extends('layouts.header')
@section('content')

<div class="container">

    <br>
    <center>
        <h1>{{ $productos->nombre }}</h1>
    </center>
    <hr>
    <div class="row">
        <div class="col-6">
            <center>
                <img src="{{ asset ('imgProductos/'.$productos -> foto) }}" style="width: 20em;"></td>
            </center>
        </div>
        <div class="col-6">
            <div class="col-3">
                <h5>Clave:</h5>
                <p class="lead"> {{ $productos->clave }} </p>
            </div>
            <div class="col-4">
                <h5>Nombre:</h5>
                <p class="lead"> {{ $productos->nombre }} </p>
            </div>
            <div class="col-auto">
                <h5>Stock:</h5>
                <p class="lead"> {{ $productos->cantidad }} </p>
            </div>
            <div class="col-auto">
                <h5>Costo:</h5>
                <p class="lead"> $ {{ $productos->costo }} </p>
            </div>
            <div class="col-auto">
                <h5>Categoria:</h5>
                <p class="lead"> {{ $productos->categoria }} </p>
            </div>
            <div class="col-auto">
                <h5>Id tienda:</h5>
                <p class="lead"> {{ $productos -> id_tienda }} </p>
            </div>
            <div class="col-auto">
                <h5>Estatus:</h5>
                @if($productos -> activo > 0)
                <p class="lead"> Activo </p>
                @else
                <p class="lead"> Inactivo </p>
                @endif
            </div>
        </div>
        <center>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('listaProductos') }}">
                        <button type="button" class="btn btn-secondary">Volver</button>
                    </a>
                </div>
            </div>
        </center>
    </div>

    @endsection