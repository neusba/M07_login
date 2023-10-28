<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona idioma</title>
    <link rel="stylesheet" href="../styles/stylesIdiomas.css">
</head>
<body>
    <?php
        if (isset($_COOKIE['idiomaCookie'])) {
            $idioma = $_COOKIE['idiomaCookie'];
            if ($idioma == "en") {
                header("Location: index.php");
            } else if ($idioma == "es") {
                header("Location: index.php");
            } else if ($idioma == "cat") {
                header("Location: index.php");
            }
        }
    ?>
    <h1>Selecciona el idioma</h1>
    <div class="eligeBandera">
        <a href="../T_COOKIES/createCookie.php?idioma=en">
            <img class="flag" src="../img/banderauk.jpg" alt="English language">
        </a>
        <a href="../T_COOKIES/createCookie.php?idioma=es">
            <img class="flag" src="../img/banderaespaña.jpg" alt="Spanish language">
        </a>
        <a href="../T_COOKIES/createCookie.php?idioma=cat">
            <img class="flag" src="../img/banderacat.jpg" alt="Catalan language">
        </a>
    </div>
</body>
</html>