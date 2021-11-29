<?php

namespace App\Controllers;

use App\Models\Empleado;

class EncryptController
{
    public function index()
    {
        $empleados = Empleado::all();

        foreach ($empleados as $empleado) {
            echo $empleado->name . ':' . $empleado->setPassword('secret') . '\n';
        }
    }
}
