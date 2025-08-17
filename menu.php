<doctype html>
	<html>

	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

	<body>
		<?php

function calcular_letra($dni)
{
    //Lista de letras posibles
    $letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E", "T"];
    //Esto calcula el resto de dividir el número del DNI entre 23
    $posicion = $dni % 23;
    //Busca la letra que corresponde a ese resto
    echo("Tu letra del DNI es: " . $letras[$posicion]);
    echo"<p></p>";
}

		// isset(...) es como preguntarle a PHP: ¿Alquien te ha enviado algo sobre 'eleccion'? si es afirmativo sigue, si es negativo no hace nada.
		if (isset($_GET['eleccion'])) {
		    //Como es afirmativo guarda en una variable eleccion es una caja llamada eleccion.
		    //Con el get vamos a recoger del otro documento la 'eleccion'

		    $eleccion = $_GET['eleccion'];

		    switch ($eleccion) {
		        case '1':
		            ?>
                    <!--Muestra un titulo-->
                    
                    <h2> Comprobar usuario </h2>
                <!--Muestra un formulario con un campo para escribir el nombre del usuario y un boton para enviarlo llamado comprobar-->
                <!--Este formulario no va a ninguna página, se queda en la misma por eso esta en un case-->
                    <form method="post">
                        Nombre de usuario: <input type="text" name= "usuario">
                        <input type ="submit" value= "Comprobar">
                    </form>

                    <!--Abrimos de nuevo PHP-->
                    <?php
		                         //Esto es como preguntar, ya escribieron algo en la cajita? isset pregunta si existe algo ahí
		                        if (isset($_POST['usuario'])) {
		                            //Con esto miramos dentro de la cajita del formulario y vemos si hay un nombre
		                            //Aquí se guarda lo que la persona escribió en una variable usuario, para poder usarlo después
		                            $usuario = $_POST['usuario'];
		                            //Aquí se ha creado una lista de nombres válidos
		                            $usuarios = ['juan', 'ana','ramon', 'pedro'];

		                            //in_array es para ver si el nombre está dentro de la lista.

		                            if (in_array($usuario, $usuarios)) {
		                                //Si está aparece este mensaje
		                                echo "<p style= 'color : green;'> El usuario '$usuario' Sí existe. </p>";
		                            } else {
		                                //Si no está aparece este otro.
		                                echo "<p style= 'color:red;'> El usurio '$usuario' No existe. </p>";
		                            }
		                        }

		            echo "<a href= 'Practica Final.php'>Ir al menú principal</a><br/>";

		            break;
		        case "2":
		            //Creamos un nuevo hipervinculo para volver a la página principal

		            echo "<a href= 'Practica Final.php'>Ir al menú principal</a><br/>";
		            break;

		            //Hacemos ver un fichero predeterminado
		        case "3":
		            echo "Se está ejecutando el siguiente fichero " . $_SERVER['PHP_SELF'] . "<br><br>";
		            echo "<a href= 'Practica Final.php'>Ir al menú principal</a><br>";
		            break;

		            //Vamos a recorrer un array

		        case "4":
		            $frutas = array("Melón","Sandia","Pera","Manzana","Pomelo","Plátano");

		            //Contar el número de elementos que tiene el array de frutas

		            $totalFrutas = count($frutas);
		            //Muestra el array de frutas completo siempre que i sea menor que el numero de elementos, va a mostrar cada elemento
		            echo "Frutas completas: <br>";
		            $i = 0;
		            while ($i < $totalFrutas) {
		                echo $frutas[$i] ."<br>";
		                $i++;
		            }
		            echo "<a href= 'Practica Final.php'>Ir al menú principal</a><br>";
		            break;
		        case "5": //array multidimensional, tengo arrays y dentro defino más arrays, tendría filas y columnas

		            $monedaPais = array(
		                array('pais' => 'España', 'moneda' => 'Euro'),
		                array('pais' => 'Reino Unido', 'moneda' => 'Libra'),
		                array('pais' => 'EEUU', 'moneda' => 'Dolar'),
		                array('pais' => 'Francia', 'moneda' => 'Euro')
		            );

		            sort($monedaPais); //Ordenamos el array

		            foreach ($monedaPais as $elemento) { //Recorremos el array asociativo bidimensional
		                if ($elemento ['moneda'] != "Dolar") { //Le decimos que si la moneda no es el dolar que nos lo muestre
		                    var_dump($elemento);
		                    echo "<br>";
		                }

		            }
		            echo "<a href= 'Practica Final.php'>Ir al menú principal</a><br>";

		            break;

		        case "6": //Calcular la letra del DNI

		            calcular_letra(28839454);

		            echo "<br>";

		            echo "<a href= 'Practica Final.php'>Ir al menú principal</a><br>";
		            break;

		        case "7":

		            echo date("Y");
		            echo "<br>";
		            echo "<br>";

		            echo "<a href= 'Practica Final.php'>Ir al menú principal</a><br>";
		            break;




		    }
		}





		?>

	</body>

    </html>