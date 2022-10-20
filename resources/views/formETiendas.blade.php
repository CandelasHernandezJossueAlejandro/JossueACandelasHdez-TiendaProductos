@extends('layouts.header')
@section('content')
<div class="container">
    <br>
    <h3>Modificar</h3>
    <br>
    <form class="row g-3" action="{{ route('salvarTiendas', ['id' => $tiendas -> id_tiendas]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field('PATCH') }}
        {{ method_field('PUT') }}
        <div class="col-md-4">
            <label for="exampleFormControlInput1" aria-label="Default select example">Clave de la tienda:</label>
            <input class="form-control" type="text" name="clave" placeholder="{{ $tiendas->clave }}" value="{{ $tiendas->clave }}">
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlInput1" aria-label="Default select example">Nombre de la tienda:</label>
            <input class="form-control" type="text" name="nombre" placeholder="{{ $tiendas->nombre }}" value="{{ $tiendas->nombre }}">
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlInput1" aria-label="Default select example">Foto:</label>
            <input class="form-control" type="text" name="foto" placeholder="{{ $tiendas->foto }}" value="{{ $tiendas->foto }}">
        </div>

        <div class="col-6">
            <center>
                <a href="{{ route('listaTiendas') }}">
                    <button type="button" class="btn btn-secondary">Volver</button>
                </a>
            </center>
        </div>

        <div class="col-6">
            <center>
                <button type="submit" class="btn btn-success">Editar</button>
            </center>
        </div>
    </form>
</div>
@endsection