<?php

include_once("Coche.php");

use programacionObjetos\Coche;


class Camion extends Coche
{
    public $pesoMax;

    public function __construct($color, $potencia, $marca, $pesoMax)
    {
        parent::__construct($color, $potencia, $marca);
        $this->pesoMax = $pesoMax;
    }

    /**
     * @return mixed
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * @param mixed $pesoMax
     */
    public function setPesoMax($pesoMax)
    {
        $this->pesoMax = $pesoMax;
    }


}

function mostrarDatosCamion($newCamion)
{
    echo "<br> El camión es de color " . $newCamion->getColor() . ", tiene una potencia de " . $newCamion->getPotencia() . " CV, la marca es " . $newCamion->getMarca() . " y su peso máximo es " . $newCamion->getPesoMax();
}

if ($_GET["color"] != "" && $_GET["potencia"] != "" && $_GET["marca"] != "" && $_GET["pesoMax"] != "") {
    $color = $_GET["color"];
    $potencia = $_GET["potencia"];
    $marca = $_GET["marca"];
    $pesoMax = $_GET["pesoMax"];
    $miCamion = new Camion($color, $potencia, $marca, $pesoMax);
    mostrarDatosCamion($miCamion);
} else {
    header("Location:http://localhost:63342/htdocs/programacionObjetos/indexCamion.php?mns=Los Campos Son Obligatorios");
}