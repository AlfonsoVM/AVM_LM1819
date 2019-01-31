<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        echo "Hola";
        echo "<b>Hola</b> a todos";
        print "<p>Hola</p>\n";

        $saludo= "Holaaaa muy buenas";
        echo $saludo;
        echo "<b>$saludo</b>";
        echo "<br/>Mensaje: <b>" . $saludo . "</b>. Fin del Mensaje<br/>";
    ?>
    
    <?= $saludo ?>
    
    <?php
        $a = 8;
        $b = 2;
        $c = 2;
        echo $a + $b, "<br/>";
        $resultado = $a - $b;
        echo "$resultado<br/>";
        $a++;
        $a = $a +1;
        $a--;
        $a = $a -1;

        echo $a == $b, "<br/>";
        echo $a != $b, "<br/>";
        echo $a > $b, "<br/>";
        echo $a < $b, "<br/>";

        echo ($a == $b) && ($c > $b), "<br/>"; /* AND */
        echo ($a == $b) || ($c > $b), "<br/>"; /* OR */
    
        echo ($b <= $c), "<br/>";
        echo !($b <= $c), "<br/>"; /* Con la exclamación se niega */

        $perimetro = 2 * 3.14 * 15;
        print $perimetro;
        print 2 * $perimetro;

        $tabla = ["valor1", "valor2"];

        echo $tabla[0];
        echo $tabla[1];

        $tabla2 = [["msg1", "msg2"],["msg3","msg4"]];

        echo $tabla2[1][1];
        
        $correcto = true;
        if ($correcto == true) {
            print "<p>Es correcto</p>";
        }

        $correcto2 = true;
        if ($correcto2) {
            print "<p>Es correcto</p>";
        }

        $correcto3 = false;
        if (!$correcto3) {
            print "<p>Es correcto</p>";
        }

        $texto = "Este texto";
        $texto[0] = "e";
        echo $texto;

        $texto[25] = "F";
        echo $texto;

        $tabla3 = ["Hola, 2019"];
        print $tabla3[0] . " - " . $tabla3[1];

        // Añadir un valor a la tabla
        $tabla3[] = "Fin";
        print $tabla3[2];

        // Borrar un valor
        //unset($tabla3[2]);
        //print $tabla3[2]; --> Da error

        //unset($tabla3;);
        //print $tabla3[0]; --> Da error

        echo count($tabla3);

        $numeros = [15, 10, 5, 15, 11, 15];
        print_r($numeros);
        echo max($numeros);
        echo min($numeros);
        
        //sort ($numeros);
        
        print_r($numeros);

        if (in_array(15, $numeros)) {
            print "Está el 15";
        } else {
            print "El 15 no está";
        }

        echo array_search(15, $numeros);

        $encontrados = array_keys($numeros, 15);
        print_r($encontrados);

        print "<br/>";

        shuffle($numeros);
        print_r($numeros);

        echo array_rand($numeros);

        print "<br/>";
        print "<br/>";

        echo $numeros[array_rand($numeros)];

        print "<br/>";

        define("PI", 3.14);
        print "<p>El valor de PI es " . PI . "</p>"; //Los valores suelen ponerse en mayúscula. En minúscula pueden cambiar de valor, mientras que en mayúscula no deberían cambiar de valor.

        print "<pre>";
        print_r(get_defined_constants());
        print "</pre>";

        

    ?>
</body>
</html>