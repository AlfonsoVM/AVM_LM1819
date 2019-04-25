<?php
    $autor = trim(htmlspecialchars($_REQUEST["autor"], ENT_QUOTES, "UTF-8"));
    $titulo = trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "UTF-8"));
    $categoria = trim(htmlspecialchars($_REQUEST["categoria"], ENT_QUOTES, "UTF-8"));
    $fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));
    $texto = trim(htmlspecialchars($_REQUEST["texto"], ENT_QUOTES, "UTF-8"));

    $conexion = mysqli_connect("db4free.net:3306", "adminies", "Adminies", "bddrss") 
        or die("Problemas en la conexión");
    /*$registros = mysqli_query($conexion, "SELECT * FROM alumnos WHERE mail='$mail'")
        or die("Problemas en la consulta".mysqli_error($conexion));
    if ($reg=mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "DELETE FROM alumnos WHERE mail='$mail'")
            or die("Problemas en la consulta".mysqli_error($conexion));
        print "<h3>Alumno Borrado</h3>";
    } else {
        header("Location: inicio.php?error='Email no encontrado'");
    }*/
    mysqli_close($conexion);
?>