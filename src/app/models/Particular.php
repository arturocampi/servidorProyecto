<?php

class Particular
{
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;
    public $fecha;
    public $sexo;
    public $peinado;

    public function __construct($nombre, $apellido, $telefono, $email, $fecha, $sexo, $peinado)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->fecha = $fecha;
        $this->sexo = $sexo;
        $this->peinado = $peinado;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function __toString()
    {
        return "Nombre: " . $this->nombre . " <br>Appelido: " . $this->apellido . "<br>Telefono: " . $this->telefono . " <br>Email: " . $this->email . " <br>Fecha: " . $this->fecha . " <br>Sexo: " . $this->sexo . "<br>Peinado: " . $this->peinado;
    }
}
