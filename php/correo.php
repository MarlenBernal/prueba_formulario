<?php

require 'conexion.php';


$campo = $_POST["campo"];

$sql = "SELECT * FROM public.cliente where razonsocial ILIKE '%$campo%' LIMIT 10 ";
$query = pg_query($conexion,$sql);

$html = "";

while ($row = pg_fetch_array($query)) {
	$html .= "<li onclick=\"moscor('" . $row["correo"] . "')\">" . $row["correo"] ."</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);