<?php

require '../php/conexion.php';


$campo = $_POST["campo_esta"];

$sql = "SELECT * FROM public.ciudad where ciudad ILIKE '%$campo%' LIMIT 10 ";
$query = pg_query($conexion,$sql);

$htmli = "";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<li value=".$row["idciudad"]." onclick=\"mostrarproce('" . $row["ciudad"] . "')\">" . $row["ciudad"] ."</li>";
}

echo json_encode($htmli, JSON_UNESCAPED_UNICODE);