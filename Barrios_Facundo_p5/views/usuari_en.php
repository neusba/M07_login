<?php

    include '../login/userLogin.php';

    $user = array();

    if (empty($_POST['email']) || empty($_POST['password'])) {
        include "login_en.html";
        echo "Login failed"; 
        return;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = consulta($email, $password);

    if (null == $user) { 
        include "login_en.html";
        echo "Login failed"; 
        return;
    }
    
    $rolUser = $user['rol'];
    $lista = listaCompleta();


    if ($rolUser == 'alumnat') {
        ?>
    <h2>I'm a student</h2>
    <p>Name: <?= $user['name'];?></p>
    <p>Surname: <?= $user['surname'];?></p>
    <p>Email: <?= $user['email'];?></p>
    <a href="login_en.html">Log out</a>
    <?php
    } else {
    ?>
    <h2>Hi <?=$user['name'];?>, you're a teacher!</h2>
    <h3>The list of users in the DB is:</h3>
    <?php
        foreach ($lista as $usuario) {
            echo "<p>Full name: ${usuario['name']} ${usuario['surname']}</p>";
        }
        echo "<a href=\"login_en.html\">Log out</a>";
    }