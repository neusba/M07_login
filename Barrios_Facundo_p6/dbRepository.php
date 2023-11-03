<?php 

    include_once '../dbConf.php';


    function consulta($email, $pass) {
        global $conn;
        $query = "SELECT * FROM user WHERE email = '$email' 
                and password = '$pass'";
        $result = mysqli_query($conn, $query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }

    function listaCompleta() {
        global $conn;
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $row;
    }

    function addUser($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        return $result;
    }