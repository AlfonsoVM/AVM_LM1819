<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php
    $dia=date("d");
    $pdia=1;
    while($pdia<=$dia)
      {
        echo $pdia."<br>";
        $pdia++;
      }
  ?>
</body>
</html>