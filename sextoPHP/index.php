<?php
    function mostrar($cad)
    {
        echo $cad . "<br>";
    }
    $cadena1=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' ');
    $cadena2=array('ª','&','(',')','€','=','9','-','1','¡','*','|','¿','?','º','#','~','{','$','7','[','+','/','·','^',']','__');
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Sexto PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
<div class="d-flex">
    <div class="row">
        <div class="card-green col-6">
            <h1>Manipular los números</h1>
            <p>Las funciones más útiles para manipular los números son las siguientes:</p>
        </div>
        <div class="right col-6 row card-green">
            <h1>Manipular cadenas</h1>
            <p>Las funciones más útiles para manipular las cadenas son las siguientes:</p>
        </div>
    </div>
    <div class="row">
        <div class="card-lightgreen col-6">
            <h2>Valor absoluto de un número</h2>
            <?php
                $numero = -365;
                mostrar("El valor absoluto de -365 es: " . abs($numero));
                mostrar("El valor absoluto de 4587 es: " . abs(4587));
            ?>
        </div>
    </div>
    <div class="row">
        <div class="card-vanilla col-6">
            <h2>Redondeo de un número al entero superior</h2>
        </div>
    </div>
    <div class="row">
        <div class="header-card-dark-vanilla col-6">
            <h2>Redondeo de un número al entero inferior</h2>
        </div>
    </div>
    <div class="row">
        <div class="card-brown col-6">
            <h2>Cociente de la división entera de dos enteros</h2>
        </div>
    </div>
    <div class="row">
        <div class="card-green col-6">
            <h2>Máximo y Mínimo de un conjunto de valores</h2>
        </div>
    </div>
    <div class="row">
        <div class="card-lightgreen col-6">
            <h2>Números aleatorios: Devuelve un número aleatorio entero entre el límite mínimo y el límite máximo</h2>
        </div>
    </div>
</div>
<div class="col-12 card-green">
    <h2>Ejercicio 1</h2>
    <p>Frase de Gandhi, sobre la forma de vivir:</p>
    <cite>"Vive como si fueras a morir manana. Aprende como si fueras a vivir siempre"</cite>
    <br>
    <?php
        $frase = "Vive como si fueras a morir manana. Aprende como si fueras a vivir siempre";
        $fraseArray = explode(".", $frase);
        mostrar(strtoupper($fraseArray[0]) . strtolower($fraseArray[1]));
        mostrar(strtolower($frase));
        mostrar("La longitud de la primera parte de la frase hasta el '.' tiene: " . strlen($fraseArray[0]) . " caracteres");
        mostrar("La longitud de la segunda parte de la frase después del '.' tiene: " . strlen($fraseArray[1]) . " caracteres");
        mostrar("Encriptación en md5 ->" . md5($fraseArray[0]));
        mostrar($resultado=str_replace($cadena1,$cadena2,$frase));
    ?>
</div>
<div class="col-12 card-lightgreen">
    <h2>Ejercicio 2</h2>
    <p>Crea un array de al menos 10 nombres que comiencen por a, b, c y luego muestra solo los que comiencen con B</p>
    <cite>'Antonia','Ángel','Andrés','Bonifacio','Bruno','Braulio','Bea','Carlos','Clara','Carlota'</cite>
    <br>
    <br>
    <?php
        $nombres=array('Antonia','Ángel','Andrés','Bonifacio','bruno','Braulio','Bea','Carlos','Clara','Carlota');
        var_dump($nombres);
        mostrar("<br>");
        foreach ($nombres as $nombreItem) {
            if (str_starts_with($nombreItem, "B")) {
                mostrar("El nombre '" . $nombreItem . "' empieza por B");
            } elseif (str_starts_with($nombreItem, "b")){
                mostrar("El nombre '" . $nombreItem . "' empieza por b");
            } else {
                mostrar("El nombre '" . $nombreItem . "' <b>no</b> empieza por B");
            }
        };


    ?>
</div>
<script src="js/script.js"></script>
</body>
</html>