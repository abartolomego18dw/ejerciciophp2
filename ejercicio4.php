<!DOCTYPE html>
<html>
    <head>
    	<title>Bloque2 PHP / Ejercicio 4</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dado un string formado por 5 palabras cualesquiera (por ejemplo $str = "manzana pera limón sandía melón"), transformala en un array asociativo que tenga como índice la palabra y como valor la longitud de la misma.
            <br>
        </p>
        <?php
          $string_frutas = "manzana pera limón sandía melón";
          $frutas = explode(' ', $string_frutas);
          //Creamos un array con las palabras y su longitud
          for ($i = 0; $i < count($frutas); $i++)
                $array_frutas[$frutas[$i]] = strlen($frutas[$i]);//strlen cuenta la longitud de un string
          //Mostramos el array
          foreach ($array_frutas as $fruta => $longitud)
            echo "Fruta: $fruta  -  Longitud: $longitud<br>";
        ?>
    </body>
</html>