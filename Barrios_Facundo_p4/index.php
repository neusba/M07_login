<?php

    require 'db_connection.php';

    echo "post conexion";
    // variables 
    $name;
    $surname;
    $email;
    $password;
    $rol = "alumnat";
    $active = 0;

    // datos a insertar
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if(isset($_POST['surname'])) {
        $surname = $_POST['surname'];
    }
    if(isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if(isset($_POST['rol'])) {
        $rol = $_POST['rol'];
    }
    if(isset($_POST['active'])) {
        $active = $_POST['active'];
    }


    // cosas de la BBDD
    $query = "INSERT into user (rol, name, surname, password, email, active) 
                VALUES ('$rol', '$name', '$surname', '$password', '$email', $active)";


    $db->query($query);

    header('Location: '. 'views/index.html');

?>