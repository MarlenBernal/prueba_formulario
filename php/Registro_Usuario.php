<?php

include "conexion.php";
include "encriptado.php";

$idUsuario= rand(1, 1000000);
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];
$Contraseña1=$_POST['Contraseña'];


$Contraseña = $encriptar($Contraseña1);

try{
    $Consulta1="SELECT * FROM regisusuario where correo = '$Correo';";
    $Respuestado1=pg_query($conexion,$Consulta1);
    $row=pg_num_rows($Respuestado1);
    if($row==1){
        echo 2;
    }else{
        $Consulta2="INSERT INTO regisusuario(idregisusuario, nombre, apellido, telefono, correo, contrasena)
        VALUES ($idUsuario, '$Nombre', '$Apellido', '$Telefono', '$Correo', '$Contraseña');";
        $Respuesta2=pg_query($conexion,$Consulta2);
        echo 1;
    }

}catch(Exception $e){

}

?>