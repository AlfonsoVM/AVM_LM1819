<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cálculo Área o Perímetro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
</head>
<body>

    <!--Realice el siguiente programa. Cree un formulario para calcular el área y el perímetro de un rectángulo.
    En el formulario principal deben aparecer dos cajas de texto para indicar la base y la altura del rectángulo.
    Además, añadir un radiobutton para indicar si lo que queremos calcular es el área o el perímetro. Cuando se
    pulse en el botón “Calcular” debe mostrar el resultado en la siguiente pantalla.-->
    
    <br><br>

    <div class="container">
            <h2>Insertar base del rectángulo</h2>
            <form action="2A.php" method="post">
                <div class="form-group">
                    <label for="base">Base del rectángulo: </label>
                    <input type="number" class="form-control" name="base" id="base" required>
                </div>
            <h2>Insertar perímetro del rectángulo</h2>
                <div class="form-group">
                    <label for="altura">Perímetro del rectángulo: </label>
                    <input type="number" class="form-control" name="altura" id="altura" required>
                </div>
                <div class="form-group">
                <h2>¿Área o perímetro?</h2>
                
                    <br>
                    
                    <input type="radio" name="medida" id="area" value="1" required> Área<br><br>
                    <input type="radio" name="medida" id="perimetro" value="2" required> Perímetro<br><br>
                </div>
                <p>
                    <input type="submit" class="btn btn-primary btn-block" value="Calcular">
                </p>
            </form>
        </div>

    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>
</html>