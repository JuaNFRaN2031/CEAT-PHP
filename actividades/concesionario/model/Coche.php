<?php

session_start();

class Coche
{
    public $matricula;
    public $num_bastidor;
    public $id_marca;
    public $modelo;
    public $cilindrada;
    public $potencia;
    public $id_color;
    public $precio;
    public $id_tipo_motor;
    public $fecha_fabricacion;
    public $extras;
    public $observaciones;

    /**
     * @param $matricula
     * @param $num_bastidor
     * @param $id_marca
     * @param $modelo
     * @param $cilindrada
     * @param $potencia
     * @param $id_color
     * @param $precio
     * @param $id_tipo_motor
     * @param $fecha_fabricacion
     * @param $extras
     * @param $observaciones
     */
    public function __construct($matricula, $num_bastidor, $id_marca)
    {
        $this->matricula = $matricula;
        $this->num_bastidor = $num_bastidor;
        $this->id_marca = $id_marca;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getNumBastidor()
    {
        return $this->num_bastidor;
    }

    /**
     * @param mixed $num_bastidor
     */
    public function setNumBastidor($num_bastidor)
    {
        $this->num_bastidor = $num_bastidor;
    }

    /**
     * @return mixed
     */
    public function getIdMarca()
    {
        return $this->id_marca;
    }

    /**
     * @param mixed $id_marca
     */
    public function setIdMarca($id_marca)
    {
        $this->id_marca = $id_marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    /**
     * @param mixed $cilindrada
     */
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;
    }

    /**
     * @return mixed
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * @param mixed $potencia
     */
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }

    /**
     * @return mixed
     */
    public function getIdColor()
    {
        return $this->id_color;
    }

    /**
     * @param mixed $id_color
     */
    public function setIdColor($id_color)
    {
        $this->id_color = $id_color;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getIdTipoMotor()
    {
        return $this->id_tipo_motor;
    }

    /**
     * @param mixed $id_tipo_motor
     */
    public function setIdTipoMotor($id_tipo_motor)
    {
        $this->id_tipo_motor = $id_tipo_motor;
    }

    /**
     * @return mixed
     */
    public function getFechaFabricacion()
    {
        return $this->fecha_fabricacion;
    }

    /**
     * @param mixed $fecha_fabricacion
     */
    public function setFechaFabricacion($fecha_fabricacion)
    {
        $this->fecha_fabricacion = $fecha_fabricacion;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param mixed $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }
}

//if (!empty($_SESSION['matricula']) && !empty($_SESSION['num_bastidor']) && !empty($_SESSION['id_marca'])) {
//    $newCoche = new Coche($_SESSION['matricula'], $_SESSION['num_bastidor'], $_SESSION['id_marca'], $_SESSION['modelo'], $_SESSION['cilindrada'], $_SESSION['potencia'], $_SESSION['id_color'], $_SESSION['precio'], $_SESSION['id_tipo_motor'], $_SESSION['fecha_fabricacion'], $_SESSION['extras'], $_SESSION['observaciones']);
//    include "conexion.php";
//    $link = connect();
//    $consultaInsert = "INSERT INTO coches (matricula, num_bastidor, id_marca, modelo, cilindrada, potencia, id_color, precio, id_tipo_motor, fecha_fabricacion, extras, observaciones) values (" . $newCoche->matricula . "," . $newCoche->num_bastidor . "," . $newCoche->id_marca . "," . $newCoche->modelo . "," . $newCoche->cilindrada . "," . $newCoche->potencia . "," . $newCoche->id_color . "," . $newCoche->precio . "," . $newCoche->id_tipo_motor . "," . $newCoche->fecha_fabricacion . "," . $newCoche->extras . "," . $newCoche->observaciones . ");";
//    echo $consultaInsert;
//    $resultado = mysqli_query($link, $consultaInsert);
//    if ($resultado) {
//        echo "<br> Registro insertado correctamente";
//    } else {
//        echo "<br> Existe un error al insertar el Registro";
//    }
//    session_abort();
//}