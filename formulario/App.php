<?php

class App
{
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }
        $this->$method();
    }

    public function reload()
    {
        header('location:?method=home');
    }

    public function home()
    {
        include('views/home.php');
    }

    public function formularioEvento()
    {
        include('views/formularioEvento.php');
    }

    public function formularioCliente()
    {
        include('views/formularioCliente.php');
    }

    public function printCliente()
    {
        session_start();
        $datos = array(
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'telefono' => $_POST['telefono'],
            'email' => $_POST['email'],
            'fecha' => $_POST['fecha'],
            'sexo' => $_POST['sexo'],
            'peinado' => $_POST['peinado'],
        );
        $_SESSION['datos'] = $datos;
        include('views/mostrar.php');
    }

    public function printEvento()
    {
        session_start();
        $datos = array(
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'empresa' => $_POST['empresa'],
            'telefono'   => $_POST['telefono'],
            'direccion' => $_POST['direccion'],
            'email'  => $_POST['email'],
            'fecha'  => $_POST['fecha'],
            'tipo'  => $_POST['tipo'],
            'personas'  => $_POST['personas'],
            'informacion'  => $_POST['informacion'],
        );
        $_SESSION['datos'] = $datos;
        include('views/mostrar.php');
    }
}
