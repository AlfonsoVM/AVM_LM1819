<?php
header('Content-type: text/xml; charset?"iso-8859-1"', true);
echo '<?xml version="1.0" enconding="iso-8859-1"?>';

    $autor = trim(htmlspecialchars($_REQUEST["autor"], ENT_QUOTES, "UTF-8"));
    $titulo = trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "UTF-8"));
    $categoria = trim(htmlspecialchars($_REQUEST["categoria"], ENT_QUOTES, "UTF-8"));
    $fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));
    $noticia = trim(htmlspecialchars($_REQUEST["noticia"], ENT_QUOTES, "UTF-8"));

    $conexion = mysqli_connect("localhost", "id9406790_adminies", "adminies", "Adminies", "id9406790_bddrss") 
        or die("Problemas en la conexión");

    $registros = mysqli_query(conexion, "SELECT * FROM noticias order by fecha desc")
        or die("Problemas en la consulta".mysqli_error($conexion));
    
    echo '<rss version="2.0">';
    echo '<channel>';
    echo '<title> Noticias IES</title>';
    echo '<link>https://webrssies.000webhostapp.com</link>';
    echo '<language>es</language>';
    echo '<description>Canal de noticies del IES</description>';
    
    while ($reg=mysqli_fetch_array($registros)) {
        echo '<item>';
            echo '<title>.$reg[titulo]</title>';
            echo '<pubDate>.$reg[fecha]</pubDate>';
            echo '<category>.$reg[categoria]</category>';
            echo '<description>.$reg[noticia]</description>';
        echo '</item>';
    }

    echo '</channel>';
    }
?>