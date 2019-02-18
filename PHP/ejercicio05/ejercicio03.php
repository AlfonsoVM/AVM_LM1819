<?php
$segundos = trim(htmlspecialchars($_REQUEST["segundos"], ENT_QUOTES, "UTF-8"));
$minutos = intdiv($segundos, 60);
$msegundos = $segundos%60;

if (!is_numeric($segundos)) {
    print "Escriba un número.";
}

elseif ($segundos < 0) {
    print "Escriba un número mayor que el 0.";
}

elseif ($segundos < 60) {
    print "El número de segundos es $segundos.";
}

else {
    print "En $segundos segundos hay $minutos minutos y $msegundos segundos.";
}
?>