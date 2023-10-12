<?php

require '../php/conexion.php';


$campo = $_POST["campo_codigo"];

$sql = "SELECT * FROM public.codigopostal where codigopostal ILIKE '%$campo%' LIMIT 10 ";
$query = pg_query($conexion,$sql);

$htmli = "";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<li value=".$row["idcodigopostal"]." onclick=\"mostrarcodigo('" . $row["codigopostal"] . "')\">" . $row["codigopostal"] ."</li>";
}

echo json_encode($htmli, JSON_UNESCAPED_UNICODE);