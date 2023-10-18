<?php

    //conexion
    $db_host = "127.0.0.1";
    $db_name = "Users";
    $db_user = "root";
    $db_password = "Gilgalad09";

    echo "pre try";
    try {
        echo "dentro del try";
        $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    } catch (SQLException e){
        echo "Error de conexión con BBDD" . $e->getMessage();
    }
    echo "post trycatch";
?>