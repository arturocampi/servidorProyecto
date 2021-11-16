<?php

namespace App\Controllers;

use App\Models\Empleado;
require_once '../app/models/Empleado.php';

class AdminController
{

    public function index()
    {
        require 'app/views/login.php';
    }

    public function auth()
    {
        session_start();
        $_SESSION['emp'] = $_POST['emp'];
        $_SESSION['password'] = $_POST['password'];
        if (($_SESSION['emp'] == 'gerente') && ($_SESSION['password'] == 'gerente')) {
            require 'app/views/forms/staff.php';
        } else {
            echo 'Credenciales incorrectas!';
        }
    }

    public function create()
    {      
        $emp = new Empleado();
        $emp->nombre = $_POST['nombre'];
        $emp->apellido = $_POST['apellido'];
        $emp->telefono = $_POST['telefono'];
        $emp->edad = $_POST['edad'];
        $emp->sexo = $_POST['sexo'];
        $emp->horario = $_POST['horario'];
        $emp->sueldo = $_POST['sueldo'];
        $emp->insert();
        header('Location:/admin');
    }

    public function mostrar()
    {
        $emp = new Empleado();
        $emp::all();
    }


    public function logout()
    {
        session_destroy();
        header("location:/home");
    }
}
