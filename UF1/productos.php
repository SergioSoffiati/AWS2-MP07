<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		td {
			text-align: center;
			padding: 10px;
			border-style: solid;
			border-color: black;
		}
	</style>
	<title>Listado de productos</title>
</head>
<body>
	<p><a href="producto_nuevo.html">Añadir producto</a></p>
	<p>
	<?php 
		$f = file("listadoproductos.txt");
		echo "<table>";
		echo "<tr><th>Producte</th><th>Descripcio</th><th>Preu</th></tr>";
		foreach ($f as $product) {
			$a = explode(" ; ", $product);
			echo 
				"<tr><td>$a[0]</td>
				 <td>$a[1]</td>
				 <td>$a[2]</td></tr>"
			;
		}	
 	?>
 	</p>
</body>
</html>
