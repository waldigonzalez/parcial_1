<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Proyecto</title>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Proyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Clases de programacion web
					</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="aritmetico.php">Operadores aritmeticos</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
						Search
					</button>
                </form>
            </div>
        </div>
    </nav> -->
    <?php require_once "menu.php"?>
</head>

<body>
    <div class="container">
        <br />
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <h3>NUEVO CLIENTE </h3>
                <hr />
                <form method="post" action="recibe_post.php">
                    <div class="form-group">
                        <label for="nombre">CODIGO:</label>
                        <input id="nombre" class="form-control" type="text" name="codigo" />
                    </div>
                    <div class="form-group">
                        <label for="costo">NOMBRE</label>
                        <input id="usurio" class="form-control" type="text" name="nombre" />
                    </div>
                    <div class="form-group">
                        <label for="password">APELLIDO</label>
                        <input id="password" class="form-control" type="tex" name="apellido" />
                    </div>
                    <div class="form-group">
                        <label for="password">Dui</label>
                        <input id="password" class="form-control" type="tex" name="dui" />
                    </div>
                    <div class="form-group">
                        <label for="password2">DIRECCION</label>
                        <input id="password2" class="form-control" type="tex" name="direccion" />
                    </div>
                    <div class="form-group">
                        <label for="password2">Telefono</label>
                        <input id="password2" class="form-control" type="tex" name="telefono" />
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input id="email" class="form-control" type="tex" name="email" />
                    </div>
                    <br />
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>