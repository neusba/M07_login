<?php
    include ("../db_connection.php");
    include("../iniciar_sessio/userLogin.php");

    session_start();

    // Muestra los errores en pantalla
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Comprobamos si es alumno o professor e imprimos segun sea
    echo "Sessió iniciada<br>";
    if ($_SESSION['rol'] == "Alumne") {
        print_r("Benvingut/da alumne " . $_SESSION["name"] . '<br>');
        print_r('<strong>Cognom:</strong> ' . $_SESSION["surname"] . '<br>');
        print_r('<strong>Email:</strong> ' . $_SESSION["email"] . '<br>');
    } elseif ($_SESSION['rol'] == "Professor") {
        // Mostramos los datos en caso de que sea professor
        print_r("Benvingut/da professor/a " . $_SESSION["name"] . '<br>');
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

        while ($user = $respuestaOtrosUsuarios->fetch_assoc()) {
            echo "<strong>Nom i cognom:</strong> " . $user["name"] . ' ' . $user["surname"] . '<br>';
        }
    }
    
    echo "<a href=\"../session/delete_session.php\">Cerrar sesión</a>";
?>