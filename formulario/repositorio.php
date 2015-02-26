<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$nombre=$_POST["nombre"];
	$ruc=$_POST["ruc"];
	$cantidad=$_POST["cantidad"];
	$precio=2;
	 ?>

	Nombre <p> <?php echo $nombre; ?></p>
	Ruc <p> <?php echo $ruc; ?></p>
	Cantidad <p> <?php echo $cantidad; ?></p>
	Iva <p> 0.12</p>
	Total <p> <?php echo ($cantidad*$precio); ?></p>
	
</body>
</html>