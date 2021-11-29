<?php

use App\Models\Empleado;

$empleados = Empleado::all();

foreach ($empleados as $empleado) {
    echo $empleado->name . ':' . $empleado->setPassword('secret') . '\n';
}
