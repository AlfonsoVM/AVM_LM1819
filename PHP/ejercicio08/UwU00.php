<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="UwU01.php">
        <table>
            <tr>
                <td><p><label for="user">User: </label></p></td>
                <td>
                    <input type="text" name="user" id="user" 
                    value="
                    <?php
                        if (isset($_COOKIE['nameuser'])) {
                            echo $_COOKIE['nameuser'];
                        }
                    ?>
                    "/>
                </td>
            </tr>
            <tr>
                <td><p><label for="pass">Password: </label></p></td>
                <td><p><input type="password" name="pass" id="pass"/></p></td>
            <tr>
                <td><p><label for="pass">Confirmar password: </label></p></td>
                <td><p><input type="password" name="cpass" id="cpass"/></p></td>
                <td><p>
                    <?php
                        if (isset($_COOKIE['contraseña'])) {
                            echo "<p style='color: red'>Las contraseñas son diferentes</p>";
                        }
                    ?>
                </p></td>
            </tr>   
            <tr>
                <td><p><label for="recordar">¿Recordar User? </label></p></td>
                <td><p><input type="checkbox" name="recordar" id="recordar" value="1"/></p></td>
            </tr>
            <tr>
                <td><p><input type="submit" value="Enviar"/></p></td>
            </tr>
        </table>
        <?php
            setcookie ("contraseña", '', time() - 3600);
        ?>
    </form>
</body>
</html>