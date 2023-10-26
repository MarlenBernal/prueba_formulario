<?php
require "../php/conexion.php";

session_start();

$Ordencodigo=$_SESSION['ordentrabajo'];
$muestracodigo=$_SESSION['claveidentificacion'];
$NoVercion=$_SESSION['noversion'];
$ordenversion=$_SESSION['ordenversion'];
$Laboratorio=$_POST['Laboratorio'];
$Analisis=$_POST['Analisis'];

$Buscar="SELECT * FROM ordenserviciomuestranalisis where  ordencodigo='$Ordencodigo' and idanalisis= $Analisis ;";
$Busca=pg_query($conexion,$Buscar);
$numrows=pg_num_rows($Busca);

$costo="SELECT * FROM analisis where idanalisis='$Analisis'";
$SacarCosto=pg_query($conexion,$costo);
$rowcosto=pg_fetch_assoc($SacarCosto);
$costoreal=$rowcosto['costo'];

    if($numrows!=0){
       echo 2;
    }else{
        $Insertarlab="INSERT INTO ordenserviciomuestralab (ordencodigo,ordenversion,muestracodigo,muestraversion,idlaboratorio) 
        VALUES ('$Ordencodigo','$ordenversion','$muestracodigo','$NoVercion','$Laboratorio')";
        $Insertaranali="INSERT INTO ordenserviciomuestranalisis (ordencodigo,ordenversion,muestracodigo,muestraversion,idlaboratorio,idanalisis,estaactivo,precioreal)
        VALUES ('$Ordencodigo','$ordenversion','$muestracodigo','$NoVercion','$Laboratorio','$Analisis',1,'$costoreal')";
    
        $query1=pg_query($conexion,$Insertarlab);
        $query2=pg_query($conexion,$Insertaranali);
    
        echo 1;
    }





?>