<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="formLogin">
        <!-- Craemos el formulario de Login de usuarios-->
        <form method="POST" action="usuari.php">
            <h1>Log in</h1>
            <div>
                <label>Email</label><br>
                <input type="text" name="email">
            </div>
            <div>
                <label>Password</label><br>
                <input type="password" name="password">
            </div>
            <input type="checkbox" value="Remember">Remember me<br>
            <div class="acceso">
                <input type="submit" value="Submit">
                <a href="index.php">Sign in</a>
            </div>
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
                <p>Login incorrecto</p>
            <?php endif; ?>
            <?php if ($muestraInsercionCorrecta) : ?>
                <p>Registro realizado con éxito</p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>