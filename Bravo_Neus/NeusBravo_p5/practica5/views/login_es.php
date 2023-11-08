<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="formLogin">
        <!-- Craemos el formulario de Login de usuarios-->
        <form method="POST" action="usuari_es.php">
            <h1>Inicio de sesión</h1>
            <div>
                <label>Correo</label><br>
                <input type="text" name="email">
            </div>
            <div>
                <label>Contraseña</label><br>
                <input type="password" name="password">
            </div>
            <input type="checkbox" value="Remember">Recuérdame<br>
            <div class="acceso">
                <input type="submit" value="Submit">
                <a href="index_es.php">Crear cuenta</a>
            </div>
            <a href="../T_COOKIES/deleteCookie.php">Voler a la selección de idioma</a>
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
                <p>Inicio de sesión incorrecto</p>
            <?php endif; ?>
            <?php if ($muestraInsercionCorrecta) : ?>
                <p>Usuario registrado con éxito</p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>