<?php

namespace App\Controllers;

class CitaController
{

    public function index()
    {
        require 'app/views/clientes.php';
    }

    public function cursos()
    {
        require 'app/views/cursos.php';
    }

    public function particular()
    {
        require 'app/views/forms/clientes.php';
    }

    public function evento()
    {
        require 'app/views/forms/evento.php';
    }

    public function addParticular()
    {

        header('Location:/cliente');
    }

    public function addEvento()
    {

        header('Location:/cliente');
    }
}
