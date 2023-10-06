<?php

// Recogemos los datos del formulario 

$id = $_POST['id'];
$rol= $_POST['rol'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$email = $_POST['email'];
$active = $_POST['acepto'];

// Datos para conectar la BBDD
$db_host = "localhost";
$db_nombre = "Users";
$db_usuario = "root";
$db_password = "";

// Conectamos la base de datos
$conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

// Creamos la consulta
$consulta = "INSERT INTO Users VALUES (${rol}, ${name}, ${surname}, ${password}, ${email}, ${active})";

// Hacemos la query
if (mysqli_query($conexion, $consulta)) {
    echo "Registro correcto";
} else {
    echo "Error en la consulta" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
