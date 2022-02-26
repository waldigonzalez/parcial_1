<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Proyecto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Clases de PW
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</head>
<body>
    <div class="container">
      <br>
    <form method="post" action="">
        <div class="row justify-content-center">
            

                <div class="col-6 p-5 bg-white shadow-lg rounded">
                  <h2>Nuevo Cliente</h2>
                  <hr>
                    <div class="form-group">
                        <label for="nombre">Codigo</label>
                        <input id="codigo" class="form-control" type="text" name="codigo">
                    </div>
                    <div class="form-group">
                        <label for="costo">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="precio">Apellido</label>
                        <input id="apellido" class="form-control" type="text" name="apellido">
                    </div>
                    <div class="form-group">
                        <label for="stock">Dui</label>
                        <input id="dui" class="form-control" type="text" name="dui">
                    </div>
                    <div class="form-group">
                        <label for="stock">Direccion</label>
                        <input id="direccion" class="form-control" type="text" name="direccion">
                    </div>
                    <div class="form-group">
                        <label for="stock">Telefono</label>
                        <input id="telefono" class="form-control" type="text" name="telefono">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="text" name="email">
                        <br>
                    <button class="btn btn-primary" id="enviar"type="button">Enviar</button>
                    </div>
                    
        
                </div>

            </form>
    
        </div>
        <div id="Msg"></div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="ajax/funcion.js"> </script>
</body>
</html>
