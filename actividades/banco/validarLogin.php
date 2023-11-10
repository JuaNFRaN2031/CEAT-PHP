<?php
include "header.php";
include "model/conexion.php";
session_start();
$link = connect();
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $passwordFormulario = $_POST['password'];
    $consulta = "SELECT * FROM usuarios where email='" . $email . "';";
    $resultado = mysqli_query($link, $consulta);
    $row = mysqli_num_rows($resultado);
    if ($row != 0) {
        $registro = mysqli_fetch_assoc($resultado);
        $emailBBDD = $registro["email"];
        $passwordBBDD = $registro["password"];
        // echo "Este email si está registrado en la base de datos " . $emailBBDD . "<br>";
        if (validarPassword($passwordFormulario, $passwordBBDD)) {
            // echo "La contraseña es correcta <br>";
            $_SESSION['nombre'] = $registro['nombre'];
            header("Location:http://localhost:63342/banco/actividades/banco/dashboard.php");
        } else {
            // echo "Error. Contraseña inválida <br>";
            $mensajeError = "Error. Contraseña inválida";
            header("Location:http://localhost:63342/banco/actividades/banco/login.php?mensaje=$mensajeError");
        }
    } else {
        // echo "No existe ese email en la base de datos <br>";
        $mensajeError = "No existe ese email en la base de datos";
        header("Location:http://localhost:63342/banco/actividades/banco/login.php?mensaje=$mensajeError");
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
