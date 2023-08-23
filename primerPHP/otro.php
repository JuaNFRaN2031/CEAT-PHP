<?php
    $nombre = "Juan Fran";
    $fecha = date("d/m/y");
    $hora = date("H:i:s");
    $precio = 5;
    $cantidad = 10;
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Primer PHP</title>
</head>
<body>
    <p>Hola <?=$nombre?></p>
    <p>Hoy es: <?=$fecha?></p>
    <p>La hora es: <?=$hora?></p>
    <p>El total es: <?=$precio + $cantidad?> €</p>
</body>
</html>