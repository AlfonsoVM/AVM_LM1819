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
    <div class="container">
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "cursophp")
                or die("Problemas con la conexión");

            $registros = mysqli_query($conexion, 
            "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso 
            from alumnos as alu inner join cursos as cur on alu.codigocurso = cur.idCurso") or die("Problemas en la consulta:" .mysqli_error($conexion));


echo "<table class='table table-striped'>";
echo "<tr>";
            while ($reg = mysqli_fetch_array($registros)) {
                echo "<tr>";
                    echo "Código: " . $reg['idAlumno'] . "</br>";
                    echo "Nombre: " . $reg['nombre'] . "</br>";
                    echo "Email: " . $reg['mail'] . "</br>";
                    echo "Curso: " . $reg['nombreCurso'] . "</br>";
            }
            
            mysqli_close($conexion);
        ?>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>