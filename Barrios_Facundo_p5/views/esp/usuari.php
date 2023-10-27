<?php

    include_once '../../login/userLogin.php'; // PASAR TODO A UNA SOLA CARPETA VIEWS

    $user = array();

    if (empty($_POST['email']) || empty($_POST['password'])) {
        include "../esp/login.html";
        echo "Login incorrecto"; 
        return;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];



    echo ("email=".$email."  "."pass=".$password);
    print_r($conn);



    
    $user = consulta($email, $password);
    print_r($user);     //AQUI PETA

    if (null == $user) { 
        include "../esp/login.html";
        echo "Login incorrecto"; 
        return;
    }
    
    $rolUser = $user['rol'];
    $lista = listaCompleta();


    if ($rolUser == 'alumnat') {
        ?>
    <h2>Soy un alumno</h2>
    <p>Nombre: <?= $user['name'];?></p>
    <p>Apellido: <?= $user['surname'];?></p>
    <p>Email: <?= $user['email'];?></p>
    <a href="login.html">Cerrar sesión</a>
    <?php
    } else {
    ?>
    <h2>Hola <?=$user['name'];?>, eres profesor!</h2>
    <h3>La lista de usuarios en la BBDD es:</h3>
    <?php
        foreach ($lista as $usuario) {
            echo "<p>Nombre y apellido: ${usuario['name']} ${usuario['surname']}</p>";
        }
        echo "<a href=\"login.html\">Cerrar sesión</a>";
    }