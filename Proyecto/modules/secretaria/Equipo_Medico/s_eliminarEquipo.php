<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE  FROM equipo  WHERE id_equipo='$id_equipo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_cliente.php");
    }
?>