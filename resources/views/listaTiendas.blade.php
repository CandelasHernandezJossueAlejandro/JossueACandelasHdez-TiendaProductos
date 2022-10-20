@extends('layouts.header')
@section('content')
    <br>
    <div class="container">
        <center><h1>Lista Tiendas</h1></center>
        <hr>
        <div class="col-md-12">
            <a href="{{ route('formATiendas') }}">
                <button type="submit" class="btn btn-success"><span class="material-symbols-outlined">add</span></button>
            </a>
        </div>
        <hr>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <td>Id_Tienda</td>
                    <td>Clave</td>
                    <td>Nombre</td>
                    <td>Foto</td>
                    <td colspan="3">Acción</td>
                </tr>
            </thead>
            @foreach($tiendas1 as $tiendas)
                <tr>
                    <td>{{ $tiendas -> id_tiendas }}</td>
                    <td>{{ $tiendas -> clave }}</td>
                    <td>{{ $tiendas -> nombre }}</td>
                    <td><img src="{{ asset ('imgTiendas/'.$tiendas -> foto) }}" style="width: 50px;"></td>
                    <td><a href="{{ route('detalleTiendas', ['id' => $tiendas->id_tiendas]) }}"><button type="button" class="btn btn-primary btn-sm"><span class="material-symbols-outlined">search</span></button></a></td>
                    <td><a href="{{ route('formETiendas', ['id' => $tiendas->id_tiendas]) }}"><button type="button" class="btn btn-warning btn-sm"><span class="material-symbols-outlined">edit</span></button></a></td>
                    <td><a href="{{ route('borrarTiendas', ['id' => $tiendas->id_tiendas]) }}"><button type="button" class="btn btn-danger btn-sm"><span class="material-symbols-outlined">delete</span></button></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection