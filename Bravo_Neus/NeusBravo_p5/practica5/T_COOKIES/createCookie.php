<?php
if (isset($_GET['idioma'])) {
    $idioma = $_GET['idioma'];

    $idiomasValidos = ["es", "en", "cat"];
    if (in_array($idioma, $idiomasValidos)) {
        // Creamos la cookie con el valor seguro
        setcookie("cookieIdioma", $idioma, time() + 84600);

        // Redirigimos a la página readCookie.php
        header("Location: readCookie.php");
    } else {
        echo "Idioma no válido";
        header("Location: ../views/idioma.php");
    }
} else {
    echo "Falta el parámetro 'idioma' en la URL";
    header("Location: ../views/idioma.php");
}
?>
