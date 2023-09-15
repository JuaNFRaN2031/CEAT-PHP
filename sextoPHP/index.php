<?php
    function mostrar($cad)
    {
        echo $cad . "<br>";
    }
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
<script src="js/script.js"></script>
</body>
</html>