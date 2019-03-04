<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>color00</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:
    <?php
        if (isset($_COOKIE['color'])) {
            echo $_COOKIE['color'];
        }
    ?>">
<p>
<form action="formu01.php">
  <input type="radio" name="color" value="azul" checked> Azul<br>
  <input type="radio" name="color" value="rojo"> Rojo<br>
  <input type="radio" name="color" value="verde"> Verde
  <input type="submit" value="Enviar"/>
</form>
</p>
<!--formulario con un radio button con 3 opciones en la segunda pagina una cookie con ese color, volvemos y si esta establecida le ponga el fondo del color seleccionado-->
</body>
</html>
