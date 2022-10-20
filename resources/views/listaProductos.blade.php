@extends('layouts.header')
@section('content')
    <br>
    <div class="container">
    <center><h1>Lista Productos</h1></center>
        <hr>
        <div class="col-md-12">
            <a href="{{ route('altaProductos') }}">
                <button type="submit" class="btn btn-success">Agregar</button>
            </a>
        </div>
        <hr>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <td>Id</td>
                    <td>clave</td>
                    <td>Nombre</td>
                    <td>Cantidad</td>
                    <td>Costo</td>
                    <td>Categoria</td>
                    <td>Id_tienda</td>
                    <td>activo</td>
                    <td>Foto</td>
                    <td colspan="3">Acción</td>
                </tr>
            </thead>
                @foreach($productos1 as $producto)
                <tr>
                    <td>{{ $producto -> id_producto}}</td>
                    <td>{{ $producto -> clave}}</td>
                    <td>{{ $producto -> nombre }}</td>
                    <td>{{ $producto -> cantidad }}</td>
                    <td>${{ $producto -> costo }}</td>
                    <td>{{ $producto -> categoria }}</td>
                    <td>{{ $producto -> id_tienda }}</td>
                    <td>
                        @if($producto->activo == 1) <b style="color: #0f0">Activo</b>
                        @else<b style="color: #F00">Inactivo</b>
                        @endif
                    </td>
                    <td><img src="{{ asset ('imgProductos/'.$producto -> foto) }}" style="width: 100px;"></td>
                    <td><a href="{{ route('detalleProductos', ['id' => $producto->id_producto]) }}"><button class="btn btn-primary btn-sm">Consultar</button></a></td>
                    <td><a href="{{ route('editarProductos', ['id' => $producto->id_producto]) }}"><button class="btn btn-primary btn-sm">Editar</button></a></td>
                    <td><a href="{{ route('borrarProductos', ['id' => $producto->id_producto]) }}"><button class="btn btn-danger btn-sm">Eliminar</button></a></td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection