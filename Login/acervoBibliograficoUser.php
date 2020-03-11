<?php 
    session_start();
    error_reporting(0);
    $varSesion = $_SESSION['usuario'];
    if($varSesion == NULL || $varSesion = '' ){
        echo "No hay autorización";
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOFCE</title>
    <link rel="stylesheet" href="stylesAcervoBibliograficoUser.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                                <a class="nav-link textFont" href="..\./Membresia/MembresiaOferta.html">Comprar una membresia<span class="sr-only">(current)</span></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link textFont" href="..\./Registro/registro.php">Registrate</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link textFont login" href="..\./Login/login.php">Log in</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2 inputs-Nav" placeholder="Ingresa una palabra" type="search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0 inputs-Nav" type="submit">Buscar</button>
                        </form>
                        <!-- <button type="button" class="btn btn-info inputs-Nav">Log in</button> -->
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido <?php echo $_SESSION['usuario'] ?></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="cerrarSesion.php">Cerrar sesión</a>
                            </div>
                        </li>                    

                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>

        <div class="container-fluid">

            <div class="row">

                <div class="consultaLibro" id="guerraCristera" name="guerraCristera" > 
                    
                    <div class="imagenLibro col-4">
                        <img id="guerraCristera"  src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM11078.jpg" alt="">
                    </div>
    
                    <div class="infoLibro col-6">
                        <h2 class="espaciado">La guerra cristera. Aspectos del conflicto religioso de 1926 a 1929</h2>
                        <h5 class="espaciado">Autor: Olivera Sedano, Alicia</h5>
                        <h6 class="espaciado">ISBN: 9786071666017 | Clave FCE: 003799R</h6>
                        <h6 class="espaciado">$140.00</h6>
                        <p class="espaciado">La guerra cristera. Aspectos del conflicto religioso de 1926 a 1929, ofrece un panorama 
                            completo de los factores políticos, sociales y económicos que desencadenaron un conflicto armado entre la Iglesia
                            y el Estado mexicanos. Con una gran labor documental, una redacción sencilla y recursos pictóricos, 
                            Alicia Olivera Sedano analiza uno de los enfrentamientos más icónicos y menos estudiados de la historia de 
                            nuestro país.
                        </p>
                        
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                        
    
                    </div>

                </div>


                <div class="consultaLibro" id="laMuerteTienePermiso" name="laMuerteTienePermiso">
                    
                    <div class="imagenLibro col-4">
                        <img id="laMuerteTienePermiso" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM10949.jpg" alt="">
	                </div>

                    <div class="infoLibro col-6">
                        <h2 class="espaciado">La muerte tiene permiso</h2>
                        <h5 class="espaciado">Valadés, Edmundo</h5>
                        <h6 class="espaciado">ISBN: 9786071662019 | Clave FCE: 050306R</h6>
                        <h6 class="espaciado">$9.00</h6>
                        <p class="espaciado">Una reunión agraria con el presidente se convierte en el momento ideal 
                            para que un grupo de ejidatarios de San Juan de las Manzanas exprese los malestares que
                            el presidente municipal los ha hecho padecer. Retrato de la impunidad posrevolucionaria 
                            gestada por las propias autoridades y muestra de un auténtico estilo, en "La muerte tiene 
                            permiso", luego de enlistar uno a uno los sinsabores el auditorio determinará el destino 
                            del infame mandatario.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>
                        </div>
                    
                    </div>
                   
                </div>

                
                <div class="consultaLibro" id="spaceInvaders" name="spaceInvaders">
                    
                    <div class="imagenLibro col-4">
                        <img id="spaceInvaders" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM11088.jpg" alt="">
	                </div>

                    <div class="infoLibro col-6">
                        <h2 class="espaciado">Space Invaders</h2>
                        <h5 class="espaciado">Fernández Silanes, Nona</h5>
                        <h6 class="espaciado">ISBN: 9786071667021 | Clave FCE: 015771R </h6>
                        <h6 class="espaciado">$40.00</h6>
                        <p class="espaciado">Entre sueños y recuerdos, las voces de un grupo de niños reconstruyen 
                            los años de oscuridad y lo atroz de la dictadura chilena, reviven, ya como adolescentes, 
                            las normas que en aquél momento regían sus vidas, la desaparición inexplicable de algún 
                            hermano mayor y se centran en la repentina partida a Alemania de una compañera del liceo. 
                            Nona Fernández presenta a estos compañeros de primaria como testigos conscientes, 
                            protagonistas involuntarios y participantes políticos que se comunican formando una 
                            memoria donde "no hay palabras, ni nombres, sólo un cuerpo de muchas patas y manos y 
                            cabezas".
                        </p>
                        
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    
                    </div>
                   
                </div>

                <div class="consultaLibro" id="HamponesPelados" name="HamponesPelados">
                    
                    <div class="imagenLibro col-4">
                    	<img id="HamponesPelados" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM11079.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Hampones, Pelados y pecatrices. Sujetos peligrosos de la Ciudad de México (1940-1960)</h2>
	                    <h5 class="espaciado">Sosenski, Susana y Gabriela Pulido Llano(coords.)</h5>
	                    <h6 class="espaciado">ISBN: 9786071665546 | Clave FCE: 003801R </h6>
	                    <h6 class="espaciado">$265.00</h6>
	                    <p class="espaciado">Colección de artículos sobre los estereotipos alrededor de los sujetos 
                            considerados criminales o "peligrosos" en el imaginario colectivo de la Ciudad de México 
                            a mediados del siglo XX. Recupera fuentes como medio impresos, películas, programas 
                            televisivos, estampas, caricaturas, historietas, cartones y un largo etcétera.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>

                    </div>
                   
                </div>

                <div class="consultaLibro" id="LinchamientoGraficodeFrancisco" name="LinchamientoGraficodeFrancisco">
                    
                    <div class="imagenLibro col-4">
                    	<img id="LinchamientoGraficodeFrancisco" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM11060.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">El Linchamiento gráfico de Francisco I. Madero</h2>
	                    <h5 class="espaciado">Barajas Durán, Rafael "El Fisgón"</h5>
	                    <h6 class="espaciado">ISBN: 9786071665874 | Clave FCE: 017667R </h6>
	                    <h6 class="espaciado">$385.00</h6>
	                    <p class="espaciado">Esta obra tiene como objetivo reivindicar la figura de Madero ante la 
                            terrible difamación de su imagen en el México revolucionario. Barajas nos ofrece un 
                            recuento sobre el proceso de deformación que sufrieron los caudillos revolucionarios en 
                            la prensa como método contrarevolucionario por parte de las élites porfiristas. La obra 
                            se divide en nueve capítulos que abordan diversos temas y personajes que contextualizan a 
                            la figura de Madero y explican el cómo y por qué fue altamente criticado en las caricaturas 
                            de la época. La obra habla de la responsabilidad de la labor periodística en tanto creadora de 
                            contenido. Barajas invita a la reflexión sobre el enorme poder del periodismo al momento de 
                            construir la opinión pública.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>

                    </div>
                   
                </div>


                <div class="consultaLibro" id="AméricaLatina" name="AméricaLatina">
                	
                	<div class="imagenLibro col-4">
                    	<img id="AméricaLatina" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM11072.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">América Latina y la primera Guerra Mundial. Una historia global</h2>
	                    <h5 class="espaciado">Rinke, Stefan</h5>
	                    <h6 class="espaciado">ISBN: 9786071665539 | Clave FCE: 003797R</h6>
	                    <h6 class="espaciado">$290.00</h6>
	                    <p class="espaciado">La obra estudia las relaciones, las políticas y las discusiones que 
                            la primera Guerra Mundial suscitó en América Latina, desde el estallido de la conflagración 
                            hasta las consecuencias del armisticio. La obra consta de siete capítulos: I. Latinoamérica en 
                            el contexto global previo a 1914; II. Neutralidad bajo presión, 1914-1917; III. El divorcio de 
                            1917; IV. Vías inciertas hacia una "nueva era", 1918-1919; V. El fin de un mundo; VI. Nación y 
                            transnación; y VII. El legado global de la Guerra Mundial.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>


                <div class="consultaLibro" id="LosYanquisEnMexico" name="LosYanquisEnMexico">
                	
                	<div class="imagenLibro col-4">
                    	<img id="LosYanquisEnMexico" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM10942.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Los yanquis en México</h2>
	                    <h5 class="espaciado">Prieto, Guillermo</h5>
	                    <h6 class="espaciado">ISBN: 9786071661982 | Clave FCE: 050300R</h6>
	                    <h6 class="espaciado">$20.00</h6>
	                    <p class="espaciado">Este cuaderno reúne dos de los artículos que Guillermo Prieto escribió 
                            para los Apuntes sobre la guerra con los Estados Unidos y con una crónica acerca de cómo 
                            se portaron heroicamente los "pelados" de la ciudad durante la invasión estadunidense en 
                            1847, la cual culminó, en su aspecto militar, con la toma de la Ciudad de México por las 
                            tropas que comandaba el general Winfield Scott.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>

                <div class="consultaLibro" id="RikkiTikkiTavi" name="RikkiTikkiTavi">
                	
                	<div class="imagenLibro col-4">
                    	<img id="RikkiTikkiTavi" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM10943.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Rikki-Tikki-Tavi</h2>
	                    <h5 class="espaciado">Kipling, Rudyard</h5>
	                    <h6 class="espaciado">ISBN: 9786071662002 | Clave FCE: 050302R </h6>
	                    <h6 class="espaciado">$11.00</h6>
	                    <p class="espaciado">Parte de El libro de las tierras vírgenes, "Rikki-Tikki-Tavi", 
                            narra la épica batalla entre una pequeña mangosta y dos terribles cobras negras 
                            que se apoderan del jardín familiar y aterrorizan a toda creatura que se 
                            cruza en su camino.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div> 

                <div class="consultaLibro" id="LaDemocraciaEnAmerica" name="LaDemocraciaEnAmerica">
                	
                	<div class="imagenLibro col-4">
                    	<img id="LaDemocraciaEnAmerica" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM1495.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">La democracia en América</h2>
	                    <h5 class="espaciado">Tocqueville, Alexix de</h5>
	                    <h6 class="espaciado">ISBN: 9786071665898  | Clave FCE: 005032R </h6>
	                    <h6 class="espaciado">$100.00</h6>
	                    <p class="espaciado">Ensayo que ha influido en el pensamiento pensamiento constitucional y 
                            político, principalmente en el de América. Dos son los temas de gran interés de esta obra: 
                            las instituciones norteamericanas como expresión de las costumbres y, en general, 
                            el estilo de vida de los Estados Unidos y los principios en que se basa un Estado 
                            democrático.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>

                <div class="consultaLibro" id="ManualDeDerechoAdministrativo" name="ManualDeDerechoAdministrativo">
                	
                	<div class="imagenLibro col-4">
                    	<img id="ManualDeDerechoAdministrativo" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM11086.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Manual de derecho administrativo</h2>
	                    <h5 class="espaciado">Márquez Gómez, Daniel (coord.)</h5>
	                    <h6 class="espaciado">ISBN: 9786071666178  | Clave FCE: 005514R</h6>
	                    <h6 class="espaciado">$200.00</h6>
	                    <p class="espaciado">Manual didáctico que expone las distintas ramas del derecho 
                            administrativo mexicano en donde se presentan perspectivas teóricas y prácticas, 
                            complementadas con bibliografía y actividades para reforzar el aprendizaje. A lo largo de 
                            cada capítulo, los 11 autores desarrollan de forma individual temáticas relacionadas 
                            con el derecho administrativo, tales como: la teoría del Estado, el poder y la 
                            administración pública, las teorías y tendencias del derecho administrativo, el acto 
                            jurídico y el acto administrativo, el régimen de responsabilidad de servidores públicos, 
                            el patrimonio y los bienes del Estado, la justicia administrativa y la tutela de los 
                            derechos humanos.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>

                <div class="consultaLibro" id="IdeaDeLaNaturaleza" name="IdeaDeLaNaturaleza">
                	
                	<div class="imagenLibro col-4">
                    	<img id="IdeaDeLaNaturaleza" src="https://www.elfondoenlinea.com/portadas/FEP/2000/FM2872.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Idea de la naturaleza</h2>
	                    <h5 class="espaciado">collingwood, Robin George</h5>
	                    <h6 class="espaciado">ISBN: 9786071662118  | Clave FCE: 004012R</h6>
	                    <h6 class="espaciado">$140.00</h6>
	                    <p class="espaciado">Collingwood realiza un estudio en el que distingue tres grandes épocas 
                            del pensamiento cosmológico: el griego, el renacentista y el moderno, aplicando su 
                            procedencia inglesa al hecho que su historicidad represente sobre todo un intento de 
                            resolver la dualidad del conocimiento, el natural y el histórico.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>

                <div class="consultaLibro" id="ManualDeDerechoIndigena" name="ManualDeDerechoIndigena">
                	
                	<div class="imagenLibro col-4">
                    	<img id="ManualDeDerechoIndigena" src="https://www.elfondoenlinea.com/portadas/FEP/1000/FM11085.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Manual de derecho indígena</h2>
	                    <h5 class="espaciado">González Galván, jorge Alberto(coord.)</h5>
	                    <h6 class="espaciado">ISBN: 9786071666185  | Clave FCE: 005513R</h6>
	                    <h6 class="espaciado">$200.00</h6>
	                    <p class="espaciado">Manual didáctico que expone distintos estudios de caso sobre el derecho 
                            indígena en México. Contiene un capítulo que le otorga una dimensión histórica a la obra 
                            al analizar la legislación indígena virreinal y continúa su desarrollo con seis estudios 
                            de caso sobre la aplicación del derecho indígena en distintas constituciones estatales 
                            (Jalisco, Querétaro, Quintana Roo, Sinaloa, Yucatán y Ciudad de México), así como las 
                            resoluciones de la Suprema Corte de Justicia y los tribunales federales acerca del tema. 
                            La obra está acompañada de actividades complementarias y bibliografía básica para reforzar 
                            el aprendizaje.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>


                <div class="consultaLibro" id="Acero" name="Acero"> 
                	
                	<div class="imagenLibro col-4">
                    	<img id="Acero" src="https://www.elfondoenlinea.com/portadas/FEP/3000/FM3925.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Acero</h2>
	                    <h5 class="espaciado">Martínez Gómez, Lorenzo</h5>
	                    <h6 class="espaciado">ISBN: 9789681665098  | Clave FCE: 046080R </h6>
	                    <h6 class="espaciado">$62.00</h6>
	                    <p class="espaciado">Con la intención de acercar la cultura del acero al lector común, en este 
                            libro el doctor Lorenzo Martínez trata con sencillez algunos aspectos de la producción y 
                            la historia del valioso metal. Resultante de la aleación del hierro y el carbono, el acero 
                            ha revolucionado en los últimos dos siglos el avance tecnológico.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>

                <div class="consultaLibro" id="CaceriaDeCargas" name="CaceriaDeCargas"> 
                	
                	<div class="imagenLibro col-4">
                    	<img id="CaceriaDeCargas" src="https://www.elfondoenlinea.com/portadas/FEP/2000/FM2102.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Cacería de cargas</h2>
	                    <h5 class="espaciado">Piña Garza, Eduardo</h5>
	                    <h6 class="espaciado">ISBN: 9789681669409  | Clave FCE: 046044R</h6>
	                    <h6 class="espaciado">$30.00</h6>
	                    <p class="espaciado">Uno de los grandes retos actuales de la humanidad es atrapar la energía 
                            nuclear y controlarla mediante la fusión, la cual habrá de satisfacer las necesidades 
                            energéticas de nuestro planeta, mismas que se incrementan en proporción directa con el 
                            crecimiento de la población.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>


                <div class="consultaLibro" id="CaloryMovimiento" name="CaloryMovimiento">
                	
                	<div class="imagenLibro col-4">
                    	<img id="CaloryMovimiento" src="https://www.elfondoenlinea.com/portadas/FEP/3000/FM3945.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Calor y movimiento</h2>
	                    <h5 class="espaciado">Rius de Riepen, Magdalena y Carlos Mauricio Castro-Acuña</h5>
	                    <h6 class="espaciado">ISBN: 9789681669119  | Clave FCE: 046085R</h6>
	                    <h6 class="espaciado">$66.00</h6>
	                    <p class="espaciado">¿Cuál es la naturaleza del fuego, del calor, de la energía?, para ésta 
                            y otras preguntas, el científico busca respuestas. Sin embargo, los científicos también 
                            se preocupan por transmitir sus descubrimientos. Este libro es producto del propósito de 
                            extender la cultura científica a la sociedad, en este caso en cuanto al dominio de la 
                            energía que ha logrado la humanidad: desde la conquista del fuego hasta el manejo de la 
                            energía nuclear.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>

                
                <div class="consultaLibro" id="CaosFractales" name="CaosFractales">
                	
                	<div class="imagenLibro col-4">
                    	<img id="CaosFractales" src="https://www.elfondoenlinea.com/portadas/FEP/5000/FM5544.jpg" alt=""> 
                	</div>

	                <div class="infoLibro col-6">
	                    <h2 class="espaciado">Caos, fractales y cosas raras</h2>
	                    <h5 class="espaciado">Braun, Eliezer</h5>
	                    <h6 class="espaciado">ISBN: 9789681668433  | Clave FCE: 046150R</h6>
	                    <h6 class="espaciado">$80.00</h6>
	                    <p class="espaciado">Durante el último cuarto de siglo se ha venido generando una revolución 
                            en el mundo de las ideas científicas: el estudio de los fractales y el caos. 
                            Las aplicaciones de tales teorías son verdaderamente importantes e incluyen campos como 
                            el de la física, las matemáticas, la biología, la medicina, la economía, la lingüística y 
                            otras muchas ramas del saber humano. El propósito del presente libro es ofrecer una 
                            explicación somera, accesible a todos, de los antecedentes de dicha revolución científica.
                        </p>
                    
                        <!-- Carrito de compras y lectura online -->
                        <div class="opcionesUsuarioRegistrado" name="opcionesUsuarioRegistrado">
                            
                            <img class="icons carrito" src="https://cdn.icon-icons.com/icons2/606/PNG/64/shopping-cart_icon-icons.com_56125.png" alt=""><strong>Comprar  en linea</strong>
                            <img class="icons libro" src="https://cdn.icon-icons.com/icons2/390/PNG/64/open-book_38991.png" alt=""><strong>Leer online</strong>

                        </div>
                    
                    </div>
                   
                </div>

            </div>


        </div>

    </main>

    <footer class="page-footer" style="margin-top: 150px;">

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


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>