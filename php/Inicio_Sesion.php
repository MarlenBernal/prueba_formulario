<?php
session_start();

include "conexion.php";
include "encriptado.php";

$Correo1 = $_POST["Correo"];
$Contraseña1=$_POST["Contraseña"];

$Contraseña = $encriptar($Contraseña1);
$Correo=$encriptar($Correo1);

try{
    $Consulta = "SELECT * FROM usuarios69 WHERE correo='$Correo' and contraseña='$Contraseña';";
    $Resultado = mysqli_query($conexion,$Consulta);
    $row=mysqli_num_rows($Resultado);
    if($row=="1"){
        $data=mysqli_fetch_array($Resultado);
        $_SESSION["id"]=$data["id_usuario"];
        $_SESSION["usuario"]=$data["nombre"];
        echo 1;
    }else{
        echo "Datos Incorrectos";
    }
}catch(Exception $e) {
    echo $e;
}
?>