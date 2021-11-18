<?php

namespace App\Controllers;

class CitaController
{

    public function index()
    {
        require 'app/views/cliente.php';
    }

    public function cursos(){
        require 'app/views/cursos.php';
    }

    public function particular()
    {
        require 'app/views/forms/cliente.php';
    }

    public function evento(){
        require 'app/views/forms/evento.php';
    }

    public function addParticular()
    {
        session_start();
        require('models/Particular.php');
        $cli = new Particular($_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['email'], $_POST['fecha'], $_POST['sexo'], $_POST['peinado']);
        if (isset($_SESSION['clientes'])) {
            array_push($_SESSION['clientes'], $cli);
        } else {
            $_SESSION['clientes'] = [];
            array_push($_SESSION['clientes'], $clie);
        }
        header('Location:/cliente');
    }

    public function addEvento()
    {
        session_start();
        require('models/Evento.php');
        $eve = new Evento($_POST['nombre'], $_POST['apellido'], $_POST['empresa'], $_POST['telefono'], $_POST['direccion'], $_POST['email'], $_POST['fecha'], $_POST['tipo'], $_POST['number'], $_POST['informacion']);
        if (isset($_SESSION['evento'])) {
            array_push($_SESSION['evento'], $eve);
        } else {
            $_SESSION['evento'] = [];
            array_push($_SESSION['evento'], $eve);
        }
        header('Location:/cliente');
    }
}
