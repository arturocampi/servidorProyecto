<?php

namespace App\Controllers;

use App\Models\Empleado;
use App\Models\Servicio;
use Dompdf\Dompdf;

class EmployeeController
{

    public function index()
    {
        require 'app/views/login.php';
    }
    
    public function create()
    {
        require 'app/views/employee/create.php';
    }

    public function show()
    {
        $empleados= Empleado::all();
        require 'app/views/employee/index.php';
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $empleado = Empleado::find($id);
        $servicios= Servicio::all();
        require 'app/views/employee/edit.php';
    }

    public function new()
    {
        $emp = new Empleado();
        $emp->name = $_REQUEST['name'];
        $emp->surname = $_REQUEST['surname'];
        $emp->email = $_REQUEST['email'];
        $emp->details = $_REQUEST['details'];
        $emp->birthdate = $_REQUEST['birthdate'];
        $emp->password = $emp->encryptPassword($_REQUEST['password']);
        $emp->insert();
        header('Location:/employee/show');
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        $emp = Empleado::find($id);
        $emp->name = $_REQUEST['name'];
        $emp->surname = $_REQUEST['surname'];
        $emp->email = $_REQUEST['email'];
        $emp->details = $_REQUEST['details'];
        $emp->birthdate = $_REQUEST['birthdate'];
        $emp->service = $_REQUEST['service'];
        $emp->password = $emp->setPassword($_REQUEST['password']);
        $emp->save();
        header('Location:/employee/show');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $empleado = Empleado::find($id);
        $empleado->delete();
        header('Location:/employee/show');
    }

    public function logout()
    {
        session_destroy();
        header("location:/home");
    }

    public function pdf()
    {
        ob_start();
        $empleados = Empleado::all();
        require_once ('app/views/employee/pdf.php');
        $html = ob_get_clean();
        $dompdf = new DOMPDF();
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("Servicios.pdf", array("Attachment"=>0));
    }
}
