<?php

include "conexion.php";
include "encriptado.php";

$idUsuario= rand(1, 1000000);
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo1=$_POST['Correo'];
$Telefono=$_POST['Telefono'];
$Contraseña1=$_POST['Contraseña'];


$Contraseña = $encriptar($Contraseña1);
$Correo=$encriptar($Correo1);

try{
    $Consulta1="SELECT * FROM usuarios69 where correo = '$Correo';";
    $Respuestado1=mysqli_query($conexion,$Consulta1);
    $row=mysqli_num_rows($Respuestado1);
    if($row==1){
        echo 2;
    }else{
        $Consulta2="INSERT INTO usuarios69(id_usuario, nombre, apellido, telefono, correo, contraseña)
        VALUES ($idUsuario, '$Nombre', '$Apellido', '$Telefono', '$Correo', '$Contraseña');";
        $Respuesta2=mysqli_query($conexion,$Consulta2);
        echo 1;
    }

}catch(Exception $e){

}

?>