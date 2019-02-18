<?php

$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

$email2 = trim(htmlspecialchars($_REQUEST["email2"], ENT_QUOTES, "UTF-8")); 

$noticia = trim(htmlspecialchars($_REQUEST["noticia"], ENT_QUOTES, "UTF-8"));

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Email correcto.";
    print "</br>";
}

else {
    print "Email incorrecto.";
    print "</br>";
}

if ($email == $email2) {
    print "Ambos emails son identicos.";
    print "</br>";
}

else {
    print "Ambos emails son diferentes.";
    print "</br>";
}

if ($noticia == 0) {
    print "No ha respondido a la pregunta.";
    print "</br>";
}

elseif ($noticia == 1) {
    print "Se le enviaran noticias a partir de este momento a su correo electrónico";
    print "</br>";
}

else {
    print "No se le enviaran noticias a su correo";
    print "</br>";
}
?>