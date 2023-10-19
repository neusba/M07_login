<?php
    include("dbConf.php");  // Constantes de conexión

    // Conectamos la base de datos con un try catch
    try {
        $conexion = new mysqli($db_host, $db_usuario, $db_password, $db_nombre);
    } catch (Exception) {
        echo "Error: No se pudo conectar a MySQL. ";
        exit;
    }
?>