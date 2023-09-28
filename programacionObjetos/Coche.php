<?php

namespace programacionObjetos;

class Coche
{
    public $color, $potencia, $marca;

    /**
     * @param $color
     * @param $potencia
     * @param $marca
     */
    public function __construct($color, $potencia, $marca)
    {
        $this->color = $color;
        $this->potencia = $potencia;
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
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

$miCoche = new Coche("Blanco", 150, "volkswagen");
$adrianCoche = new Coche("", 115, "Hyundai");
var_dump($miCoche);
echo "<br>";
var_dump($adrianCoche);
$adrianCoche->color = "Negro";
echo "<br>";
var_dump($adrianCoche);
$miCoche->setColor("Gris");
echo "<br>";
echo "Mi coche ahora es de color " . $miCoche->getColor();
$miCoche->setColor("Gris");
echo "<br>";
echo "El coche de Adrián es de color " . $adrianCoche->getColor() . ", tiene una potencia de " . $adrianCoche->getPotencia() . " y la marca es " . $adrianCoche->getMarca();
echo "<br>";
echo "<h2>Actividad</h2>";
$cocheAlumno1 = new Coche("Verde", 200, "Audi");

var_dump($cocheAlumno1);


function mostrarDatosCoche($newCoche)
{
    echo "<br> El coche es de color " . $newCoche->getColor() . ", tiene una potencia de " . $newCoche->getPotencia() . " CV y la marca es " . $newCoche->getMarca();
}

$cochePrueba = new Coche("Negro", 250, "BMW");

echo "<br>";
mostrarDatosCoche($cochePrueba);

if ($_GET["color"] != "" && $_GET["potencia"] != "" && $_GET["marca"] != "") {
    $color = $_GET["color"];
    $potencia = $_GET["potencia"];
    $marca = $_GET["marca"];
    $nuevoCoche = new Coche($color, $potencia, $marca);
    mostrarDatosCoche($nuevoCoche);
} else {
    header("Location:http://localhost:63342/CEAT-PHP/programacionObjetos/index.php?mns=Los Campos Son Obligatorios");
}