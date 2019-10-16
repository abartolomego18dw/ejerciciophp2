<!DOCTYPE html>
<html>
    <head>
    	<title>Bloque2 PHP / Ejercicio 2</title>
        <meta charset="utf-8">
    </head>
    <body>
    <p>Crea una función que reciba como parámetros dos números y cree una tabla HTML que tforenga tantas filas como indique el primer número y tantas columnas como indique el segundo parámetro.</p>
    	<?php
            $altura = 5;
            $ancho = 6;

            echo "<table border=1>";
            for($i=0;$i<$altura;$i++){
                echo "<tr>";
                for($j=0;$j<$ancho;$j++)
                    echo "<td>ancho$j altura$i</td>";
                echo "</tr>";
            }
            echo "</table>";
    	?>
    </body>
</html>