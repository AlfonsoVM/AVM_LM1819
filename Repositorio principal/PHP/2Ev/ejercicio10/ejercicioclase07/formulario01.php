<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hello, world!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        $mail = trim(htmlspecialchars($_REQUEST["useremail"], ENT_QUOTES, "UTF-8"));

        $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas de conexión");

        $registros = mysqli_query($conexion, 
            "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso 
            from alumnos as alu inner join cursos as cur on alu.codigocurso = cur.idCurso where mail like '$mail'") or die("Problemas en la consulta:" .mysqli_error($conexion));

            if ($reg = mysqli_fetch_array($registros)) {
                    echo "Código: " . $reg['idAlumno'] . "</br>";
                    echo "Nombre: " . $reg['nombre'] . "</br>";
                    echo "Email: " . $reg['mail'] . "</br>";
                    echo "Curso: " . $reg['nombreCurso'] . "</br>";
            } else {
            echo "Su email no existe en la base de datos.";
        }
        mysqli_close($conexion);
    ?>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>