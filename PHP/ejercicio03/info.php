<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    for ($multiplicando=1; $multiplicando <= 10; $multiplicando++) {
        echo "<div>";
        echo "<table>";
        echo "<tr><td>Tabla del $multiplicando</td></tr>";
        $multiplicador=1;
        while ($multiplicador < 10) {
            $resultado=0;
            $multiplicador=$multiplicador+1;
            $resultado=($multiplicador*$multiplicando);
            echo "<tr><td>$multiplicando x $multiplicador = $resultado</td></tr>";
        }   
        echo "</table>";
        echo "</div>";
    }
    ?>
</body>
</html>