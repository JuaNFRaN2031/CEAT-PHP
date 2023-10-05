<?php

namespace actividades\cita_previa;

session_start();

class Cliente
{
    public $nombre;
    public $mail;
    public $telefono;
    public $mensaje;
    public $departamento;
    public $fecha;
    public $hora;

    /**
     * @param $nombre
     * @param $mail
     * @param $telefono
     * @param $mensaje
     * @param $departamento
     * @param $fecha
     * @param $hora
     */
    public function __construct($nombre, $mail, $telefono, $mensaje, $departamento, $fecha, $hora)
    {
        $this->nombre = $nombre;
        $this->mail = $mail;
        $this->telefono = $telefono;
        $this->mensaje = $mensaje;
        $this->departamento = $departamento;
        $this->fecha = $fecha;
        $this->hora = $hora;
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
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * @param mixed $mensaje
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * @return mixed
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * @param mixed $departamento
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

}

if (!empty($_SESSION["departamento"]) && !empty($_SESSION["fecha"]) && !empty($_SESSION["hora"]) && !empty($_SESSION["nombre"]) && !empty($_SESSION["correo"]) && !empty($_SESSION["telefono"]) && !empty($_SESSION["mensaje"])) {
    $newCliente = new Cliente($_SESSION["departamento"], $_SESSION["fecha"], $_SESSION["hora"], $_SESSION["nombre"], $_SESSION["correo"], $_SESSION["telefono"], ($_SESSION["mensaje"]));
    var_dump($newCliente);
    session_abort();
}
