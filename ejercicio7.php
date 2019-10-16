<!DOCTYPE html>
<html>
    <head>
    	<title>Bloque2 PHP / Ejercicio 4</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Escribe una función para calcular potencias. Recibe como argumentos la base y el exponente, que es opcional y tiene por defecto 2 (elevar al cuadrado).
            <br>
        </p>
        <?php
            function potencia($base, $exponente=2){
                $res =1;
                for($i=0;$i<$exponente;$i++){
                    $res = ($res*$base);
              }
              return $res;
          }
        echo potencia(10);
        ?>
    </body>
</html>