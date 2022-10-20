@extends('layouts.header')
@section('content')

<div class="container">
    <br>
    <h3>Modificar</h3>
    <br>
    <form class="row" action="{{ route('salvarProductos', ['id' => $producto->id_producto]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field('PATCH') }}
        {{ method_field('PUT') }}
        <div class="col-12">
            <div class="card card-body">
                <div class="row g3">
                    <div class="col-md-3">
                        <label for="exampleFormControlInput1">Clave del producto:</label>
                        <input class="form-control" type="text" name="clave" placeholder="{{ $producto->clave }}" value="{{ $producto->clave }}">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" aria-label="Default select example">Nombre del producto:</label>
                        <input class="form-control" type="text" name="nombre" placeholder="{{ $producto->nombre }}" value="{{ $producto->nombre }}">
                    </div>
                    <div class="col-md-3">
                        <label for="exampleFormControlInput1" aria-label="Default select example">Cantidad en stock::</label>
                        <input class="form-control" type="text" name="cantidad" placeholder="{{ $producto->cantidad }}" value="{{ $producto->cantidad }}">
                    </div>
                    <div class="col-auto">
                        <br>
                        <label for="exampleFormControlInput1" aria-label="Default select example">Precio del producto:</label>
                        <input class="form-control" type="text" name="costo" placeholder="{{ $producto->costo }}" value="{{ $producto->costo }}">
                    </div>
                    <div class="col-auto">
                        <br>
                        <label for="exampleFormControlInput1">Categoria del producto:</label>
                        <input class="form-control" type="text" name="categoria" placeholder="{{ $producto->categoria }}" value="{{ $producto->categoria }}">
                    </div>
                    <div class="col-auto">
                        <br><br>
                        <select class="form-select" name="id_tienda">
                            @foreach($tiendas as $tienda)
                            <option value="{{ $tienda -> id_tiendas }}" {{ $producto->id_tienda == $tienda->id_tiendas ?'selected':''; }}>{{ $tienda->id_tiendas .' '. $tienda -> nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3">
                        <br>
                        <label for="exampleFormControlInput1">Foto:</label>
                        <input class="form-control" type="text" name="foto" placeholder="{{ $producto->foto }}" value="{{ $producto->foto }}">
                    </div>
                    <div class="col-auto">
                        <div class="form-check form-switch">
                            <br><br>
                            <input class="form-check-input" type="checkbox" role="switch" name="activo" value="{{ $producto->activo }}" {{ $producto->activo > 0?'checked':''; }}>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Estatus(activo)</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br>
                        <a href="{{ route('listaProductos') }}">
                            <button type="button" class="btn btn-secondary">Volver</button>
                        </a>
                        <button type="submit" class="btn btn-success">Modificar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection