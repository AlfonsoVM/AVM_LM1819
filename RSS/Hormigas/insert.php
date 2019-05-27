<?php
$tipo = trim(htmlspecialchars($_REQUEST["tipo"], ENT_QUOTES, "UTF-8"));
$nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
$color = trim(htmlspecialchars($_REQUEST["color"], ENT_QUOTES, "UTF-8"));
$descripcion = trim(htmlspecialchars($_REQUEST["descripcion"], ENT_QUOTES, "UTF-8"));
$fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));

$conexion = mysqli_connect("localhost", "root", "", "hormigas")
    or die("Problemas en la conexion");

mysqli_query($conexion, "INSERT INTO hormigas(tipo,nombre,color,descripcion, fecha) 
    VALUES ('$tipo','$nombre','$color','$descripcion','$fecha')")
    or die("Problemas en el insert ".mysqli_error($conexion));

mysqli_close($conexion);
?>