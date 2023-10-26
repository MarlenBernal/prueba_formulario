<?php
session_start();
require "../php/conexion.php";

$Ordenservicio=$_SESSION['ordentrabajo'];

$BuscarAnalisis="SELECT * FROM ordenserviciomuestralab where ordencodigo='$Ordenservicio' and  muestracodigo=''";
$queryBuscar=pg_query($conexion,$BuscarAnalisis);
$rowBusqueda=pg_num_rows($queryBuscar);

if($rowBusqueda!=0){
    $borrar="DELETE FROM public.ordenserviciomuestranalisis WHERE ordencodigo = '$Ordenservicio';";
    $borrar.="DELETE FROM public.ordenserviciomuestralab WHERE ordencodigo = '$Ordenservicio';";
    pg_query($conexion,$borrar);
    echo 1;
}else{
    echo 2;
}





?>