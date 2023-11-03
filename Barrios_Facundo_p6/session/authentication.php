<?php
    session_start();
    include_once '../dbRepository.php';

    if (empty($_POST['email']) || empty($_POST['password'])) {
        include "../views/index.html";
        echo "Login incorrecto"; 
        return;
    }

    $email= $_POST['email'];
    $password = $_POST['password'];
    $user = consulta($email, $password);
    
    if (null == $user) { 
        include "../views/index.html";
        echo "Login incorrecto"; 
        return;
    }

    $rolUser = $user['rol'];
    $_SESSION['lista'] = listaCompleta();

    $_SESSION['name'] = $user['name'];
    $_SESSION['surname'] = $user['surname'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['rol'] = $user['rol'];

    header('Location: ' . '../views/usuari.php');
?>