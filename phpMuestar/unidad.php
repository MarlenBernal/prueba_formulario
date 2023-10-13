<?php

require '../php/conexion.php';


$campo = $_POST["campo"];

$sql = "SELECT MAX(idversion) version_unidad,unidad.idunidad AS id_unidad ,descripcion,abreviatura FROM muestra inner join unidad on muestra.idunidad=unidad.idunidad where espanol ILIKE '%$campo%' GROUP BY id_unidad,descripcion,abreviatura";
$query = pg_query($conexion,$sql);

$html = "";

while ($row = pg_fetch_array($query)) {
	$html .= "<li value=".$row["id_unidad"]." onclick=\"mostrare('".$row["abreviatura"]. "')\">".$row["abreviatura"]."</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);