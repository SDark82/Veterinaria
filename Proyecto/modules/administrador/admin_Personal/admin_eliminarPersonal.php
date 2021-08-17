<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE  FROM personal  WHERE id_personal='$id_personal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_Personal.php");
    }
?>