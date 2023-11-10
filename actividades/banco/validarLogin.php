<?php
include "header.php";
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $passwordFormulario = $_POST['password'];
    include "model/conexion.php";
    $link = connect();
    $consulta = "SELECT * FROM usuarios where email='" . $email . "';";
    $resultado = mysqli_query($link, $consulta);
    $row = mysqli_num_rows($resultado);
    if ($row != 0) {
        $registro = mysqli_fetch_assoc($resultado);
        $emailBBDD = $registro["email"];
        $passwordBBDD = $registro["password"];
        echo "Este email si está registrado en la base de datos " . $emailBBDD . "<br>";
        if (validarPassword($passwordFormulario, $passwordBBDD)) {
            echo "La contraseña es correcta <br>";
        } else {
            echo "Error. Contraseña inválida <br>";
        }
    } else {
        echo "No existe ese email en la base de datos <br>";
    }
}

function validarPassword($passwordFormulario, $passwordBBDD)
{
    $verificacion = password_verify($passwordFormulario, $passwordBBDD);
    if ($verificacion) {
        return true;
    } else {
        return false;
    }
}
