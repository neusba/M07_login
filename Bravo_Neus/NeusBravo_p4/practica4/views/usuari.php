<?php
    include ("../db_connection.php");
    include("../iniciar_sessio/userLogin.php");

    // Muestra los errores en pantalla
    /* ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); */

    // Comprobamos si es alumno o professor e imprimos segun sea
    $rol = $respuestaFormat["rol"];
    if ($rol == "Alumne") {
        print_r("Alumne:" . '<br>');
        print_r('<strong>Nom:</strong> ' . $respuestaFormat["name"] . '<br>');
        print_r('<strong>Cognom:</strong> ' . $respuestaFormat["surname"] . '<br>');
        print_r('<strong>Email:</strong> ' . $respuestaFormat["email"]);
    } elseif ($rol == "Professor") {
        // Mostramos los datos en caso de que sea professor
        print_r('Hola ' . $respuestaFormat["name"] . ', ets professor.' . '<br>');
        altresUsuaris($conexion);
    } else {
        // Redirigimos de nuevo al login y enviamos un mensaje de incorrecto
        header("Location: login.php?error=1");
        exit;
    }

    function altresUsuaris($conexion) {
        // Realizamos otra query para obtener los datos del resto usuarios en la BBDD
        $sqlOtrosUsuarios = "SELECT name, surname FROM `user`";
        $respuestaOtrosUsuarios = $conexion->query($sqlOtrosUsuarios);
        //$respuestaFetch = $respuestaOtrosUsuarios->fetch_assoc();

        while ($user = $respuestaOtrosUsuarios->fetch_assoc()) {
            echo "<strong>Nom i cognom:</strong> " . $user["name"] . ' ' . $user["surname"] . '<br>';
        }
        
    }
    
?>