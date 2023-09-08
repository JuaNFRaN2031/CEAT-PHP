<?php
    $nombre = "";
    $email = "";
    $error = "";
    if ($_GET['nombre']) {
        $nombre = $_GET["nombre"];
    } else {
        $error = "El nombre es obligatorio" . "<br>";
    }
    if ($_GET["email"]) {
        $email = $_GET["email"];
    } else {
        $error = $error . "El email es incorrecto";
    }
    if ($error != "") {
        header("Location:http://localhost:63342/CEAT-PHP/quintoPHP/contacto.php?mensaje=$error");
    } else {
        header("Location:https://php.juanfra.cursoceat.es/quintoPHP/lectura.php?nombre=$nombre&email=$email");
        $error = "";
    }
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
</body>
</html>