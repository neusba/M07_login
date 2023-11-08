<?php
    session_start();
?>
    <h1>Sesión iniciada</h1>
    <?php
    if ($_SESSION['rol'] == 'alumnat') {
        ?>
    <h2>Benvingut/da alumne <?=$_SESSION['name'];?>.</h2>
    <p>Nombre: <?= $_SESSION['name'];?></p>
    <p>Apellido: <?= $_SESSION['surname'];?></p>
    <p>Email: <?= $_SESSION['email'];?></p>
    <a href="../session/delete_session.php">Cerrar sesión</a>
    <?php
    } else {
    ?>
    <h2>Benvingut/da professor/a <?=$_SESSION['name'];?>.</h2>
    <h3>La lista de usuarios en la BBDD es:</h3>
    <?php
        foreach ($_SESSION['lista'] as $usuario) {
            echo "<p>Nombre y apellido: ${usuario['name']} ${usuario['surname']}</p>";
        }
        echo "<a href=\"../session/delete_session.php\">Cerrar sesión</a>";
    }
    ?>