@extends('layouts.header')
@section('content')

<div class="container">
    <br>
    <h3>Modificar Usuario</h3>
    <hr>
    <form action="{{ route('salvarUsuarios', ['id' => $usuarios->id_usuario]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field('PATCH') }}
        {{ method_field('PUT') }}
        <div class="row g-3">

            <div class="col-auto">
                <label for="inputEmail4" class="form-label">Matricula</label>
                <input type="text" class="form-control" name="clave" placeholder="{{ $usuarios->clave }}" value="{{ $usuarios->clave }}">
            </div>
            <div class="col-auto">
                <label for="inputEmail4" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="{{ $usuarios->nombre }}" value="{{ $usuarios->nombre }}">
            </div>
            <div class="col-auto">
                <label for="inputPassword4" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="app" placeholder="{{ $usuarios->app }}" value="{{ $usuarios->app }}">
            </div>
            <div class="col-auto">
                <label for="inputPassword4" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="ap" placeholder="{{ $usuarios->ap }}" value="{{ $usuarios->ap }}">
            </div>
            <div class="col-auto">
                <label for="inputAddress" class="form-label">Correo:</label>
                <input type="text" class="form-control" name="email" placeholder="{{ $usuarios->email }}" value="{{ $usuarios->email }}">
            </div>
            <div class="col-auto">
                <label for="inputAddress2" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass" placeholder="Cambiar contraseña solo si aplica" value="{{ $usuarios->pass }}">
            </div>
            <div class="col-auto">
                <br>
                <label for="inputCity" class="form-label">Fecha de Nacimiento:</label>
                <input type="date" name="fn" value="{{ $usuarios->fn }}" min="1950-01-01" max="2022-12-31">
            </div>
            <div class="col-auto">
                <label for="inputState" class="form-label">Genero:</label>
                <select name="gen" class="form-select">
                    <option value="F" {{ $usuarios->gen == 'F'?'selected':''; }}>Femenino</option>
                    <option value="M" {{ $usuarios->gen == 'M'?'selected':''; }}>Masculino</option>
                    <option value="O" {{ $usuarios->gen == 'O'?'selected':''; }}>Otro...</option>
                </select>
            </div>
            <div class="col-auto">
                <label for="inputState" class="form-label">Tipo de usuario:</label>
                <select name="id_tipo" class="form-select" aria-label="Default select example">
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id_tipos }}" {{ $tipo->id_tipos == $usuarios->id_tipo ?'selected':''; }}>{{ $tipo->id_tipos .' '. $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto">
                <label for="inputEmail4" class="form-label">Foto</label>
                <input type="text" class="form-control" name="foto" placeholder="{{ $usuarios->foto }}" value="{{ $usuarios->foto }}">
            </div>
            <div class="col-3">
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="activo" value="{{ $usuarios->activo }}" {{ $usuarios->activo > 0?'checked':''; }}>
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
                        <button type="submit" value="Salvar Registro" class="btn btn-success">Modificar</button>
                    </div>
                </div>
            </center>
        </div>
    </form>
</div>

@endsection