<?php
    echo "<h2>Pruebas</h2>";
    function variableLocal()
    {
        $miVariableLocal = 5;
        echo "\$miVariableLocal tiene valor de $miVariableLocal";
    }
    variableLocal();
    echo "<br>";
    $miVariableGlobal = 15;
    $valorDecimal = 75.4999;
    function variableGlobal()
    {
        global $miVariableGlobal, $valorDecimal;
        $miVariableGlobal += $valorDecimal;
        echo "\$miVariableGlobal ahora vale $miVariableGlobal <br>";
    }
    variableGlobal();
    echo "\$miVariableGlobal fuera de la función vale $miVariableGlobal <br>";
    variableGlobal();
    echo "\$miVariableGlobal fuera de la función vale $miVariableGlobal <br>";
    function variableStatic()
    {
        static $edad = 18;
        echo "La edad es $edad <br>";
        $edad++;
    }
    variableStatic();
    variableStatic();
    variableStatic();
    unset($edad); // Si después no necesito la variable no se puede eliminar porque es estático;
    variableStatic();
    /*******************************************************************/
    // Declara tres funciones como las anteriores, donde exista:
    /*
     * 1) Una que sus variables locales $x e $y y realiza una suma entre estas variables
     * 2) Declara una variable llamada $yy y declara dentro de la función como global e increméntala en 2, muestra su
     *  valor fuera de la función
     * 3) Crea una función llamada puntuación y dentro declara una variable static llamada puntos, increméntala cada
     * vez que se invoque y muestra su valor
     */
    echo "<h2>Ejercicio</h2>";
    function localVariables()
    {
        $x = 10;
        $y = 20;
        $z = $x + $y;
        echo "La suma de \$x -> $x + \$y -> $y es: $z <br>";
    }
    localVariables();
    $yy = 50;
    function globalVariables()
    {
        global $yy;
        $yy += 2;
        echo "El valor de \$yy es: $yy <br>";
    }
    globalVariables();
    function puntuacion()
    {
        static $puntos = 4;
        $puntos++;
        echo "\$puntos vale: $puntos <br>";
    }
    puntuacion();
    puntuacion();
    puntuacion();
    puntuacion();
    puntuacion();
    puntuacion();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Tercer PHP</title>
</head>
<body>
</body>
</html>