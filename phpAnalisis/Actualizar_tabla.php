<?php
include "../php/conexion.php";
$salida = "";
session_start();

$Ordenservicio=$_SESSION['ordentrabajo'];
$tablabus=$_POST["orden"];

$sql="SELECT abreviatura,descripcion_espanol,analisis.idnormativa AS idnormativa , ordenserviciomuestranalisis.idlaboratorio as idlaboratorio, analisis.idunidadmed as idunidadmed  FROM  ordenserviciomuestranalisis INNER JOIN analisis on  ordenserviciomuestranalisis.idanalisis=analisis.idanalisis where ordencodigo = '$Ordenservicio'";
$result=pg_query($conexion,$sql);



$num_rows = pg_num_rows($result);

if($num_rows !=0){
    while($fila = pg_fetch_array($result)){
        $salida.="<tr>
        <td>".$fila['abreviatura']."</td>
        <td>".$fila['descripcion_espanol']."</td>
        <td>".$fila['idnormativa']."</td>
        <td>".$fila['idunidadmed']."</td>
        <td>".$fila['idlaboratorio']."</td>
        </tr>";
    }
}else {
    $salida="No hay analizis";
}

echo $salida;

?>