@extends('layouts.header')
@section('content')
    <br>
    <div class="container">
        <center>
            <h1>Lista Tipos</h1>
        </center>
        <hr>
        <div class="col-md-12">
            <a href="{{ route('altaTipos') }}">
                <button type="submit" class="btn btn-success">Agregar</button>
            </a>
        </div>
        <hr>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <td>Id Tipos</td>
                    <td>Nombre</td>
                    <td>Detalle</td>
                    <td>Activo</td>
                    <td colspan="3">Acción</td>
                </tr>
            </thead>
            @foreach($tipos1 as $tipos)
            <tr>
                <td>{{ $tipos -> id_tipos }}</td>
                <td>{{ $tipos -> nombre }}</td>
                <td>{{ $tipos -> detalle }}</td>
                <td>
                    @if($tipos -> activo == 1)
                    <b style="color: #0f0">Activo</b>
                    @else
                    <b style="color: #F00">Inactivo</b>
                    @endif
                </td>
                <td><a href="{{ route('detalleTipos', ['id' => $tipos -> id_tipos]) }}"><button type="button" class="btn btn-primary btn-sm">Consultar</button></a></td>
                <td><a href="{{ route('editarTipos', ['id' => $tipos -> id_tipos]) }}"><button type="button" class="btn btn-primary btn-sm">Editar</button></a></td>
                <td><a href="{{ route('borrarTipos', ['id' => $tipos -> id_tipos]) }}"><button type="button" class="btn btn-danger btn-sm">Eliminar</button></a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection