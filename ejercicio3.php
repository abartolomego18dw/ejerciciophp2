<!DOCTYPE html>
<html>
    <head>
    	<title>Bloque2 PHP / Ejercicio 2</title>
        <meta charset="utf-8">
    </head>
    <body>
    <p>Crea un array de 20 números aleatorios, ordénalos de menor a mayor e indica: <br>
        - el menor de los números en color azul <br>
        - el mayor de los números en color verde <br>
        - la suma y la media (número con dos decimales) de todos los números. <br>
        </p>    	
        <?php
            for($i=1;$i<=20;$i++){
                $array[$i]=rand(1,100);
                
            }
            sort($array);

            foreach($array as $arr)
                echo "$arr<br>";
    	?>

        <p style="color:blue">El numero menor es: <?php echo $array[0]?></p>
        <p style="color:green">El numero mayor es: <?php echo end($array)?></p>
        <p>La suma es: <?php echo array_sum($array);?></p>
        <p>La suma es: <?php echo array_sum($array)/count($array);?></p>
    </body>
</html>