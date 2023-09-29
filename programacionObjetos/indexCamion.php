<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Registro de Camión</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>Formulario Camión</h2>
    <form action="Camion.php" method="get">
        <p>
            <label for="color">Color: </label>
            <input type="text" name="color" id="color">
        </p>
        <p>
            <label for="potencia">Potencia (CV): </label>
            <input type="text" name="potencia" id="potencia">
        </p>
        <p>
            <label for="marca">Marca: </label>
            <input type="text" name="marca" id="marca">
        </p>
        <p>
            <label for="pesoMax">Peso Max: </label>
            <input type="text" name="pesoMax" id="pesoMax">
        </p>
        <input type="submit" value="Registrar">
    </form>
</div>
</body>
</html>