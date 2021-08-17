<?php
function conectar(){
    $host="localhost";
    $user="UserDB";
    $pass="V3tErinAr1a";

    $bd="bd_veterinaria";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
