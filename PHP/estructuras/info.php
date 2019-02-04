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
    for ($i=0; $i <= 6; $i=$i+2) { 
        print "<p>$i</p>";
    }

    for ($i=6; $i >= 0; $i--) { 
        if ($i % 2 ==0) {
            print "<p>$i</p>";
        }
        else {
            echo "";
        }
    }

    $impar=0;
    for ($i=6; $i >= 0; $i--) { 
        if ($i % 2 ==0) {
            print "<p>$i</p>";
        }
        else {
            $impar++;
        }
    }
    echo "Hay $impar impares entre 6 y 0";
    print "<p></p>";

    /*Dados dos numeros $filas=3 y $columnas=4 hacer un bucle que cree una tabla de esas dimensiones de 3 filas por 4 columnas */    
    
    echo "<table style='border: 2px solid black'>";
    for ($filas=3; $filas > 0; $filas--) {    
        echo "<tr>";
        for ($columnas=4; $columnas > 0; $columnas--) {
        echo "<td style=''>$columnas</td>";
        }
        echo "</tr>";
        }
    echo "</table>";

    print "<p></p>";
    print "<p></p>";

    /* Muestre por pantalla del 1 al 10 la conversion en pesetas */
    $resultado=0;
    define("peseta", "166.386");
    for ($euro=1; $euro >= 10; $euro++) { 
        $resultado=($euro*$peseta);
        print "$euro euros son $peseta pesetas.";
    }

    /* decir buenos dias/tardes/noches segun la hora */

    $hora = date("H");
    echo $hora;
    print "<p></p>";
    if ($hora <= 6) {
        echo "Buenos días";
    }
        else if ($hora <= 19) {
        echo "Buenas tardes";
    }
        else {
        echo "Buenas noches";
    }

    //genera un valor entre el 1 y el 100 he indica que cantidad de digitos tiene
    print "<p></p>";
    print "<p></p>";
    print "<p></p>";

    

    //De tres numeros di si alguno es suma de otros dos
    $n1 = rand(1, 20);
    $n2 = rand(1, 20);
    $n3 = rand(1, 20);
    print "<p></p>";
    echo $n1;
    print "<p></p>";
    echo $n2;
    print "<p></p>";
    echo $n3;
    if ($n1+$n2 == $n3) {
        echo "$n1 + $n2 = $n3";
    }
    else if ($n1+$n3 == $n2) {
        echo "$n1 + $n3 = $n2";
    }
    else if ($n2+$n3 == $n1) {
        echo "$n2 + $n3 = $n1";
    }
    else if ($n1+$n3 == $n2) {
        echo "$n1 + $n3 = $n2";
    }
    ?>
</body>
</html>