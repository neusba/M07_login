<?php

    include_once '../login/userLogin.php';

    // variables 
    $name;
    $surname;
    $password;
    $email;
    $rol;
    $active;
    $result;


    // datos a insertar
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];
        $active = $_POST['active'];
    }

    if(null != $name && null != $surname && null != $password && null != $email){
        // query & redirect
        $query = "INSERT into user (rol, name, surname, password, email, active) 
        VALUES ('$rol', '$name', '$surname', '$password', '$email', $active)";

        $result = addUser($query);
    }
       
    if(!$result){
        include '../views/index.html';
        echo "Error al añadir. ";
        //echo "<a href=\"../views/index.html\">Regresar</a>";
    } else {
        include '../views/index.html';
        echo "Usuario añadido correctamente. ";
        //echo "<a href=\"../views/login.html\"> Iniciar sesión</a>";
    }

?>