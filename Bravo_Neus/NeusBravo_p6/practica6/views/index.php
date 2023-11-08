<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserción de datos en una BBDD</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="formIndex">
        <!-- Craemos el formulario -->
        <form method="POST" action="../crear_usuari/userSignin.php">
            <h1>Sign in</h1>
            <div>
                <label>ID</label><br>
                <input type="number" name="id">
            </div>
            <div>
                <label>Name</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label>Surname</label><br>
                <input type="text" name="surname">
            </div>
            <div>
                <label>Password</label><br>
                <input type="password" name="password">
            </div>
            <div>
                <label>Email</label><br>
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
                <a href="login.php">Log in</a>
            </div>
        </form>
    </div>
</body>
</html>