<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre d'usuari</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="formIndex">
        <!-- Craemos el formulario -->
        <form method="POST" action="../crear_usuari/userSignin.php">
            <h1>Registre d'usuari</h1>
            <div>
                <label>ID</label><br>
                <input type="number" name="id">
            </div>
            <div>
                <label>Nom</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label>Cognom</label><br>
                <input type="text" name="surname">
            </div>
            <div>
                <label>Contrasenya</label><br>
                <input type="password" name="password">
            </div>
            <div>
                <label>Correu</label><br>
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
                <a href="login_cat.php">Iniciar sessió</a>
            </div>
            <a href="../T_COOKIES/deleteCookie.php">Tornar a la selecció d'idioma i eliminar cookies</a>
        </form>
    </div>
</body>
</html>