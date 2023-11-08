<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="formIndex">
        <!-- Craemos el formulario -->
        <form method="POST" action="../crear_usuari/userSignin.php">
            <h1>Registro de usuario</h1>
            <div>
                <label>ID</label><br>
                <input type="number" name="id">
            </div>
            <div>
                <label>Nombre</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label>Apellido</label><br>
                <input type="text" name="surname">
            </div>
            <div>
                <label>Contraseña</label><br>
                <input type="password" name="password">
            </div>
            <div>
                <label>Correo</label><br>
                <input type="text" name="email">
            </div>
            <div>
                <label>Rol</label>
                <select name="rol">
                    <option value="alumne">Alumne</option>
                    <option value="professor">Professor</option>
                </select>
            </div>
            <div class="acceso">
                <input type="submit" value="Submit">
                <a href="login_es.php">Iniciar sesión</a>
            </div>
            <a href="../T_COOKIES/deleteCookie.php">Volver a la selección de idioma y borrar cookies</a>
        </form>
    </div>
</body>
</html>