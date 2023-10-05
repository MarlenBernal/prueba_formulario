<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbds = 'lumar';
$conexion = new mysqli($dbhost, $dbuser, $dbpass, $dbds);
if (mysqli_connect_errno()) {
    echo 'No se conecto la base de datos', mysqli_connect_error();
    exit();
}else{
    return $conexion;
}


?>