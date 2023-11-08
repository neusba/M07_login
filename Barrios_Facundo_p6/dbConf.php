<?php
    $db_host = "127.0.0.1";
    $db_nombre = "Users";
    $db_usuario = "root";
    $db_passwd = "Gilgalad09";

    $conn = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre );

    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
