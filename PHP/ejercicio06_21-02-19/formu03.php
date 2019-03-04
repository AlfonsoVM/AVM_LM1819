<?php
$temp = trim(htmlspecialchars($_REQUEST["temp"], ENT_QUOTES, "UTF-8"));
$tipo = trim(htmlspecialchars($_REQUEST["tipo"], ENT_QUOTES, "UTF-8"));



if ($temp == "") {
    print "<p>Temperatura vacía</p>";
}

elseif (!is_numeric($temp)) {
    print "<p>No introdujo un número</p>";
}

elseif ($tipo == 0 && $temp < -273.15) {
    print "<p>La temperatura es incorrecta</p>";
}

elseif ($tipo == 1 && $temp < -459.67) {
    print "<p>La temperatura es incorrecta</p>";
}

else {
    if ($tipo == 0) {
        $resultado = round(($temp *1.8) + 32, 2);
        print "<p>La temperatura en Farenheit es igual a $resultado";
    }
    
    else {
        $resultado = round(($temp -32) / 1.8, 2);
        print "<p>La temperatura en Celsius es igual a $resultado";
    }
}

?>