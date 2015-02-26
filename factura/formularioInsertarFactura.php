<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FormularioInsertarFactura</title>
</head>
<body>
	
	<form action="insertarFactura.php" method="post">
		
		<p>Descripcion: 
			<input type="text" name="descripcion" autofocus required/>

		</p>
		<p>
			Total:
			<input type="text" name="total" required/>
		</p>
		<input type="submit" value="Guardar" />

	</form>

</body>
</html>