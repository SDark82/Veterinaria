<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="UPDATE  FROM factura  WHERE id_factura='$id_factura'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin_factura.php");
    }
?>