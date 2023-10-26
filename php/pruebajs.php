<?php

require 'conexion.php';


$campo = $_POST["Representante"];

$sql = "SELECT * FROM public.cliente where razonsocial ILIKE '%$campo%' LIMIT 20 ";
$query = pg_query($conexion,$sql);

$htmlrep = "";

while ($row = pg_fetch_array($query)) {
	$htmlrep .= "<option value=".$row["idcliente"]." onclick=\"mostrar('" . $row["razonsocial"] . "')\">" . $row["razonsocial"] ."</option>";
}

echo json_encode($htmrep, JSON_UNESCAPED_UNICODE);
?>