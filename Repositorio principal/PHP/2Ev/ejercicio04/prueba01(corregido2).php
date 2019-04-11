<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prueba01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    //Realiza una funcion que se le pase un nombre de fichero y devuelva la extension del fichero y la devuelva en mayúsculas
    function extensionfichero($fichero) {
        //$nombreExt = explode(".", $fichero);
        //return strtoupper($nombreExt[1]);
        $inicio = strrpos($fichero, ".") + 1;
        return strtoupper(substr($fichero, $inicio));
    }
    
    $nombreFichero = "fichero.txt";
    $ext = extensionfichero($nombreFichero);
    print "<p>La extensión del archivo $nombreFichero es $ext</p>";
?>
</body>
</html>