<?php
    
    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contrasenia = $_POST["contrasenia"];

    $consulta = "INSERT INTO usuarios(nombre,apellido,correo,password) VALUES('$nombre','$apellido','$correo','$contrasenia')";

    $resultado = mysqli_query($conexion,$consulta);

    if($resultado){
        header(
            "location:registroExitoso.html"
        );
    }
    
    mysqli_close($conexion);

?>