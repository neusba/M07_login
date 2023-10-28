<?php
    $route = $_GET['origen'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        if($_COOKIE['idioma'] == 'ca') {
            header('Location: views/login_ca.html');
        } else if($_COOKIE['idioma'] == 'es') {
            header('Location: views/login_es.html');
        } else if($_COOKIE['idioma'] == 'en') {
            header('Location: views/login_en.html');
        }
    ?>


    <table width="25%" border="2px solid black" align="center">
        <tr>
            <td colspan="3" align="center"><h1>Selección de idioma</h1></td>
        </tr>
        <tr>
            <td align="center">
                <a href="cookies/createCookie.php?idioma=ca">
                    <img src="img/cat.png" width="90" height="90">
                </a>
                <h1>CAT</h1>
            </td>
            <td align="center">
                <a href="cookies/createCookie.php?idioma=es">
                    <img src="img/esp.png" width="90" height="90">
                </a>
                <h1>ESP</h1>
            </td>
            <td align="center">
                <a href="cookies/createCookie.php?idioma=en">
                    <img src="img/eng.png" width="90" height="90">
                </a>
                <h1>ENG</h1>
            </td>
        </tr> 
    </table>

</body>
</html>