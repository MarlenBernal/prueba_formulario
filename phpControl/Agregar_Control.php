<?php

require "../php/conexion.php";

session_start();

$Ordencodigo=$_SESSION['ordentrabajo'];
$muestracodigo=$_SESSION['claveidentificacion'];
$NuestraVercion=$_SESSION['noversion'];
$ordenversion=$_SESSION['ordenversion'];

$identificacion=$_POST['identificacion'];
$cantidad=$_POST['cantidad'];
$variedad=$_POST['variedad'];
$nolote=$_POST['nolote'];
$noregistros=$_POST['noregistros'];

$buscar="SELECT * FROM public.ordenservicioidentificacion where ordencodigo = '$Ordencodigo';";
$querybuscar=pg_query($conexion,$buscar);
$numrowbuscar=pg_num_rows($querybuscar);

if($numrowbuscar!=0){
    $Borrar="DELETE from public.ordenservicioidentificacion where ordencodigo = '$Ordencodigo';";
    $queryborrar=pg_query($conexion,$Borrar);
    $numrowborrar=pg_num_rows($queryborrar);
    for ($i=1;$i<=$noregistros;$i++) {
        $insercion="INSERT INTO ordenservicioidentificacion 
        (ordencodigo,ordenversion,muestracodigo,muestraversion,ididentificacion,identificacion,cantidad, variedad, lote) 
        values ('$Ordencodigo', '$ordenversion', '$muestracodigo', '$NuestraVercion', $i, '$identificacion', $cantidad, '$variedad', '$nolote');";
        $query=pg_query($conexion,$insercion);
        
    }
    echo 2;
}else{
    for ($i=1;$i<=$noregistros;$i++) {
        $insercion="INSERT INTO ordenservicioidentificacion 
        (ordencodigo,ordenversion,muestracodigo,muestraversion,ididentificacion,identificacion,cantidad, variedad, lote) 
        values ('$Ordencodigo', '$ordenversion', '$muestracodigo', '$NuestraVercion', $i, '$identificacion', $cantidad, '$variedad', '$nolote');";
        $query=pg_query($conexion,$insercion);
        
    }
    echo 1;
}

    

?>