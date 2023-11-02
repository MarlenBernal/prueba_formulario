<?php
require 'conexion.php';
session_start();

$orden=$_POST['orden'];
$fecha=$_POST['fecha'];

$nombre=$_POST['cliente'];
$n1="SELECT idcliente FROM cliente where razonsocial = '$nombre'";
$n2=pg_query($conexion,$n1);
$n3=pg_fetch_assoc($n2);
$n4=$n3['idcliente'];

	$_SESSION['cliente']=$nombre;

$razon=$_POST['razon'];
	$_SESSION['razon']=$razon;
$direccion=$_POST['direccion'];
	$_SESSION['direccion']=$direccion;
$correo=$_POST['correo'];
	$_SESSION['correo']=$correo;
$telefono=$_POST['telefono'];
	$_SESSION['telefono']=$telefono;
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
$_SESSION['representante']=$representante;

if($numrow==1){
	$agregarorden="UPDATE public.ordenservicio SET
		nacional=1, idcliente='$n4', internacional=0,fecharegistro=CURRENT_TIMESTAMP,horaregistro=CURRENT_TIMESTAMP,estaactivo=1,nomcliente='$razon',dircliente='$direccion',emacliente='$correo',telcliente='$telefono',ridrepresentante='$representante',ridversion='$r4'
		where ordentrabajo='$orden';";
	$respuesta=pg_query($conexion,$agregarorden);
	echo 1;
}else if($numrow!=1){
	echo 2;
}



?>