<doctype html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>Practica Final</title>
	</head>

	<body>
		<?php

        //Abrimos los vinculos a href donde hipervinculos, en el menu vamos a poder seleccionar un punto al que queremos dirigirnos
//.php y le nombre hacia donde nos dirige la url.

        echo(
            "<a href='menu.php?eleccion=1'>1. Comprobar usuario </a> <br/> 
		<a href='menu.php?eleccion=2'>2. Mostrar menu de nuevo<a/> <br/> 
		<a href= 'menu.php?eleccion=3'>3. Mostrar fichero<a/> <br/> 
		<a href= 'menu.php?eleccion=4'>4. Recorrer array<a/> <br/>
		<a href= 'menu.php?eleccion=5'>5. Monedas y países ordenados<a/> <br/>
		<a href= 'menu.php?eleccion=6'>6. Calcular letra DNi<a/> <br/> 
		<a href= 'menu.php?eleccion=7'>7. Mostrar año<a/><br/>");
		echo "<p></p>";


		?>

	</body>

	</html>