<?php
$edad = $_REQUEST["edad"];

$email = $_REQUEST["email"];

if (is_numeric($edad)) {
        print "Su edad es $edad";
        print "</br>";
    }
else {
    print "Ha introducido la edad erroneamente";
    print "</br>";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Email correcto";
    print "</br>";
}

else {
    print "Email incorrecto";
    print "</br>";
}
?>