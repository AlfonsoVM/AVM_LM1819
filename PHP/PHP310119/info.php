<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $numerorand = $numeros[array_rand($numeros)];
        echo "El valor aleatorio es: $numerorand";
        
        if ($numerorand < 5) {
            echo "<p style=color:red>El valor $numerorand es menor que 5</p>";
        }
        else if ($numerorand == 5) {
            echo "<p style=color:green>El valor es 5</p>";
        }
        else {
            echo "<p style=color:blue>El valor $numerorand es mayor que 5</p>";
        }
    ?>
</body>
</html>