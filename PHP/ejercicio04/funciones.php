<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Funciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        function calculaHipotenusa($cateto1, $cateto2) {
            $hipo = sqrt($cateto1*$cateto1 + $cateto2*$cateto2);
            return $hipo;
        }
        
        function imprimir() {
            print "Hola";
        }

        function imprimir2($mensaje) {
            print "<p>$mensaje</p>";
        }

        $cat1 = 12;
        $cat2 =16;
        $hipotenusa = calculahipotenusa($cat1, $cat2);
        print "<p>El triángulo de lados $cat1, $cat2 y hipotenysa $hipotenusa</p>";
    
        imprimir();
        imprimir2("Hola2");
    ?>
</body>
</html>