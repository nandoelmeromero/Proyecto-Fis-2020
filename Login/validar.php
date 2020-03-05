<?php

    $usuario = $_POST['usuario']; //Recibio del campo "usuario"
    $contrasenia = $_POST['contrasenia']; //Recibio del campo "contrasenia"

    //Conectar a la DB por procedimientos
    $conexion = mysqli_connect("localhost","root","","lista_usuarios");
    $consulta = "SELECT * FROM usuarios WHERE correo = '$usuario' AND password = '$contrasenia' ";

    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas > 0){
        header(
            "location:catalogoUser.html"
        );
    }else{
        echo "Error en la autenticación";
    }
    
    mysqli_free_result($resultado);

    mysqli_close($conexion);

?>