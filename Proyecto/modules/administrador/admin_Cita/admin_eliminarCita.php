<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE  FROM cita  WHERE id_cita='$id_cita'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_Cita.php");
    }
?>
