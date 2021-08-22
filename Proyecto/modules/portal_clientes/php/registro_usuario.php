<?php

    include 'conexion.php';

    date_default_timezone_set('America/Tegucigalpa');
  
    $nombre_completo=$_POST['nombre_completo'];
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $fechaRegistro=date('d-m-Y H:i:s');
    $query = "INSERT INTO usuarios_clientes(Nombre,CorreoElectronico,Nickname,password,Fecha_Registro) 
    VALUES('$nombre_completo', '$correo', '$usuario', '$password', '$fechaRegistro')";


    $ejecutar= mysqli_query($conexion, $query);
?>