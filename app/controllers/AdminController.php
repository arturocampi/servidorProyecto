<?php

class AdminController
{

    public function index()
    {
        require 'app/views/login.php';
    }

    public function auth()
    {
        session_start();
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];
        if (($_SESSION['user'] == 'gerente') && ($_SESSION['password'] == 'gerente')) {
            require 'app/views/forms/staff.php';
        } else {
            echo 'Credenciales incorrectas!';
        }
    }

    public function create()
    {
        session_start();
        require('models/Empleado.php');
        $emp = new Empleado($_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['edad'], $_POST['sexo'], $_POST['horario'], $_POST['sueldo']);
        if (isset($_SESSION['empleados'])) {
            array_push($_SESSION['empleados'], $emp);
        } else {
            $_SESSION['empleados'] = [];
            array_push($_SESSION['empleados'], $emp);
        }
        header('Location:/admin/auth');
    }

    public function mostrar()
    {
        echo 'Mostrar';
    }


    public function logout()
    {
        session_destroy();
        header('Location:/home');
    }
}
