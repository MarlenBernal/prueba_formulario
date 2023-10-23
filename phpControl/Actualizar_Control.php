<?php
include "../php/conexion.php";
$salida = "";
session_start();

$Ordenservicio=$_SESSION['ordentrabajo'];
$tablabus=$_POST["orden"];

$sql="SELECT *  FROM  ordenservicioidentificacion  where ordencodigo = '$Ordenservicio'";
$result=pg_query($conexion,$sql);



$num_rows = pg_num_rows($result);

if($num_rows !=0){
    while($fila = pg_fetch_array($result)){
        $salida.="<tr>
        <td>".$fila['ididentificacion']."</td>
        <td>".$fila['identificacion']."</td>
        <td>".$fila['cantidad']."</td>
        <td>".$fila['variedad']."</td>
        <td>".$fila['lote']."</td>
        </tr>";
    }
}else {
    $salida="No hay analizis";
}

echo $salida;

?>