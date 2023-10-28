<?php

    if(!$_COOKIE['idioma']) {
        header("Location: ../index.php");
    } else if($_COOKIE['idioma'] == 'ca') {
        header('Location: ../views/login_ca.html');
    } else if($_COOKIE['idioma'] == 'es') {
        header('Location: ../views/login_es.html');
    } else if($_COOKIE['idioma'] == 'en') {
        header('Location: ../views/login_en.html');
    }

?>