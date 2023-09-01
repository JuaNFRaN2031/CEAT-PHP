<?php
    $numeracion2en2 = 0;
    $numeracionSingle = 1000;
    echo "<h2>De 0 a 1000 de 2 en 2</h2>";
    function de2en2hastaMil($numeracion2en2, $numeracionSingle)
    {
        while ($numeracion2en2 <= $numeracionSingle)
        {
            echo "$numeracion2en2 <br>";
            $numeracion2en2 += 2;
        }
    }
    de2en2hastaMil($numeracion2en2, $numeracionSingle);
    $numeracion2en2 = 0;
    echo "<h2>De 1000 a 0</h2>";
    function deMila0($numeracion2en2, $numeracionSingle)
    {
        while ($numeracionSingle >= $numeracion2en2)
        {
            echo "$numeracionSingle <br>";
            $numeracionSingle --;
        }
    }
    deMila0($numeracion2en2, $numeracionSingle);
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Quinto PHP</title>
</head>
<body>
    <h2>De 0 a 1000 de 2 en 2 en JavaScript</h2>
    <p id="insert2en2"></p>
    <h2>De 1000 0 en JavaScript</h2>
    <p id="insert1000a0"></p>
    <script src="js/script.js"></script>
</body>
</html>