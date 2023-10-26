<?php

require '../php/conexion.php';


$campo = $_POST["campo"];

$sql = "SELECT DISTINCT MAX(idversion) version_muestra, idmuestra,espanol FROM public.muestra where espanol ILIKE '%$campo%' GROUP BY idmuestra,espanol  ";
$query = pg_query($conexion,$sql);

$htmli = "";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<option value=".$row["idmuestra"]." onclick=\"mostrar('" . $row["espanol"] . "')\">" . $row["espanol"] ."</option>";
}

echo json_encode($htmli, JSON_UNESCAPED_UNICODE);