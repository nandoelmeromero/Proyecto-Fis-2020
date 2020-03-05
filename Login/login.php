<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
                    <a class="navbar-brand" href="#"><img class="logo" src="https://www.fondodeculturaeconomica.com/img/fce/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link textFont" href="..\index.html">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link textFont" href="..\./Catalogo/catalogo.html">Catálogo<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link textFont" href="registro.html">Comprar una membresia<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link textFont" href="..\./Registro/registro.php">Registrate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link textFont login" href="login.php">Log in</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" placeholder="Ingresa una palabra" type="search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                        <a href="login.php"><button type="button" class="btn btn-info">Log in</button></a> 
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>

        <div class="container-fluid">
            <div class="row">

                <form class="text-center border border-light p-5 form" action="validar.php" method="post">

                    <p class="h4 mb-4">Inicia Sesión</p>

                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4 formInput" placeholder="E-mail" name="usuario" required>

                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4 formInput" placeholder="Password" name="contrasenia" required>

                    <div class="d-flex justify-content-around">
                        <div>
                            <a href="" class="contrasenaOlvidada">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>

                    <button class="btn btn-info btn-block my-4 btn-sesion" type="submit">Ingresar</button>

                    <p>¿No tienes una cuenta?
                        <a href="..\./Registro/registro.html">Registrate</a>
                    </p>

                </form>
            
            </div>
        </div>
        
    </main>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>