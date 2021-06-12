<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne" align="center">
            <h5 class="mb-0">
              <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Administración de Aulas
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <div class="container" style="border: 1px solid; border-color: green; padding: 10px; border-radius: 70px 20px;">
                    <strong><h1 align="center">Aulas</h1></strong>
                    <form action="{{ url('/MK/insert') }}" method="post" class="col-md-6" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control col-md-6" name="mk-especialidad" placeholder="Ingrese la especialidad"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mk-nombre" placeholder="Ingrese el nombre completo" minlength="3" maxlength="200"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control col-md-6" name="mk-clan" placeholder="Ingrese el clan a que pertenece"
                                maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control col-md-3" name="mk-nivel" placeholder="Nivel" min="1" max="3" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control col-md-3" name="mk-pts_vida" placeholder="Puntos de vida" min="500"  required>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="mk-foto" required>
                        </div>
                        <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
                    </form>
                    <hr/>
                    <hr/>
                </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo" align="center">
            <h5 class="mb-0">
              <button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Administración de Clases
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <div class="container" style="border: 1px solid; border-color: green; padding: 10px; border-radius: 70px 20px;">
                    <h1 align="center">Clases</h1>
                    <form action="{{ url('/MK/insert') }}" method="post" class="col-md-6" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control col-md-6" name="mk-especialidad" placeholder="Ingrese la especialidad"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mk-nombre" placeholder="Ingrese el nombre completo" minlength="3" maxlength="200"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control col-md-6" name="mk-clan" placeholder="Ingrese el clan a que pertenece"
                                maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control col-md-3" name="mk-nivel" placeholder="Nivel" min="1" max="3" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control col-md-3" name="mk-pts_vida" placeholder="Puntos de vida" min="500"  required>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="mk-foto" required>
                        </div>
                        <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
                    </form>
                    <hr/>
                    <hr/>
                </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree" align="center">
            <h5 class="mb-0">
              <button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Administración de Profesores
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <div class="container" style="border: 1px solid; border-color: green; padding: 10px; border-radius: 70px 20px;">
                    <h1 align="center">Profesores</h1>
                    <form action="{{ url('/MK/insert') }}" method="post" class="col-md-6" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control col-md-6" name="mk-especialidad" placeholder="Ingrese la especialidad"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mk-nombre" placeholder="Ingrese el nombre completo" minlength="3" maxlength="200"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control col-md-6" name="mk-clan" placeholder="Ingrese el clan a que pertenece"
                                maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control col-md-3" name="mk-nivel" placeholder="Nivel" min="1" max="3" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control col-md-3" name="mk-pts_vida" placeholder="Puntos de vida" min="500"  required>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="mk-foto" required>
                        </div>
                        <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
                    </form>
                    <hr/>
                    <hr/>
                </div>
            </div>
          </div>
        </div>
      </div>
    @yield('contenido')
    <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>
</html>