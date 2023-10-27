<?php

    include '../../login/userLogin.php';

    $user = array();

    if (empty($_POST['email']) || empty($_POST['password'])) {
        include "../cat/login.html";
        echo "Login incorrecto"; 
        return;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = consulta($email, $password);

    if (null == $user) { 
        include "../cat/login.html";
        echo "Login incorrecte"; 
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
    <a href="login.html">Tancar sessió</a>
    <?php
    } else {
    ?>
    <h2>Hola <?=$user['name'];?>, ets professor!</h2>
    <h3>La llista d'usuaris de la BBDD és:</h3>
    <?php
        foreach ($lista as $usuario) {
            echo "<p>Nom i cognom: ${usuario['name']} ${usuario['surname']}</p>";
        }
        echo "<a href=\"login.html\">Tancar sessió</a>";
    }