<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fecha de Nacimiento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $user = trim(htmlspecialchars($_REQUEST["user"], ENT_QUOTES, "UTF-8"));
    $pass = trim(htmlspecialchars($_REQUEST["pass"], ENT_QUOTES, "UTF-8"));
    $cpass = trim(htmlspecialchars($_REQUEST["cpass"], ENT_QUOTES, "UTF-8"));

    if (isset($_REQUEST['recordar'])) {
        setcookie("nameuser", $user, time()+60*60*24*365);
    } else {
        setcookie("nameuser", $user, time()-1000);
    }

    if ($pass == $cpass) {
        setcookie("contraseña", '1',time()-3600);
        print 
        "<form action='UwU02.php'>
            <table>
                <tr>
                    <td><p>
                        <input type='date' name='fecha' id='fecha'>
                    </p></td>
                </tr>
                <!--<tr>
                    <td><p>
                        <label for='recordarf'>¿Recordar Fecha?</label>
                        <input type='checkbox' name='recordarf' id='recordarf' value='1'/>
                    </p></td>
                </tr>-->
                <tr>
                    <td><p>
                        <input type='submit' value='Enviar'/>
                    </p></td>
                </tr>
            </table>
        </form>
        <p><a href='UwU00.php'>Volver al inicio</a></p>";
    }
    else {
        setcookie("contraseña", '1',time()+2000);
        header('Location: UwU00.php');
    }
    ?>
</body>
</html>