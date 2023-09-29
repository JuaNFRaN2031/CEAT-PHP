<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Registro de Coche</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>Formulario Coche</h2>
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
        <input type="submit" value="Registrar">
    </form>
</div>
</body>
</html>