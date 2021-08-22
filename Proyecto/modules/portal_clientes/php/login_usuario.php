<?php

include 'conexion.php';

$correo=$_POST['correo'];
$password=$_POST['password'];

$query = "SELECT 'correo' FROM usuarios_cliente";

$ejecutar = mysqli_query($conexion, $query);

?>