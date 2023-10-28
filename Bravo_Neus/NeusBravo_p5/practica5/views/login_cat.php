<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inici de sessió</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="formLogin">
        <!-- Craemos el formulario de Login de usuarios-->
        <form method="POST" action="usuari_cat.php">
            <h1>Iniciar sessió</h1>
            <div>
                <label>Correu</label><br>
                <input type="text" name="email">
            </div>
            <div>
                <label>Contrasenya</label><br>
                <input type="password" name="password">
            </div>
            <input type="checkbox" value="Remember">Recorda'm<br>
            <div class="acceso">
                <input type="submit" value="Submit">
                <a href="index_cat.php">Crear compte</a>
            </div>
            <a href="../T_COOKIES/deleteCookie.php">Tornar a la selecció d'idioma</a>
            <!-- Mensaje por si el login es incorrecto -->
            <?php
                $muestraErrorLogin = false;
                $muestraInsercionCorrecta = false;

                if(isset($_GET['error'])) {
                    $muestraErrorLogin = true;
                }
                if(isset($_GET['insercion'])) {
                    $muestraInsercionCorrecta = true;
                }
            ?>
            <?php if ($muestraErrorLogin) : ?>
                <p>Inici de sessió incorrecte</p>
            <?php endif; ?>
            <?php if ($muestraInsercionCorrecta) : ?>
                <p>Usuari registrat amb éxit</p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>