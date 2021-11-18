<?php

namespace App\Controllers;

use App\Models\Empleado;

class EmpleadoController
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
        $emp = new Empleado();
        $emp->nombre = $_POST['nombre'];
        $emp->apellido = $_POST['apellido'];
        $emp->telefono = $_POST['telefono'];
        $emp->edad = $_POST['edad'];
        $emp->sexo = $_POST['sexo'];
        $emp->sueldo = $_POST['sueldo'];
        $emp->insert();
        header('Location:/admin');
    }

    public function mostrar()
    {
        $emp = new Empleado();
        $emp::all();
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        $emp = Empleado::find($id);
        $emp->nombre = $_POST['nombre'];
        $emp->apellidos = $_POST['apellidos'];
        $emp->telefono = $_POST['telefono'];
        $emp->edad = $_POST['edad'];
        $emp->sexo = $_POST['sexo'];
        $emp->horario = $_POST['horario'];
        $emp->sueldo = $_POST['sueldo'];
        $emp->save();
        header('Location:/admin');
    }

    public function logout()
    {
        session_destroy();
        header("location:/home");
    }
}
