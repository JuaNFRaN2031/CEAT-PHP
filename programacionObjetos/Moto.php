<?php

namespace programacionObjetos;

class Moto
{
    public $CC, $tipo, $marca, $mensajeError;

    /**
     * @param $CC
     * @param $tipo
     * @param $marca
     */
    public function __construct($CC, $tipo, $marca)
    {
        $this->CC = $CC;
        $this->tipo = $tipo;
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getCC()
    {
        return $this->CC;
    }

    /**
     * @param mixed $CC
     */
    public function setCC($CC)
    {
        $this->CC = $CC;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
}

function mostrarDatosMoto($newMoto)
{
    echo "<br> La moto tiene " . $newMoto->getCC() . " CC, es de tipo " . $newMoto->getTipo() . " y la marca es " . $newMoto->getMarca();
}

if ($_GET["cc"] != "" && $_GET["tipo"] != "" && $_GET["marca"] != "") {
    $CC = $_GET["cc"];
    $tipo = $_GET["tipo"];
    $marca = $_GET["marca"];
    $nuevaMoto = new Moto($CC, $tipo, $marca);
    mostrarDatosMoto($nuevaMoto);
} else {
    header("Location:http://localhost:63342/CEAT-PHP/programacionObjetos/motoIndex.php?mns=Los Campos Son Obligatorios");
}

