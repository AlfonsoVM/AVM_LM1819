<?php
$tabla = trim(htmlspecialchars($_REQUEST["tabla"], ENT_QUOTES, "UTF-8"));
$tabla = intval($tabla);

if ($tabla <1 || $tabla > 100 || !is_numeric($tabla)) {
    print "<p>No están permitidos los números menores que el 1 o mayores que el 100</p>";
}

else {
        print "<div>";
        print "<table style='border: 1px black solid'>";
        print "<tr><td>Tabla del $tabla</td></tr>";
        $multiplicador=0;
        while ($multiplicador < 10) {
            $resultado=0;
            $multiplicador=$multiplicador+1;
            $resultado=($multiplicador*$tabla);
            print "<tr><td>$tabla x $multiplicador = $resultado</td></tr>";
        }   
        print "</table>";
        print "</div>";
}
?>