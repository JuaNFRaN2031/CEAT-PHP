<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['matricula']) && !empty($_POST['num_bastidor']) && !empty($_POST['id_marca'])) {
        $matricula = $_POST['matricula'];
        $num_bastidor = $_POST['num_bastidor'];
        $marca = $_POST['id_marca'];
        $modelo = $_POST['modelo'];
        $cilindrada = $_POST['cilindrada'];
        $potencia = $_POST['potencia'];
        $id_color = $_POST['id_color'];
        $precio = $_POST['precio'];
        $id_tipo_motor = $_POST['id_tipo_motor'];
        $fecha_fabricacion = $_POST['fecha_fabricacion'];
        $extras = $_POST['extras'];
        $observaciones = $_POST['observaciones'];
        if (validarMatricula($matricula) && validarBastidor($num_bastidor)) {
            include "model/Coche.php";
            $newCoche = new namespace\Coche($matricula, $num_bastidor, $marca);
//            $consulta = "INSERT INTO coches (matricula, num_bastidor, id_marca, modelo, cilindrada, potencia, id_color, precio, id_tipo_motor, fecha_fabricacion, extras, observaciones) values ('$matricula', '$num_bastidor', $marca, '$modelo', $cilindrada, $potencia, $id_color, $precio, $id_tipo_motor, '$fecha_fabricacion', '$extras', '$observaciones');";
            $newCoche->setModelo($modelo);
            $newCoche->setCilindrada($cilindrada);
            $newCoche->setPotencia($potencia);
            $newCoche->setIdColor($id_color);
            $newCoche->setPrecio($precio);
            $newCoche->setIdTipoMotor($id_tipo_motor);
            $newCoche->setFechaFabricacion($fecha_fabricacion);
            $newCoche->setExtras($extras);
            $newCoche->setObservaciones($observaciones);
        }
    }
} else {
    echo "No se ha recogido los datos del formulario";
}

function validarMatricula($matricula)
{
    $expresion = "/^[0-9]{1,4}[BCDFGHJKLMNPRSTVWXYZ]{3}/";
    if (preg_match($expresion, $matricula)) {
        return true;
    } else {
        echo "Nº matrícula no válido";
        return false;
    }
}

function validarBastidor($num_bastidor)
{
    $expresion = "/^[0-9A-Za-z]{12}/";
    if (preg_match($expresion, $num_bastidor)) {
        return true;
    } else {
        echo "Nº bastidor no válido";
        return false;
    }
}