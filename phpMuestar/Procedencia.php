<?php
require '../php/conexion.php';


$campo = $_POST["campo_Proce"];

$sql = "SELECT * FROM public.procedencia where espanol ILIKE '%$campo%'";
$query = pg_query($conexion,$sql);

$htmli = "";

while ($row = pg_fetch_array($query)) {
	$htmli .= "<li value=".$row["idprocedencia"]." onclick=\"mostrarProce('" . $row["espanol"] . "')\">" . $row["espanol"] ."</li>";
}

echo json_encode($htmli, JSON_UNESCAPED_UNICODE);