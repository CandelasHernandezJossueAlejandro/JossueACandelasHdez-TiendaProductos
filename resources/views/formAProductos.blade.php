@extends('layouts.header')
@section('content')

<div class="container">
    <br>
    <center>
        <h1>Formulario Productos</h1>
    </center>
    <hr>
    <h3>Agregar</h3>
    <br>
    <form class="row" action="{{ route('registrarProductos') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

        <div class="col-md-3">
            <label for="exampleFormControlInput1" aria-label="Default select example">Clave del producto:</label>
            <input class="form-control" type="text" placeholder="1234" name="clave">
        </div>
        <div class="col-md-6">
            <label for="exampleFormControlInput1" aria-label="Default select example">Nombre del producto:</label>
            <input class="form-control" type="text" placeholder="Nombre" name="nombre">
        </div>
        <div class="col-md-3">
            <label for="exampleFormControlInput1" aria-label="Default select example">Cantidad en stock:</label>
            <input class="form-control" type="text" placeholder="stock" name="cantidad">
        </div>
        <div class="col-auto">
            <br>
            <label for="exampleFormControlInput1" aria-label="Default select example">Precio del producto:</label>
            <input class="form-control" type="text" placeholder="$$$$.$$" name="costo">
        </div>
        <div class="col-auto">
            <br>
            <label for="exampleFormControlInput1">Categoria del producto:</label>
            <input class="form-control" type="text" placeholder="jugueteria/alimentos" name="categoria">
        </div>
        <div class="col-auto">
            <br><br>
            <select class="form-select" name="id_tienda">
                @foreach($tiendas as $tienda)
                <option value="{{ $tienda -> id_tiendas }}">{{ $tienda -> id_tiendas .' '. $tienda -> nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-auto">
            <br>
            <label for="exampleFormControlInput1" aria-label="Default select example">foto:</label>
            <input class="form-control" type="text" placeholder="default.jpg" name="foto">
        </div>
        <div class="col-auto">
            <div class="form-check form-switch">
                <br><br>
                <input class="form-check-input" type="checkbox" role="switch" name="activo" checked disabled>
                <label class="form-check-label" for="flexSwitchCheckChecked">Estatus(activo)</label>
            </div>
        </div>
        <center>
            <div class="row">
                <div class="col-md-6">
                <br><br>
                    <a href="{{ route('listaProductos') }}">
                        <button type="button" class="btn btn-secondary">Volver</button>
                    </a>
                </div>
                <div class="col-md-6">
                <br><br>
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </center>
    </form>
</div>

@endsection