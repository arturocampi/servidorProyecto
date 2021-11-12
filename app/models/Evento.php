<?php

class Evento
{
    public $nombre;
    public $apellido;
    public $empresa;
    public $telefono;
    public $direccion;
    public $email;
    public $fecha;
    public $tipo;
    public $number;
    public $informacion;

    public function __construct($nombre, $apellido, $empresa, $telefono, $direccion, $email, $fecha, $tipo, $number, $informacion)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->empresa = $empresa;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->fecha = $fecha;
        $this->tipo = $tipo;
        $this->number = $number;
        $this->informacion = $informacion;
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
        return "Nombre: " . $this->nombre . " <br>Appelido: " . $this->apellido . "<br>Empresa: " . $this->empresa . "<br>Telefono: " . $this->telefono . "<br>Dirección: " . $this->direccion . "<br>Email: " . $this->email . "<br>Fecha: " . $this->fecha . "<br>Tipo: " . $this->tipo . "<br>Cantidad de persona: " . $this->number . "<br>Información extra: " . $this->informacion;
    }
}
