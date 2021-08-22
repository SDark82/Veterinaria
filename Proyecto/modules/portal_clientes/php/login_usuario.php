<?php

    session_start();
    include 'conexion.php';

    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $password=hash('sha512',$password); //Encriptar password


    $Validar_login = mysqli_query($conexion, "SELECT * FROM usuarios_clientes WHERE CorreoElectronico='$correo'
    and password='$password'");

    if (mysqli_num_rows($Validar_login) > 0 ){
        $_SESSION['usuario'] = $correo;
        header("location: ../dashboard.php");
    }else{
        echo '
            <script>
                alert("Datos de usuario incorrectos, favor ingrese un usuario valido");
                window.location="../login.php";
            </script>
        ';
    }

    mysqli_close($conexion); //Cerrar la conexion de MySQL

?>