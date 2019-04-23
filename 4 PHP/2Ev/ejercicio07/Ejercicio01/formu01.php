<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<p>
<?php
$email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

if (isset($_REQUEST['check'])) {
    setcookie ("emailuser", $email, time()+60*60*24*365);
} else {
    setcookie ("emailuser", $email, time()-1000);
}
?>
</p>
<p>
    <a href="formu00.php">Volver</a>
</p>
</body>
</html>