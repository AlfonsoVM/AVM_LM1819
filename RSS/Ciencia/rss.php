<?php
header('Content-type: text/xml; charset="iso-8859-1"', true);
echo '<?xml version="1.0" encoding="iso-8859-1"?>';

$conexion = mysqli_connect("localhost", "root", "", "ciencia")
    or die("Problemas en la conexion");

$registros = mysqli_query($conexion, "SELECT * FROM ciencia ORDER BY fecha DESC'")
    or die("Problemas en la consulta ".mysqli_error($conexion));

echo '<rss version="2.0.1">';
echo '<channel>';
echo '<title>Ciencia</title>';
echo '<language>es</language>';
echo '<description>Noticias científicas</description>';

while ($reg = mysqli_fetch_array($registros)) {
    echo '<item>';
        echo '<title>'.$reg[titulo].'</title>';
        echo '<link>'.'</link>';
        echo '<pubDate>'.$reg[fecha].'</pubDate>';
        echo '<category>'.$reg[categoria].'</category>';
        echo '<description>'.$reg[noticia].'</description>';
    echo '</item>';
}

echo '</channel>';
echo '</rss>';

mysqli_close($conexion);
?>