<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    if (isset($_REQUEST['posicion'])) {
        $inicio = $_REQUEST['posicion'];
    } else {
        $inicio = 0;
    }

        $conexion = mysqli_connect("localhost", "root", "", "cursophp")
            or die("Problemas de conexión");

        $registros = mysqli_query($conexion, 
            "SELECT nombre, mail, codigocurso, nombreCurso
            FROM alumnos as alum INNER JOIN cursos as cur 
            ON alum.codigocurso = cur.idCurso LIMIT $inicio,2")
                or die("Problemas en el select".mysqli_error($conexion));

        $contador = 0;

        while($reg = mysqli_fetch_array($registros)) {
            echo "Nombre: ".$reg['nombre'] . " - Mail: " .
                            $reg['mail'] . " - Curso: " .
                            $reg['nombreCurso'] . "<br>";
                            $contador++;
        }
        
        echo "<br><br><br>";
        
        if ($inicio == 0) {
            echo "Anteriores --- ";
        } else {
            $anterior = $inicio - 2;
            echo "<a href='paginacion.php?posicion=$anterior'>Anteriores</a>";
            echo " --- ";
        }

        if (($contador + $inicio) < mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM  alumnos"))) {
            $siguiente = $inicio + 2;
            echo "<a href='paginacion.php?posicion=$siguiente'>Siguientes</a>";
            
        } else {
            echo "Siguientes";
        }

        mysqli_close($conexion);
    ?>
</body>
</html>