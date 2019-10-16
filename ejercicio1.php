<!DOCTYPE html>
<html>
    <head>
    	<title>Bloque2 PHP / Ejercicio 1</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Escribe el código necesario para que se creen dos arrays: en el primero se almacenan los 10 primeros números naturales (empezando por el 0). En el segundo se almacena el valor del factorial del número incluido en la misma posición del primer array.</p>

    	<?php
            
            $numeros = array();
            $factoriales = array();
            //Recorremos los numeros del 1 al 10 y vamos calculando los factoriales en base al factorial del anterior.
            for ($i = 1; $i <= 10; $i++) {
                $numeros[$i]=$i;
                if ($i==1)
                    $factoriales[$i]=1;
                else
                    $factoriales[$i]=$factoriales[$i-1]*$i;
            }
            //Mostramos los factoriales
            for ($i=1;$i<=10;$i++) {
                echo "El factorial de $numeros[$i] es $factoriales[$i]<br>";
            }
    	?>
    </body>
</html>