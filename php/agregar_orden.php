<?php
require 'conexion.php';


$orden=$_POST['orden'];
$fecha=$_POST['fecha'];

$nombre=$_POST['cliente'];
$n1="SELECT idcliente FROM cliente where razonsocial = '$nombre'";
$n2=pg_query($conexion,$n1);
$n3=pg_fetch_assoc($n2);
$n4=$n3['idcliente'];

$razon=$_POST['razon'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$d3="SELECT MAX(idordentrabajo) idordentrabajo  From ordenservicio";
$res=pg_query($conexion,$d3);
$srt=pg_fetch_assoc($res);
$suma=$srt['idordentrabajo']+1;

$representante = $_POST['representante'];

$agregarorden="INSERT INTO public.ordenservicio(
	ordentrabajo, idordentrabajo, noversion, nacional, idcliente, internacional,fecharegistro,horaregistro,estaactivo,nomcliente,dircliente,emacliente,telcliente)
	VALUES ('$orden', '$suma', 1, 1,'$n4' , 0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,1,'$razon','$direccion','$correo','$telefono');";
$respuesta=pg_query($conexion,$agregarorden);



?>