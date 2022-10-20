@extends('layouts.header')
@section('content')

<div class="container container-fluid">
    <br>
    <center>
        <h1>Usuario - Detalle</h1>
    </center>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-8 card">
            <div class="row card-body">
                <div class="col-auto">
                    <h5>Nombre: </h5>
                    <p class="text-xl-start">{{ $usuario->nombre .' '. $usuario->app .' '. $usuario->ap }}</p>
                </div>
                <div class="col-auto">
                    <h5>Clave | Matricula: </h5>
                    <p class="text-xl-start">{{ $usuario->clave }}</p>
                </div>
                <div class="col-auto">
                    <h5>Fecha de Nacimiento: </h5>
                    <p class="text-xl-start">{{ $usuario->fn }}</p>
                </div>
                <div class="col-auto">
                    <h5>Genero: </h5>
                    @if($usuario->gen == "M")
                    <p class="text-xl-start">Masculino</p>
                    @elseif($usuario->gen == "F")
                    <p class="text-xl-start">Femenino</p>
                    @else
                    <p class="text-xl-start">Otro</p>
                    @endif
                </div>
                <div class="col-auto">
                    <h5>Email: </h5>
                    <p class="text-xl-start">{{ $usuario->email }}</p>
                </div>
                <div class="col-auto">
                    <h5>Contraseña: </h5>
                    <p class="text-xl-start">{{ $usuario->pass }}</p>
                </div>
                <div class="col-auto">
                    <h5>Tipo de usuario: </h5>
                    @if($usuario->id_tipo == 1)
                    <p class="text-xl-start">Cliente</p>
                    @elseif($usuario->id_tipo == 2)
                    <p class="text-xl-start">Administrador</p>
                    @endif
                </div>
                <div class="col-auto">
                    <h5>Estatus: </h5>
                    @if($usuario->activo > 0)
                    <p class="text-xl-start">Activo</p>
                    @else
                    <p class="text-xl-start">Inactivo</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <img src="{{ asset ('img/'.$usuario -> foto) }}" style="width: 200px; border-radius: 15px;">
        </div>
    </div>
    <div class="col-12">
        <br>
        <a href="{{ route('listaUsuarios') }}">
            <button type="button" class="btn btn-secondary">Volver</button>
        </a>
    </div>

</div>

@endsection