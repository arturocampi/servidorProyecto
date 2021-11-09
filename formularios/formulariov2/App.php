<?php

class App
{

    public function __construct()
    {
        session_start();
    }

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }
        $this->$method();
    }

    public function login()
    {
        include('views/login.php');
    }

    public function auth()
    {
        session_start();
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];

        header('location:?method=formularioStaff');
    }

    public function reload()
    {
        header('location:?method=home');
    }

    public function home()
    {
        include('views/home.php');
    }

    public function cliente()
    {
        include('views/cliente.php');
    }

    public function formularioStaff()
    {
        include('views/formularioStaff.php');
    }

    public function form()
    {
        require('views/empleado.php');
        $emp = new Empleado($_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['edad'], $_POST['sexo'], $_POST['horario'], $_POST['sueldo']);
        if (isset($_SESSION['empleados'])) {
            array_push($_SESSION['empleados'], $emp);
        } else {
            $_SESSION['empleados'] = [];
            array_push($_SESSION['empleados'], $emp);
        }
        include('views/mostrarEmpleado.php');
    }

    public function destroySession()
    {
        session_destroy();
        $this->reload();
    }

    public function logout()
    {
        $this->reload();
    }
}
