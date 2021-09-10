<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE   FROM jaula  WHERE id_jaula='$id_jaula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_jaula.php");
    }
?>