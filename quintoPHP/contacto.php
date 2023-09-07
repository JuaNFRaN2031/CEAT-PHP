<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Manejo de datos desde HTML y PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="formulario">
    <h1>Formulario de Datos</h1>
        <form action="lectura.php" method="get" id="formulario">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" maxlength="50">
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <input type="submit" value="Enviar" name="enviar">
            </p>
        </form>
        <?php
            if (isset($_GET["mensaje"])) {
                echo $_GET['mensaje'];
            }
        ?>
    </div>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
</body>
</html>
<?php
    include 'footer.php';
?>
