<?php

require 'conexion.php';


$campo = $_POST["campo"];

$sql = "SELECT * FROM public.cliente where razonsocial ILIKE '%$campo%' LIMIT 10 ";
$query = pg_query($conexion,$sql);

$htmli = "";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<li value=".$row["idcliente"]." onclick=\"mostrar('" . $row["razonsocial"] . "')\">" . $row["razonsocial"] ."</li>";
}

echo json_encode($htmli, JSON_UNESCAPED_UNICODE);