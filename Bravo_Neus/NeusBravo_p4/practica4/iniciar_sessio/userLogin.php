<?php

    include ("../db_connection.php");

    // Recogemos los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Creamos una consulta para buscar un usuario con los datos introducidos
    $sqlLogin = "SELECT * FROM `user` WHERE email = '$email' and password = '$password'";
    
    // Hacemos la query a la BBDD con la consulta previamente creada
    $respuestaLogin = $conexion->query($sqlLogin);


    if($respuestaLogin) {   // Mostrar resultado en archivo php aparte
        // ALUMNO
            // nom
            // cognom
            // email
        // PROFE
            // nom
            // cognom
            // todos los usuarios de la bbddd
        echo "Usuario encontrado";
    } else {
        echo "Usuario no encontrado";
    }


