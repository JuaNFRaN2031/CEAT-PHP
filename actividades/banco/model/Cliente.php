<?php

namespace actividades\banco;

session_start();
class Cliente
{
    public $dni;
    public $telefono;
    public $mail;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $edad;

    /**
     * @param $dni
     * @param $telefono
     * @param $mail
     * @param $nombre
     * @param $apellido1
     * @param $apellido2
     * @param $edad
     */
    public function __construct($dni, $telefono, $mail, $nombre, $apellido1, $apellido2, $edad)
    {
        $this->dni = $dni;
        $this->telefono = $telefono;
        $this->mail = $mail;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * @param mixed $apellido1
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    /**
     * @return mixed
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * @param mixed $apellido2
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
}

if (!empty($_SESSION["dni"]) && !empty($_SESSION["telefono"]) && !empty($_SESSION["mail"]) && !empty($_SESSION["nombre"]) && !empty($_SESSION["apellido1"]) && !empty($_SESSION["apellido2"]) && !empty($_SESSION["edad"])) {
    $newCliente = new Cliente($_SESSION["dni"], $_SESSION["telefono"], $_SESSION["mail"], $_SESSION["nombre"], $_SESSION["apellido1"], $_SESSION["apellido2"], $_SESSION["edad"]);

    var_dump($newCliente);
    session_abort();
}