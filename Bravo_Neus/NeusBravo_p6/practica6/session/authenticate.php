<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();
    include("../db_connection.php");

    if (empty($_POST['email']) || empty($_POST['password'])) {
        header('Location: ../views/login.php');
    }

    // Recogemos los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Creamos una consulta para buscar un usuario con los datos introducidos
    $sqlLogin = "SELECT * FROM `user` WHERE email = '$email' and password = '$password'";
    
    // Hacemos la query a la BBDD con la consulta previamente creada
    $respuestaLogin = $conexion->query($sqlLogin);

    if ($respuestaLogin) {
        // Recogemos los datos del usuario relacionado en la bbdd
        $user = $respuestaLogin->fetch_array(MYSQLI_ASSOC);
        // Creamos las variables de session correspondientes
        $_SESSION['name'] = $user['name'];
        $_SESSION['surname'] = $user['surname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['rol'] = $user['rol'];
        header('Location: ../views/usuari.php');
    }
?>