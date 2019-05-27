<?php
header('Content-type: text/xml; charset="iso-8859-1"', true);
echo '<?xml version="1.0" encoding="iso-8859-1"?>';

$conexion = mysqli_connect("localhost", "root", "", "hormigas")
    or die("Problemas en la conexion");

$registros = mysqli_query($conexion, "SELECT * FROM hormigas ORDER BY fecha DESC'")
    or die("Problemas en la consulta ".mysqli_error($conexion));

echo '<rss version="2.0.1">';
echo '<channel>';
echo '<title>Hormigas</title>';
echo '<language>es</language>';
echo '<description>Noticias de hormigas</description>';

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