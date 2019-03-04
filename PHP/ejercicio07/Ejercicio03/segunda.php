<?php
$nombre = $nombre = trim(htmlspecialchars($_REQUEST['nombre'], ENT_QUOTES, 'UTF-8'));

session_start();
$_SESSION['nombreWeb'] = $nombre;

if (isset($_COOKIE['nombrechk'])) {
    echo "Hola $_COOKIE[nombreUsu]";
} else {
    echo "Hola Anónimo";
}

header('Location: primera.php');
?>