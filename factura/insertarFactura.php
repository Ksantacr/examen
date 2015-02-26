<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>InsertarFactura</title>
</head>
<body>

	<?php 
	$descripcion = $_POST["descripcion"];
	$total = $_POST["total"];

	include_once("FacturaCollector.php");

	$facturaCollector = new FacturaCollector();
	$facturaCollector->createFactura($descripcion,$total);

	echo "<b>Factura agregada</b>";
	 ?>

	 <div><a href="mostrar.php">Regresar</a></div>
	
</body>
</html>