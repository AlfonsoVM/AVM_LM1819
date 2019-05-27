<?php
$cientifico = trim(htmlspecialchars($_REQUEST["cientifico"], ENT_QUOTES, "UTF-8"));
$investigacion = trim(htmlspecialchars($_REQUEST["investigacion"], ENT_QUOTES, "UTF-8"));
$resultados = trim(htmlspecialchars($_REQUEST["resultados"], ENT_QUOTES, "UTF-8"));
$descripcion = trim(htmlspecialchars($_REQUEST["descripcion"], ENT_QUOTES, "UTF-8"));
$fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));

$conexion = mysqli_connect("localhost", "root", "", "ciencia")
    or die("Problemas en la conexion");

mysqli_query($conexion, "INSERT INTO ciencia(cientifico,investigacion,resultados,descripcion,fecha) 
    VALUES ('$cientifico','$investigacion','$resultados','$descripcion','$fecha')")
    or die("Problemas en el insert ".mysqli_error($conexion));

mysqli_close($conexion);
?>