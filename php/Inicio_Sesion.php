<?php
session_start();

include "conexion.php";
include "encriptado.php";

$Correo = $_POST["Correo"];
$Contraseña1=$_POST["Contraseña"];

$Contraseña = $encriptar($Contraseña1);

try{
    $Consulta = "SELECT * FROM public.regisusuario WHERE correo='$Correo' and contrasena='$Contraseña';";
    $Resultado = pg_query($conexion,$Consulta);
    $row=pg_num_rows($Resultado);
    if($row=="1"){
        $data=pg_fetch_array($Resultado);
        $_SESSION["id"]=$data["idregisusuario"];
        $_SESSION["usuario"]=$data["nombre"];
        echo 1;
    }else{
        echo "Datos Incorrectos";
    }
}catch(Exception $e) {
    echo $e;
}
?>