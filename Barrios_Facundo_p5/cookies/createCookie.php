<?php
    setcookie('idioma', $_GET['idioma'], time()+80000, "/");
    header("Location: viewCookie.php");
?>