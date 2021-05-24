<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Hello, world!</title>
  </head>
  <body>
    <Header></Header>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" class="img-fluid logo" class="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{route('registrar_consola')}}">Registrar consola</a>
              <a class="nav-link" href="{{route('registrar_juego')}}">Registrar Juego</a>
              <a class="nav-link" href="{{route('ver_consolas')}}">Ver Consolas</a>
              <a class="nav-link" href="{{route('ver_juegos')}}">Ver Juegos</a>
            </div>
          </div>
        </div>
      </nav>

    <main class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 col-md-8 col-lg-5 mx-auto">
                <div class="card">
                    <div class="card-header bg-warning ">
                        <span>Agregar consola</span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre-txt" class="form-label">Nombre</label>
                            <input type="text" id="nombre-txt" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="marca-select" class="form-label">Marca</label>
                            <select  id="marca-select" class="form-select">
                                <option value="Microsoft">Microsoft</option>
                                <option value="Sony">Sony</option>
                                <option value="Nintendo">Nintendo</option>
                                <option value="Sega">Sega</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="anio-txt">Año de lanzamiento</label>
                            <input type="number" class="form-control" id="anio-txt">
                        </div>
                    </div>
                    <div class="card-footer d-grid gap-1">
                        <button type="button" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>








<!--
    <main class="container-fluid">
        <div class="row">
            <div class="col-4 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <span>Agregar Consola</span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre-txt" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre-txt">
                        </div>
                        <div class="mb-3">
                            <label for="marca-select" class="form-label">Marca</label>
                            <select class="form-select" id="marca-select">
                                <option value="1">Microsoft</option>
                                <option value="2">Nose</option>
                                <option value="3">Nose2</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="lanzamiento-number"></label>
                            <input type="number">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


  </body>
</html>