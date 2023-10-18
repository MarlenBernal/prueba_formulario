<?php
include "conexion.php";
$salida = "";

$tablabus=$_POST["orden"];

$sql="SELECT * FROM  public.ordenserviciomuestra where ordencodigo = '$tablabus'";
$result=pg_query($conexion,$sql);

$num_rows = pg_num_rows($result);

if($num_rows !=0){
    while($fila = pg_fetch_array($result)){
        $salida.="<tr>
        <td>".$fila['ordenversion']."</td>
        <td>".$fila['ordenversion']."</td>
        <td>".$fila['noversion']."</td>
        <td>".$fila['ordenversion']."</td>
        <td>".$fila['ordenversion']."</td>
        <td>".$fila['claveidentificacion']."</td>
        <td>".$fila['identificacioncliente']."</td>
        <td>".$fila['estatus']."</td>
        <td>".$fila['fechamuestra']."</td>
        <td>".$fila['fechacaducidad']."</td>
        <td>".$fila['cantidad']."</td>
        <td>".$fila['lote']."</td>
        <td>".$fila['fechaenvio']."</td>
        </tr>";
    }
}else {
    $salida="No hay analizis";
}

echo $salida;

?>