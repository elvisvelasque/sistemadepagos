<?php
function conectar(){

    $user="root";
    $pass="";
    $server="localhost";
    $db="pagos2";
    $con=mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar a la bd ");
    return $con;
}
?>