<?php

ini_set('display_errors', 1);   // Muestra errores de php en pantalla !!!!
error_reporting(E_ALL);

// Recogemos los datos del formulario 

$id = $_POST['id'];
$rol= $_POST['rol'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$email = $_POST['email'];

// Datos para conectar la BBDD
$db_host = "localhost";
$db_nombre = "Users";
$db_usuario = "root";
$db_password = "";

// Conectamos la base de datos
$conexion = new mysqli($db_host, $db_usuario, $db_password, $db_nombre);    // Mysqli moderno
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL.";
    exit;
} else {
    echo "Conexión exitosa a MYSQL";
}
// Creamos la consulta
$sql = "INSERT INTO user (id, rol, name, surname, password, email)
            VALUES ('$id', '$rol', '$name', '$surname', '$password', '$email')";

// Hacemos la query
$respuesta = $conexion->query($sql);

if($respuesta) {
    echo "Datos registrados correctamente";
} else {
    echo "No ha sido posible registrar al usuario";
}

$conexion->close();
?>
