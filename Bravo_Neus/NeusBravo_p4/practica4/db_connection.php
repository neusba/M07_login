<?php
    // Datos para conectar la BBDD
    $db_host = "localhost";
    $db_nombre = "Users";
    $db_usuario = "root";
    $db_password = "";

    // Conectamos la base de datos

    // TODO: TRY CATCH {}
    // ###################################################################
    
    $conexion = new mysqli($db_host, $db_usuario, $db_password, $db_nombre);
    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL.";
        exit;
    } else {
        echo "Conexión exitosa a MYSQL";
    }
?>