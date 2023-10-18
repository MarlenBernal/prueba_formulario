<?php
require '../php/conexion.php';
session_start();


$suma= $_SESSION['ordentrabajo'];
$ordencodigo=$suma;

$d3="SELECT MAX(idclaveidentificacion) idclaveidentificacion  From ordenserviciomuestra";
$res=pg_query($conexion,$d3);
$srt=pg_fetch_assoc($res);
$idclave=$srt['idclaveidentificacion']+1;

$claveidentificacion=$suma."_".$idclave;
$mensajeria=$_POST['mensajeria'];
$guia=$_POST['guias'];
$urgencia=$_POST['urgen'];
$idioma=$_POST['idioma'];

$m1=$_POST['muestra'];
$m2="SELECT * FROM muestra where espanol = '$m1'";
$m3=pg_query($conexion,$m2);
$m4=pg_fetch_assoc($m3);
$muestra=$m4['idmuestra'];
$cantidad=$_POST['cantidad'];

$u1=$_POST['unidad'];
$u2="SELECT * FROM unidad where abreviatura ='$u1'";
$u3=pg_query($conexion,$u2);
$u4=pg_fetch_assoc($u3);
$unidad=$u4['idunidad'];

$fechamues=$_POST['Fecha_muetreo'];
$fmuestreo= date("Y-m-d", strtotime($fechamues));

$fechaen=$_POST['fecha_envio'];
$fenvio= date("Y-m-d", strtotime($fechaen));

$fechaInput=$_POST['fecha_caducidad'];
$fcaducidad= date("Y-m-d", strtotime($fechaInput));

$fechaInput2=$_POST['fecha_empaque'];
$fempaque= date("Y-m-d", strtotime($fechaInput2));

$lote=$_POST['lote'];
$ittem=$_POST['ittem'];
$tif=$_POST['tif'];

$p1=$_POST['procedencia'];
$p2="SELECT * FROM procedencia where espanol = '$p1'";
$p3=pg_query($conexion,$p2);
$p4=pg_fetch_assoc($p3);
$procedencia=$p4['idprocedencia'];

$nombreproce=$_POST['nombre_procedencia'];
$municipio=$_POST['municipio'];

$e1=$_POST['estado'];
$e2="SELECT * FROM ciudad where ciudad = '$e1'";
$e3=pg_query($conexion,$e2);
$e4=pg_fetch_assoc($e3);
$estado=$e4['idciudad'];

$cp1=$_POST['cp'];
$cp2="SELECT * FROM codigopostal where codigopostal = '$cp1'";
$cp3=pg_query($conexion,$cp2);
$cp4=pg_fetch_assoc($cp3);
$cp=$cp4['idcodigopostal'];

$descripcion_cliente=$_POST['descripcion_cliente'];
$otros_datos=$_POST['otros_datos'];
$conmensajeria=$_POST['checkmensaje'];



try{
        $Consulta="INSERT INTO ordenserviciomuestra(ordencodigo, ordenversion, claveidentificacion, idclaveidentificacion, noversion, estatus, idurgencia, disponible, conetiqueta, noetiqueta, nacional, internacional, idmuestra, fechamuestra, fechacaducidad, cantidad, lote, fechaenvio, conmensajeria, idmensajeria, noguia, noidentificacion, idprocedencia, lugar, idciudad, idcodigopostal, otrosdatos, wmid, tif, fechaempaque, identificacioncliente, idunidad,fecharegistro, horaregistro) VALUES
        ('$ordencodigo',1,'$claveidentificacion','$idclave','1','Captura','$urgencia','0','0','0','1','0','$muestra','$fmuestreo','$fcaducidad','$cantidad','$lote','$fenvio','$conmensajeria','$mensajeria','$guia','$cantidad','$procedencia','$nombreproce','$estado','$cp','$otros_datos','$ittem','$tif','$fempaque','$descripcion_cliente','$unidad',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
        $query=pg_query($conexion,$Consulta);
        echo 1;
}catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}


?>