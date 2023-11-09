<?php
include "model/conexion.php";
global $link;
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $link = connect();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $paso = false;
    if (validarEmail($email)) {
        echo "Email validado correctamente <br>";
        $paso = true;
    } else {
        echo "Email no formato incorrecto <br>";
        $paso = false;
    }
    if (!existeEmail($email, $link)) {
        echo "No se puede registrar con este correo porque ya existe en la base de datos <br>";
        $paso = false;
    }
    if (validarPassword($password)) {
        echo "La password cumple los requisitos de complejidad <br>";
        $paso = true;
    } else {
        echo "La password NO cumple los requisitos <br>";
        $paso = false;
    }
    if ($paso) {
        $passwordSeguro = password_hash($password, PASSWORD_BCRYPT);
        $insertarUser = "insert into usuarios (email,password) values 
            ('" . $email . "','" . $passwordSeguro . "');";
        $result = mysqli_query($link, $insertarUser);
        if ($result) {
            echo "<br> Alta realizada correctamente";
        } else {
            echo "<br> Existe un error al realizar el alta";
        }
        mysqli_close($link);
    }
}

function validarEmail($email)
{
    $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (preg_match($regex, $email)) {
        return true;
    } else {
        return false;
    }
}

function existeEmail($email, $link)
{
    $consulta = "SELECT * FROM usuarios where email='" . $email . "';";
    $resultado = mysqli_query($link, $consulta);
    $numRegistros = mysqli_num_rows($resultado);
    if ($numRegistros != 0) {
        return false;
    } else {
        return true;
    }
}

function validarPassword($password)
{
    $regex = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
    if (preg_match($regex, $password)) {
        return true;
    } else {
        return false;
    }
}
