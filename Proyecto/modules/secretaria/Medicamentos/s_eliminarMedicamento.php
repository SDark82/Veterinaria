<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE  FROM medicamento  WHERE id_medicamento='$id_medicamento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_Medicamento.php");
    }
?>