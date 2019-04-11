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

//Esto es mejor que un <a href></a>

    $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
    if (!empty($referer)) {
        echo "<p align='center'><a href='$referer'>Volver</a></p>";
    } else {
        echo "<p><a href='javascript:history.go(-1)'>Volver</a></p>";
    }

    $user = trim(htmlspecialchars($_REQUEST["user"], ENT_QUOTES, "UTF-8"));
    $pass = trim(htmlspecialchars($_REQUEST["pass"], ENT_QUOTES, "UTF-8"));
    $cpass = trim(htmlspecialchars($_REQUEST["cpass"], ENT_QUOTES, "UTF-8"));
    
    session_start();
    $_SESSION['sessionuser'] = $user;
    
    if (isset($_REQUEST['recordar'])) {
        setcookie("nameuser", $user, time()+60*60*24*365);
    } else {
        setcookie("nameuser", $user, time()-1000);
    }

    if ($pass == $cpass && !empty($pass) && !empty($cpass && $pass =="1234")) {
        setcookie("contraseña", '1',time()-3600);
        print 
        "<form method='POST'action='UwU02.php'>
        <div align='center'>    
            <table>
                <tr>
                    <td><p>
                        <label for='fecha'>Fecha de nacimiento: </label>
                        <input type='date' name='fecha' id='fecha'>
                    </p></td>
                </tr>
                <!--<tr>
                    <td><p>
                        <label for='recordarf'>¿Recordar Fecha?</label>
                        <input type='checkbox' name='recordarf' id='recordarf' value='1'/>
                    </p></td>
                </tr>
                -->
                <tr>
                    <td><p>
                        <input type='submit' value='Enviar'/>
                    </p></td>
                </tr>
            </table>
        </div>
        </form>
        <p align='center'><a href='UwU00.php'>Volver al inicio</a></p>";
    }
    else {
        setcookie("contraseña", '1',time()+2000);
        /*header('Location: UwU00.php');*/
        header('Location: UwU00.php?error=Error en la contraseña.');
    }
    ?>
</body>
</html>