<?php
    include ("../db_connection.php");
    // Recogemos los datos del formulario
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    // Creamos una consulta para buscar un usuario con los datos introducidos
    $sqlLogin = "SELECT * FROM `user` WHERE name = '$nombre' and password = '$password'";
    
    // Hacemos la query a la BBDD con la consulta previamente creada
    $respuestaLogin = $conexion->query($sqlLogin);
    $respuestaFormat = $respuestaLogin->fetch_assoc();
?>


