<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Manejo de datos desde HTML y PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <div class="formulario">

    <h1>Formulario de Datos</h1>
        <form action="lectura.php" method="get">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" maxlength="50">
            </p>
            <p>
                <label for="edad">Edad: </label>
                <input type="number" name="edad" id="edad" min="0" max="100" step="1">
            </p>
            <p>
                <input type="submit" value="Enviar" name="enviar">
            </p>
        </form>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>