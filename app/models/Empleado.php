<?php

class Empleado
{
    public $nombre;
    public $apellido;
    public $telefono;
    public $edad;
    public $sexo;
    public $horario;
    public $sueldo;

    public function __construct($nombre, $apellido, $telefono, $edad, $sexo, $horario, $sueldo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->horario = $horario;
        $this->sueldo = $sueldo;
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
        return "Nombre: " . $this->nombre . " <br>Appelido: " . $this->apellido . "<br>Telefono: " . $this->telefono . " <br>Edad: " . $this->edad . " <br>Sexo: " . $this->sexo . " <br>Horario: " . $this->horario . "<br>Sueldo: " . $this->sueldo;
    }
}
