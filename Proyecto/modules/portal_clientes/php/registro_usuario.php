<?php

    include 'conexion.php';

    date_default_timezone_set('America/Tegucigalpa');
  
    $nombre_completo=$_POST['nombre_completo'];
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $password=hash('sha512',$password); //Se encripta contraseña - se llama igual para no modificar el resto del codigo
    $fechaRegistro=date('d-m-Y H:i:s');
    $tipoUsuario="1";
    
    $query = "INSERT INTO usuarios (Nombre,CorreoElectronico,Nickname,password,Fecha_Registro,id_tipoUsuario) 
    VALUES('$nombre_completo', '$correo', '$usuario', '$password', '$fechaRegistro', '$tipoUsuario')";

    //verificar que el correo no se repitae en la base de datos
    $verifica_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE CorreoElectronico='$correo'");
    $verifica_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nickname ='$usuario'");

    
    if (mysqli_num_rows($verifica_correo) > 0 ){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location="../login.php";
            </script>
        ';
    } elseif(mysqli_num_rows($verifica_usuario) > 0){
        echo '
        <script>
            alert("Este usuario ya esta registrado, intenta con otro diferente");
            window.location="../login.php";
        </script>
        ';
    } else {
        $ejecutar= mysqli_query($conexion, $query);
    }

    if ($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente!");
                window.location ="../login.php";
            </script>
        ';
    } else {
        echo '
        <script>
            alert("Usuario almacenado exitosamente!");
            window.location ="../login.php";
        </script>
        ';
    }

    mysqli_close($conexion); //Cerrar la conexion de MySQL
   
?>