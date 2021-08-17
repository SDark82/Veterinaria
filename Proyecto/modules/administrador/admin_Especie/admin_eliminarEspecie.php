<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE FROM especie  WHERE id_especie='$id_especie'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_cliente.php");
    }
?>