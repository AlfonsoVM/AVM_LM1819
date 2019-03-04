<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<p>
    <?php
    if (isset($_COOKIE['nombreUsu'])) {
        echo "Hola $_COOKIE[nombreUsu]";
    } else {
        echo "Hola Anónimo";
    }
    ?>
    <p>
    <a href="segunda.php"> Ir a segunda </a>
    </p>
</p>
</body>
</html>