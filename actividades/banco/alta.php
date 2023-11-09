<?php
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (validarEmail($email)) {
        echo "Email validado correctamente <br>";
    } else {
        echo "Email no formato incorrecto <br>";
    }
    if (validarPassword($password)) {
        echo "La password cumple los requisitos de complejidad <br>";
    } else {
        echo "La password NO cumple los requisitos <br>";
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

function validarPassword($password)
{
    $regex = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
    if (preg_match($regex, $password)) {
        return true;
    } else {
        return false;
    }
}
