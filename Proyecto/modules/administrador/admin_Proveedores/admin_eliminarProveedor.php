<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE FROM proveedores  WHERE id_proveedores='$id_proveedores'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_Proveedores.php");
    }
?>