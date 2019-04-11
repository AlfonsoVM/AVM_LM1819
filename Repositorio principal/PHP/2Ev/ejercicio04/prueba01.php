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
    function extensionfichero($archivo) {
        echo "$extension = ";
        echo "<p>La extensión del archivo $archivo es: </p>";
        echo "<p style=text-transform: uppercase;>$extension</p>";
    }
    
    extensionfichero("basededatos.sql")
?>
</body>
</html>