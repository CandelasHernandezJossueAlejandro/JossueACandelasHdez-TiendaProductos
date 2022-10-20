@extends('layouts.header')
@section('content')
<div class="container">
    <br>
    <center>
        <h1>Formulario Usuarios</h1>
    </center>
    <hr>
    <h3>Agregar</h3>
    <form class="row g-3" action="{{ route('registrarUsuarios') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <table>
            <tr>
                <td colspan='2'>
                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                    {{ $error }} <br>
                    @endforeach
                    @endif
                </td>
            </tr>
        </table>

        <div class="col-md-12">
            <label for="exampleFormControlInput1" class="form-label">Matricula:</label>
            <input type="text" class="form-control" name="clave" placeholder="">
            @if($errors -> first('clave')) <i> {{ $errors -> first('clave') }} </i> @endif
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="">
            @if($errors -> first('nombre')) <i> {{ $errors -> first('nombre') }} </i> @endif
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name="app" placeholder="">
            @if($errors -> first('app')) <i> {{ $errors -> first('app') }} </i> @endif
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="ap" placeholder="">
            @if($errors -> first('ap')) <i> {{ $errors -> first('ap') }} </i> @endif
        </div>
        <div class="col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Correo:</label>
            <input type="email" class="form-control" name="email" placeholder="">
            @if($errors -> first('email')) <i> {{ $errors -> first('email') }} </i> @endif
        </div>
        <div class="col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="pass">
            @if($errors -> first('pass')) <i> {{ $errors -> first('pass') }} </i> @endif
        </div>
        <div class="col-md-3">
            <br>
            <label for="exampleFormControlInput1" class="form-label">Fecha de Nacimiento:</label>
            <input type="date" name="fn" min="1950-01-01" max="2022-12-31">
            @if($errors -> first('fn')) <br> <i> {{ $errors -> first('fn') }} </i> @endif
        </div>
        <div class="col-md-3">
            <label for="inputState" class="form-label">Genero:</label>
            <select name="gen" class="form-select">
                <option value="F" selected>Femenino</option>
                <option value="M">Masculino</option>
                <option value="O">Otro...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Tipo de usuario:</label>
            <select name="id_tipo" class="form-select" aria-label="Default select example">
                @foreach($tipos as $tipo)
                <option value="{{ $tipo->id_tipos }}">{{ $tipo->id_tipos .' '. $tipo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="activo" checked disabled>
                <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
            </div>
        </div>
        <center>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('listaUsuarios') }}">
                        <button type="button" class="btn btn-secondary">Volver</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </center>
    </form>
</div>
@endsection