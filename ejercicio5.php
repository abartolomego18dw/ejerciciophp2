<!DOCTYPE html>
<html>
    <head>
    	<title>Bloque2 PHP / Ejercicio 4</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>
          Crea un un array con los meses del año y para cada mes el número de días que tendrá éste año.
    <br>
        </p>
        <?php
          $year = rand (1900,2100); 
          $months = array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
          //Creamos un array con los meses del año y sus dias
          for ($i = 0; $i < count($months); $i++)
                $array_months[$months[$i]] = cal_days_in_month(CAL_GREGORIAN, $i+1, $year);
          //Mostramos el array
          foreach ($array_months as $month => $days)
            echo "Año: $year - Mes: $month  -  Dias: $days<br>";
        ?>
    </body>
</html>