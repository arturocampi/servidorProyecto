<?php

class Empleado
{
    private $nombre;
    private $apellido;
    private $edad;
    private $sexo;
    private $horario;

    public function __construct($nombre, $apellido, $edad, $sexo, $horario)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->horario = $horario;
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
        return "Nombre: " . $this->nombre . " <br>Appelido: " . $this->saldo . " <br>Edad: " . $this->edad . " <br>Sexo: " . $this->sexo . " <br>Horario: " . $this->horario;
    }
}
