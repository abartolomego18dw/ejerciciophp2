<!DOCTYPE html>
<html>
    <head>
    	<title>Bloque2 PHP / Ejercicio 4</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Crea una función que comprueba la existencia de un archivo config.php. Debes lanzar una excepción en caso de que no exista.
    <br>
        </p>
        <?php
            $nombre_fichero = './config.php';
            function fichero($nombre_fichero){
                if (file_exists($nombre_fichero)) {
                    echo "El fichero $nombre_fichero existe";
                } else {
                    echo "El fichero $nombre_fichero no existe";
                }
            return $nombre_fichero;
            }
        ?>
    </body>
</html>