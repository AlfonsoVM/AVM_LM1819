<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>color01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<p>
<?php
if (isset($_REQUEST['color']) == 'azul') {
    setcookie ("colorB", $color, time()+60*60*24*365);
} elseif (isset($_REQUEST['color']) == 'rojo') {
    setcookie ("colorR", $color, time()+60*60*24*365);
} else {
    setcookie ("colorG", $color, time()+60*60*24*365);
}
header('Location: formu00.php');
?>
</body>
</html>