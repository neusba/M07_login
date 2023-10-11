<?php


    //conexion
    $db_host = "127.0.0.1";
    $db_name = "Users";
    $db_user = "root";
    $db_password = "Gilgalad09";
    $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
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
    if(isset($_POST['rol']['value'])) {
        $rol = $_POST['rol'];
    }
    if(isset($_POST['active'])) {
        $active = $_POST['active'];
    }

    // cosas de la BBDD
    $query = "INSERT into user (rol, name, surname, password, email, active) 
                VALUES ('$rol', '$name', '$surname', '$password', '$email', $active)";


    $db->query($query);

    mysqli_close($db);

?>