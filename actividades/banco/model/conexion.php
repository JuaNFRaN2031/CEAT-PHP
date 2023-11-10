<?php
$servidor = "localhost";
$user = "root";
$clave = "";
$bbdd = "banca_online";
$port = "3306";
$table = "cliente";

function connect()
{
    global $servidor, $user, $clave, $bbdd, $table, $port;
    $link = mysqli_connect($servidor . ":" . $port, $user, $clave);
    if (mysqli_error($link)) {
        echo "Existe un error en la conexión con la base de datos";
    } else {
        echo "Conexión establecida correctamente <br>";
    }
    if (!mysqli_select_db($link, $bbdd)) {
        echo "Existe un error con la base de datos <br>";
        exit();
    } else {
        echo "Conexión con la BBDD correcta. <br>";
    }
    return $link;
}
