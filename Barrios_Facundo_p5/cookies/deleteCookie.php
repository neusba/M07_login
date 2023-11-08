<?php
    setcookie("idioma", "", time()-1, "/");
    header("Location: ../index.php");
?>