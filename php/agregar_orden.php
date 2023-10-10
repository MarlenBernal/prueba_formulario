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

$comprobar = "SELECT * FROM public.ordenservicio where ordentrabajo = '$orden'";
$ComResultado= pg_query($conexion,$comprobar);
$numrow=pg_num_rows($ComResultado);

$representante=$_POST['representante'];
$r1="SELECT idversion FROM representante where idrepresentante = '$representante'";
$r2=pg_query($conexion,$r1);
$r3=pg_fetch_assoc($r2);
$r4=$r3['idversion'];

if($numrow!=1){
	$agregarorden="INSERT INTO public.ordenservicio(
		ordentrabajo, idordentrabajo, noversion, nacional, idcliente, internacional,fecharegistro,horaregistro,estaactivo,nomcliente,dircliente,emacliente,telcliente,ridrepresentante,ridversion)
		VALUES ('$orden', '$suma', 1, 1,'$n4' , 0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,1,'$razon','$direccion','$correo','$telefono','$representante','$r4');";
	$respuesta=pg_query($conexion,$agregarorden);
	echo 1;
}else if($numrow==1){
	echo 2;
}



?>