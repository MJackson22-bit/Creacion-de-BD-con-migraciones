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
    <div class="container" style="margin-top:10px;">
        <h1 align="center"><strong>Administración de la Base de Datos de la Universidad</strong></h1>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-sm">
            
            <div class="card-header" id="headingOne" align="center">
                <h5 class="mb-0">
                    <a class="btn btn-primary" href="/Aula/create">
                        Administración de Aulas
                      </a>
                </h5>
              </div>
            
          </div>
          <div class="col-sm">
            <div class="card-header" id="headingTwo" align="center">
                <h5 class="mb-0">
                  <a href="/Clase/create" class="btn btn-primary">
                    Administración de Clases
                  </a>
                </h5>
              </div>
          </div>
          <div class="col-sm">
            <div class="card-header" id="headingThree" align="center">
                <h5 class="mb-0">
                  <a class="btn btn-primary " href="/Profesor/create">
                    Administración de Profesores
                  </a>
                </h5>
              </div>
          </div>
        </div>
      </div>
    
      <div class="container">
        @yield('contenido')
      </div>
      
    <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>
</html>