<?php
    include ("../db_connection.php");
    include("../authenticate.php");
    
    // Muestra los errores en pantalla
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Comprobamos si es alumno o professor e imprimos segun sea
    $nombre = $respuestaFormat["nombre"];
    if ($nombre == "Alumne") {
        echo $nombre;
        // Imprimir Bienvenido alumno!
    } elseif ($nombre == "Professor") {
        // Imprimimos bienvenido profesor!
        // Imprimir otras personas de la base de datos
        altresUsuaris($conexion);
    } //else {
    //     // Redirigimos de nuevo al login y enviamos un mensaje de incorrecto
    //     header("Location: login.php?error=1");
    //     exit;
    // }

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