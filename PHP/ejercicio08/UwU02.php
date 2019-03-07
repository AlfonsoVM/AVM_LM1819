<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div align='center'>
        <?php
            $date = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));

            if (isset($_REQUEST['recordarf'])) {
                setcookie("namedate", $date, time()+60*60*24*365);
            } else {
                setcookie("namedate", $date, time()-1000);
            }

            print "<table>";
            print "<tr><td>";
            session_start();
            print "Hola " . $_SESSION['sessionuser'];
            print "</td></tr>";
            print "<tr><td>Fecha de Nacimiento: $_REQUEST[fecha]</td></tr>";
            print "<tr><td>Fecha Actual: " . date('Y-m-d') . "</td></tr>";

            list($year, $month, $day) = explode("-", $_REQUEST['fecha']);
            $year_diff = date ("Y") - $year;
            $month_diff = date ("m") - $month;
            $day_diff = date ("d") - $day;
            if ($month_diff < 0 || ($day_diff < 0 && $month_diff = 0)) {
                $year_diff--;
            }

            print "<tr><td>Tu edad es: $year_diff</td></tr>";
            print "</table>";
        ?>
    </div>
    <br/><br/><br/><br/><br/>
    <p align='center'><a href="UwU01.php">Volver</a></p>
    <p align='center'><a href="UwU00.php">Volver al inicio</a></p>
</body>
</html>