<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 1,
  'wght' 700,
  'GRAD' 200,
  'opsz' 48
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset ('img/utvt.jpg') }}" width="30" height="30" style="border-radius: 15px;">
            Cuervo - Tienda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('listaTiendas') }}">Tiendas</a>
        </li>
        <li>
          <a class="nav-link" href="{{ route('listaProductos') }}">Productos</a>
        </li>
        <li>
          <a class="nav-link" href="{{ route('listaUsuarios') }}">Usuarios</a>
        </li>
        <li>
          <a class="nav-link" href="{{ route('listaTipos') }}">Tipos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>