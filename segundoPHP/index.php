<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <title>Segundo PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav id='menu'>
            <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <ul>
                <li><a href='../inicio.php'>Inicio</a></li>
                <li><a class='dropdown-arrow' href='../ejercicios.php'>EJERCICIOS</a>
                    <ul class='sub-menus'>
                        <li><a href='ejercicio%20multiplicar.php'>Ejercicio 1</a></li>
                        <li><a href=''>No hay</a></li>
                        <li><a href=''>No hay</a></li>
                    </ul>
                <li><a href=''>Formulario</a></li>
                <li><a class='dropdown-arrow' href='index.php'>PHP</a>
                    <ul class='sub-menus'>
                        <li><a href='../1PHP/index.php'>PHP 1</a></li>
                        <li><a href='index.php'>PHP 2</a></li>
                        <li><a href=''>PHP 3</a></li>
                    </ul>
                </li>
            </ul>
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">
            <img class="logo" src="img/posiblelogo.webp" alt="logo">


        </nav>
    </header>
    <div class="banner">
        <img src="img/amanecerbanner1.jpg" alt="">
        <img src="img/amanecerbanner2.jpg" alt="">

    </div>
    <script src="js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <!--ORIGINAL-->
    <?php
    echo "¡HOLA! ";
    const SERVIDOR = "https://google.es";
    $usuario = '@anniploplop';
    $password = '';
    echo '<p>El servidor que más visito es --> ', SERVIDOR, '</p>';
    echo '<br>', 'El usuario que utilizo es --> ', $usuario;
    define('OTROSERVIDOR', 'https://amazon.com'); //otra manera de definir constantes menos utilizada.
    $usuario = 123456;
    echo '<br>', 'Ahora mi usuario es ', $usuario * 654321; // le puedo realizar operaciones matematicas porque el valor es entero.
    echo '<br>', 'He\'s a boy';
    echo '<br>', "El dijo \"hola\""; //con barras de escape
    echo '<br>', 'El dijo "hola"'; //con distintas comillas
    echo '<br>', "El usuario continua con el número de $usuario"; //con comillas dobles, no hace falta concatenar con una variable
    echo '<br>', 'El usuario continua con el número de $usuario'; //con comillas simples no reconoce la variable, si no como una parte de la cadena de caracteres
    echo '<br>', "\$usuario =$usuario";
    $fruta = "manzana";
    echo '<br>', "Una $fruta no es cara"; //una manzana no es cara
    echo '<br>', "Diez kilos de {$fruta}s si serían caras"; // Diez kilos de manzanas si serían caras
    //Si se quiere mostrar el nombre con llaves
    echo '<br>', "Diez kilos de {{$fruta}s} si serían caras";
    echo '<br>', $fruta[2]; //hace un array
    $abecedario = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    echo '<br>', $abecedario[16];
    $numero = 0;
    $usuario = "Ana";
    if ($usuario == "Ana") {
        echo '<br>', "El nombre Ana, es verdadero";
    } else {
        echo '<br>', "El nombre no es Ana, es falso";
    }
    if ($numero == 0) {
        echo '<br>' . 'false' . '<br>';
    } else {
        echo '<br>' . 'true';
    }
    $otroValor = (int) 5;
    // matriz
    $matrizDeNumero[] = array();
    for ($i = 0; $i < 10; $i++) {
        $matrizDeNumero[$i] = $i * 10;
    }
    print_r($matrizDeNumero);


    $matrizEjemplo[] = array();
    for ($i = 0; $i < 30; $i++) {
        if ($i < 15) {
            $matrizEjemplo[$i] = "a";
        } else {
            $matrizEjemplo[$i] = "b";
        }
    }

    $mabecedario[] = array();
    for ($i = 0; $i < 26; $i++) {
        $mabecedario[$i] = $abecedario[$i];
    }
    print_r($mabecedario);






    //código HTML
    ?>
    <h1>Muestra un texto</h1>
    <p>Lorem ipsum dolor sit aet, consectetur adipisicing elit. Animi blanditiis, commodi distinctio eligendi fugit laboriosam laudantium maxime necessitatibus optio perspiciatis praesentium qui, quos, reiciendis repellat repudiandae saepe sunt vel vitae?</p>

    <p>El otro servidor es <a target="_blank" href=" https://amazon.com"><?= OTROSERVIDOR; ?></a></p>



</body>

</html>