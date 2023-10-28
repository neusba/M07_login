<?php

    include ("../db_connection.php");

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Recogemos los datos del formulario 
    $id = $_POST['id'];
    if (isset($_POST['rol'])) {
        $rol = $_POST['rol'];
    }
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    // Creamos la consulta
    $sqlSignin = "INSERT INTO user (id, rol, name, surname, password, email)
                VALUES ('$id', '$rol', '$name', '$surname', '$password', '$email')";

    // Hacemos la query
    $respuestaSignin = $conexion->query($sqlSignin);

    if($respuestaSignin) {
        echo "Datos registrados correctamente";
        header("Location: ../views/login.php?insercion=1");
        exit;
    } else {
        echo "No ha sido posible registrar al usuario";
    }
?>
