<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE  FROM cirugia  WHERE id_cirugia='$id_cirugia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_Cirugia.php");
    }
?>
