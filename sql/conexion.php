<?php

$servername = "localhost";
$username = "root";
$password = "";
$bdname = "blog";

$conexion = mysqli_connect($servername, $username, $password, $bdname);

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

?>
