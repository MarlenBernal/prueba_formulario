<?php
session_start();
include "conexion.php";

$d1="0";
$d2=23000000;
$d3="SELECT MAX(idordentrabajo) idordentrabajo  From ordenservicio";
$res=pg_query($conexion,$d3);
$srt=pg_fetch_assoc($res);
$suma= $d1.$srt['idordentrabajo']+$d2+1;
$resp=$srt['idordentrabajo']+1;

$orden="INSERT INTO public.ordenservicio(ordentrabajo, idordentrabajo, noversion) VALUES ('$suma','$resp', '1');";
$res2=pg_query($conexion,$orden);

$_SESSION['ordentrabajo']=$suma;

echo 1;



?>