<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOFCE</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/v4-shims.css">
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
                        <a href="../Registro/registro.php">Registrate</a>
                    </p>

                </form>
            
            </div>
        </div>
        
    </main>

    <footer class="page-footer" style="margin-top: 50px;">

        <!-- Footer Elements -->
        <div class="container">
  
            <!-- Grid row-->
            <div class="row">
  
                <!-- Grid column -->
                <div class="col-md-12" style="text-align: center;">
                    <div class="mb-4 flex-center">
  
                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        
                        <!--Pinterest-->
                        <a class="pin-ic">
                            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->
  
            </div>
            <!-- Grid row-->
  
        </div>
        <!-- Footer Elements -->

<<<<<<< HEAD
        <div class="items-Footer">
=======
        <div class="items-Footer" style="display: flex !important; justify-content: center;" >
>>>>>>> 09448d4b4eaa1cdb996d69aeca446ad0599fb626
            <li style="list-style: none; padding: 10px;">Facturación</li>
            <li style="list-style: none; padding: 10px;">Venta en linea</li>
            <li style="list-style: none; padding: 10px;">Institucional</li>
            <li style="list-style: none; padding: 10px;">Bolsa de trabajo</li>
            <li style="list-style: none; padding: 10px;">Aviso de privacidad</li>
            <li style="list-style: none; padding: 10px;">Transparencia</li>
            <li style="list-style: none; padding: 10px;">Contacto</li>
        </div>
  
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="color:#82003c">Derechos reservados © Fondo de Cultura Económica 2020
            <br>Coordinación de Tecnología
        </div>
        <!-- Copyright -->
  
    </footer>
    <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>