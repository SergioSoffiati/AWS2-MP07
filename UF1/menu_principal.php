<!DOCTYPE html>
<html>
<head>
	<title>Menú Principal</title>
</head>
<body>
	<p><a href="productos.php">Listado de productos</a></p>
	<p><a href="producto_nuevo.html">Añadir producto</a></p>
	<p>
		<?php 
			$fichero = fopen("listadoproductos.txt", "a");
			fwrite($fichero, "\r\n");
			fwrite($fichero, htmlspecialchars($_POST["producto"]));
			fwrite($fichero, ";");
			fwrite($fichero, htmlspecialchars($_POST["descripcion"]));
			fwrite($fichero, ";");
			fwrite($fichero, htmlspecialchars($_POST["precio"]));
	 	?>
 	</p>
</body>
</html>
