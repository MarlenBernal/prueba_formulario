<?php
require '../php/conexion.php';


$noservicio="SELECT MAX(ordentrabajo) ordentrabajo FROM ordenservicio";
$consultano=pg_query($conexion,$noservicio);
$rowservicio=pg_fetch_assoc($consultano);

$ordencodigo=$rowservicio['ordentrabajo'];
$idclaveidentificacion=1;
$claveidentificacion=$rowservicio['ordentrabajo']."_".$idclaveidentificacion;
$mensajeria=$_POST['mensajeria'];
$guia=$_POST['guias'];
$urgencia=$_POST['urgen'];
$idioma=$_POST['idioma'];
$m1=$_POST['muestra'];
$m2="SELECT * FROM muestra";
$m3=pg_query($conexion,$m2);
$m4=pg_fetch_assoc($m3);
$muestra=$m4['idmuestra'];
$cantidad=$_POST['cantidad'];
$unidad=$_POST['unidad'];
$fmuestreo=$_POST['Fecha_muetreo'];
$fenvio=$_POST['fecha_envio'];
$fcaducidad=$_POST['fecha_caducidad'];
$fempaque=$_POST['fecha_empaque'];
$lote=$_POST['lote'];
$ittem=$_POST['ittem'];
$tif=$_POST['tif'];

$p1=$_POST['procedencia'];
$p2="SELECT * FROM procedencia";
$p3=pg_query($conexion,$p2);
$p4=pg_fetch_assoc($p3);
$procedencia=$p4['idprocedencia'];

$nombreproce=$_POST['nombre_procedencia'];
$municipio=$_POST['municipio'];
$estado=$_POST['estado'];
$cp=$_POST['cp'];
$descripcion_cliente=$_POST['descripcion_cliente'];
$otros_datos=$_POST['otros_datos'];
$motivo_cancelacion=$_POST['motivo_cancelacion'];
$modificacion=$_POST['modificacion'];
$conmensajeria=$_POST['checkmensaje'];

$Consulta="INSERT INTO ordenserviciomuestra(ordencodigo, ordenversion, claveidentificacion, idclaveidentificacion, noversion, estatus, idurgencia, disponible, conetiqueta, noetiqueta, nacional, internacional, idmuestra, fechamuestra, fechacaducidad, cantidad, lote, fechaenvio, conmensajeria, idmensajeria, noguia, noidentificacion, idprocedencia, lugar, idcalle, numerointerior, numeroexterior, idcolonia, idpoblacion, idciudad, idcodigopostal, otrosdatos, wmid, tif, fechaempaque, identificacioncliente, tamanomuestra, idunidad, usuarioregistro,fecharegistro, horaregistro) VALUES
        ('$ordencodigo','1','$claveidentificacion','$idclaveidentificacion','1','Captura','$urgencia','0','0','0','1','0','$muestra','$fmuestreo','$fcaducidad','$cantidad','$lote','$fenvio','$conmensajeria','$mensajeria','$guia','$cantidad','$procedencia','$nombreproce','')";


?>