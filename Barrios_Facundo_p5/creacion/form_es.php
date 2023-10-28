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
        include '../views/esp/form.html';
        echo "Error al añadir. ";
    } else {
        include '../views/esp/form.html';
        echo "Usuario añadido correctamente. ";
    }

?>