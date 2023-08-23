<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Tablas de multiplicar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
/*Ejercicio utilizando for*/
echo "<h2>Tablas de multiplicar FOR</h2>";
//Crea las tablas de multiplicar desde el 1 al 10
for($i=1;$i<11;$i++){
    echo "<h4>Tabla del $i </h4>";
    for ($x=1;$x<11;$x++){
        echo "$i"."x"."$x"."=".$i*$x."<br>";
    } echo "<br>";
}
echo "<hr>";
echo "<h2>Tablas de multiplicar con While</h2>";
//Crea las tablas de multiplicar desde el 1 al 10
$i=1;
$x=1;
while($i<11){
    echo "<h4>Tabla del $i </h4>"."<br>";
    while ($x<11){
        echo "$i"."x"."$x"."=".$i*$x."<br>";
        $x++;
    }
    echo "<br>";
    $i++;
    $x = 1;
}
?>
</body>
</html>
