<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>
        <?php
            $user = trim(htmlspecialchars($_REQUEST["user"], ENT_QUOTES, "UTF-8"));
            $date = trim(htmlspecialchars($_REQUEST["date"], ENT_QUOTES, "UTF-8"));


            if (isset($_REQUEST['recordarf'])) {
                setcookie("namedate", $date, time()+60*60*24*365);
            } else {
                setcookie("namedate", $date, time()-1000);
            }

            echo "Hola $user";
            echo "Tu edad"
        ?>
    </p>
    <p><a href="UwU01.php">Volver</a></p>
    <p><a href="UwU00.php">Volver al inicio</a></p>
</body>
</html>