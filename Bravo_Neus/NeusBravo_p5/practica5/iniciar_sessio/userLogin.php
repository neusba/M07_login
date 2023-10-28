<?php

    include ("../db_connection.php");

    // Recogemos los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Creamos una consulta para buscar un usuario con los datos introducidos
    $sqlLogin = "SELECT * FROM `user` WHERE email = '$email' and password = '$password'";
    
    // Hacemos la query a la BBDD con la consulta previamente creada
    $respuestaLogin = $conexion->query($sqlLogin);
    $respuestaFormat = $respuestaLogin->fetch_assoc();
?>


