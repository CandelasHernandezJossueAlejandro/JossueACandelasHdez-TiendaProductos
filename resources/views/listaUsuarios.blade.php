 @extends('layouts.header')
@section('content')
  <br>
    <div class="container">
        <center><h1>Lista de Usuarios</h1></center>
        <hr>
        <div class="col-md-12">
            <a href="{{ route('formAUsuarios') }}">
                <button type="submit" class="btn btn-success"><span class="material-symbols-outlined">add</span></button>
            </a>
        </div>
        <hr>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <td>ID</td>
                <td>Foto (nombre)</td>
                <td>Foto</td>
                <td>Nombre</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Fecha de Nacimiento</td>
                <td>Email</td>
                <td>Pass</td>
                <td>activo</td>
                <td colspan="3">Acción</td>
            </tr>
            </thead>
            @foreach($usuarios1 as $usuario)
            <tr>
                <td>{{ $usuario -> id_usuario }}</td>
                <td>{{ $usuario -> foto }}</td>
                <td><img src="{{ asset ('img/'.$usuario -> foto) }}" style="width: 50px; border-radius: 15px;"></td>
                <td>{{ $usuario -> nombre }}</td>
                <td>{{ $usuario -> app }}</td>
                <td>{{ $usuario -> ap }}</td>
                <td>{{ $usuario -> fn }}</td>
                <td>{{ $usuario -> email }}</td>
                <td>{{ $usuario -> pass }}</td>
                <td>
                @if($usuario->activo == 1)
                    <b style="color: #0f0">Activo</b>
                @else
                    <b style="color: #F00">Inactivo</b>
                @endif
                </td>
                <td><a href="{{ route('detalleUsuario',['id' => $usuario->id_usuario]) }}"><button type="button" class="btn btn-primary btn-sm"><span class="material-symbols-outlined">search</span></button></a></td>
                <td><a href="{{ route('editarUsuarios',['id' => $usuario->id_usuario ]) }}"><button type="button" class="btn btn-primary btn-sm"><span class="material-symbols-outlined">edit</span></button></a></td>
                <td><a href="{{ route('borrarUsuarios',['id' => $usuario->id_usuario ]) }}"><button type="button" class="btn btn-danger btn-sm"><span class="material-symbols-outlined">delete</span></button></a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection