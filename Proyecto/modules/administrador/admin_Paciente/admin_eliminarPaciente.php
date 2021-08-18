<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE FROM paciente  WHERE id_paciente='$id_paciente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_paciente.php");
    }
?>