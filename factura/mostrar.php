<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mostrar Facturas</title>
</head>
<?php 
	include_once ("FacturaCollector.php");
	$facturaCollector = new FacturaCollector();
?>
<body>
	<table>
	<tr>
		<td>
			<a href="formularioInsertarFactura.php">Nueva factura</a>
		</td>
	</tr>
		<tr>
			<th>ID</th>
			<th>Descripcion</th>
			<th>Total</th>
		</tr>
		<?php foreach ($facturaCollector->readFacturas() as $f) {
			
			echo "<tr>";
			echo "<td>".$f->getidFactura()."</td>";
			echo "<td>".$f->getdescripcion()."</td>";
			echo "<td>".$f->gettotal()."</td>";
			echo "</tr>";

		} ?>
	</table>


	
</body>
</html>