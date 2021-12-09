<?php

namespace App\Controllers;

use App\Models\Empleado;

require "app/models/Empleado.php";

class PasswordController
{
    public function index()
    {
        $empleados = Empleado::all();
        foreach ($empleados as $empleado) {
            echo $empleado->name . ':' . $empleado->setPassword('secret') . '<br>';
        }
    }
}
