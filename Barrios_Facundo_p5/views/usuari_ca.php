<?php

    include '../login/userLogin.php';

    $user = array();

    if (empty($_POST['email']) || empty($_POST['password'])) {
        include "login_ca.html";
        echo "Ha fallat l'inici de sessió";  
        return;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = consulta($email, $password);

    if (null == $user) { 
        include "login_ca.html";
        echo "Ha fallat l'inici de sessió"; 
        return;
    }
    
    $rolUser = $user['rol'];
    $lista = listaCompleta();


    if ($rolUser == 'alumnat') {
        ?>
    <h2>Soc un alumne</h2>
    <p>Nom: <?= $user['name'];?></p>
    <p>Cognom: <?= $user['surname'];?></p>
    <p>Correu electrònic: <?= $user['email'];?></p>
    <a href="login_ca.html">Tancar sessió</a>
    <?php
    } else {
    ?>
    <h2>Hola <?=$user['name'];?>, ets professor!</h2>
    <h3>La llista d'usuaris en la base de dades és:</h3>
    <?php
        foreach ($lista as $usuario) {
            echo "<p>Nom i cognom: ${usuario['name']} ${usuario['surname']}</p>";
        }
        echo "<a href=\"login_ca.html\">Tancar sessió</a>";
    }