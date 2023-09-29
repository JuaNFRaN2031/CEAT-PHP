<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Registro de Moto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>Formulario Moto</h2>
    <form action="Moto.php" method="get">
        <p>
            <label for="cc">CC: </label>
            <input type="text" name="cc" id="cc">
        </p>
        <p>
            <label for="tipo">Tipo: </label>
            <input type="text" name="tipo" id="tipo">
        </p>
        <p>
            <label for="marca">Marca: </label>
            <input type="text" name="marca" id="marca">
        </p>
        <input type="submit" value="Registrar">
    </form>
    <?php
    if (!empty($_GET["mns"])) {
        echo "<br>" . $_GET["mns"];
    }
    ?>
</div>
</body>
</html>