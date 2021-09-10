<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE  FROM enfermedad  WHERE id_enfermedad='$id_enfermedad'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_cliente.php");
    }
?>