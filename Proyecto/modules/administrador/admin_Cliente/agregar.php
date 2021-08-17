<?php
include("../../conexion/conexion.php");
$con=conectar();
$Cont=2;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario']; 
$clave=$_POST['password'];

$hoy= date("Y-m-d");
$Cont=$Cont+1;
$sql="INSERT INTO clientes(ID_Cliente, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Telefono_Casa, Telefono_Celular, Correo_Electronico, Direccion_Casa) 
VALUES('CL$Cont','$nombre','','$apellido','','','','$correo','')";
$sql2="INSERT INTO ventas(Id_Venta, Fecha_Venta, Id_Mascota, Id_cliente, Total_Venta) 
VALUES('','$hoy','','CL$Cont','0')";
$sql3="INSERT INTO usuarios_clientes(Id_Usuario, Usuario_Cliente, Id_cliente, Contraseña, Fecha_Registro) 
VALUES('','$usuario','CL$Cont','$clave','$hoy')";
$query= mysqli_query($con,$sql);
$query= mysqli_query($con,$sql2);
$query= mysqli_query($con,$sql3);
$Cont=$Cont+1;
if($query){
    Header("Location: admin_cliente.php");
    
}else {
}
?>