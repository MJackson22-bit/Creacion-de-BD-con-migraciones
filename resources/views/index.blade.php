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
    <strong>
        <h1 align="center">Administración de la Base de Datos de la Universidad</h1>
    </strong>
    <div id="accordion">
        <div class="card" >
          <div class="card-header" id="headingOne" align="center" >
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
                            <input type="text" class="form-control col-md-6" name="a_id" placeholder="Identificador del aula"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="a_nombre" placeholder="Nombre del aula" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control col-md-3" name="a_ubicacion" placeholder="Ubicación" required>
                        </div>
                        <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
                    </form>
                    <hr/>
                    <hr/>
                    <a class="btn btn-primary" href="/Aula/list" role="button">Ver registro de las aulas</a>
                </div>
                @yield('list_aula')
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
                    <strong><h1 align="center">Clase</h1></strong>
                    <form action="{{ url('/MK/insert') }}" method="post" class="col-md-6" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control col-md-6" name="c_codigo" placeholder="Código de la clase"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="c_nombre" placeholder="Nombre de la clase" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control col-md-4" name="c_creditos" placeholder="Número de Créditos" min="1" max="4" required>
                        </div>
                        <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
                    </form>
                    <hr/>
                    <hr/>
                    <a class="btn btn-primary" href="/Clase/list" role="button">Ver registro de las clases</a>
                </div>
                @yield('list_clase')
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
                            <input type="text" class="form-control col-md-6" name="p_id" placeholder="Identificador del profesor" maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="p_nombre" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control col-md-6" name="p_apellido" placeholder="Apellido"
                                maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <label for="p_titulo">Elija el título del profesor</label>
                            <select id="p_titulo" name="p_titulo" class="custom-select" required>
                                <option selected value="LIC">Licenciado</option>
                                <option value="ING">Ingeniero</option>
                                <option value="MSC">Máster</option>
                                <option value="DOC">Doctor</option>
                              </select>
                        </div>
                        <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
                    </form>
                    <hr/>
                    <hr/>
                    <a class="btn btn-primary" href="/Profesor/list" role="button">Ver registro de Profesores</a>
                </div>
                @yield('list_profesor')
            </div>
          </div>
        </div>
      </div>
      
    <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>
</html>