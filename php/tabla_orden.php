<?php
include "conexion.php";
$salida = "";
$q = isset($_POST['consulta']) ? pg_escape_string($conexion,$_POST['consulta']) : null;
$sql="SELECT * FROM  public.ordenserviciomuestra  where ordencodigo ILIKE '%$q%'";
$result=pg_query($conexion,$sql);

$num_rows = pg_num_rows($result);

if($num_rows ==1){
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