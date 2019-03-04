<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio01 Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="formu01.php">
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="
            <?php
                if (isset($_COOKIE['emailuser'])) {
                    echo $_COOKIE['emailuser'];
                }
            ?>">
        </p>
        <p>
            <label for="pass">Password</label>
            <input type="Password" name="pass" id="pass"/>
        </p>
        <p>
            <label for="check">Rememeber Email?</label>
            <input type="checkbox" id="check"/>
        </p>
        <p>
            <label for="login">Login</label>
            <input type="submit" id="login" value="login"/>
        </p>
    </form>
</body>
</html>