@extends('layouts.header')
@section('content')
<div class="container">
    <br>
    <center>
        <h1>Formulario Tiendas</h1>
    </center>
    <hr>
    <h3>Agregar</h3>
    <br>
    <form class="row g-3" action="{{ route('registrarTiendas') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-4">
            <label for="exampleFormControlInput1" aria-label="Default select example">Clave de la tienda:</label>
            <input class="form-control" type="text" placeholder="1234" name="clave">
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlInput1" aria-label="Default select example">Nombre de la tienda:</label>
            <input class="form-control" type="text" placeholder="Nombre" name="nombre">
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlInput1" aria-label="Default select example">Foto:</label>
            <input class="form-control" type="text" placeholder="example.jpg" name="foto">
        </div>
        <div class="col-md-12">
            <a href="{{ route('listaTiendas') }}">
                <button type="button" class="btn btn-secondary">Volver</button>
            </a>
            <button type="submit" class="btn btn-success">Registrar</button>
        </div>
    </form>
</div>
@endsection