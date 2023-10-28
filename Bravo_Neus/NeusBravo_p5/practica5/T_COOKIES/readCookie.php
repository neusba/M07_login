<?php
if ($_COOKIE['cookieIdioma'] == "en") {
    header("Location: ../views/index.php");
} else if ($_COOKIE['cookieIdioma'] == "es") {
    header("Location: ../views/index_es.php");
} else if ($_COOKIE['cookieIdioma'] == "cat") {
    header("Location: ../views/index_cat.php");
}
?>
