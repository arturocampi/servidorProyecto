<?php

namespace App\Controllers;

use App\Models\Servicio;
use App\Models\Empleado;
use Dompdf\Dompdf;

class ServicesController
{
    public function index()
    {
        $servicios = Servicio::all();
        require 'app/views/services/index.php';
    }

    public function show($arguments)
    {
        $id = (int) $arguments[0];
        $servicio = Servicio::find($id);
        $empleados = Empleado::all();
        require 'app/views/services/show.php';
    }

    public function showCliente()
    {
        $servicios = Servicio::all();
        require 'app/views/services/showCliente.php';
    }

    public function new()
    {
        require 'app/views/services/create.php';
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $servicio = Servicio::find($id);
        require 'app/views/services/edit.php';
    }

    public function store()
    {
        $service = new Servicio();
        $service->name = $_REQUEST['name'];
        $service->gender = $_REQUEST['gender'];
        $service->details = $_REQUEST['details'];
        $service->price = $_REQUEST['price'];
        $service->time = $_REQUEST['time'];
        $service->insert();
        header('Location:/services');
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        $service = Servicio::find($id);
        $service->name = $_REQUEST['name'];
        $service->gender = $_REQUEST['gender'];
        $service->details = $_REQUEST['details'];
        $service->price = $_REQUEST['price'];
        $service->time = $_REQUEST['time'];
        $service->save();
        header('location:/services');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $servicio = Servicio::find($id);
        $servicio->deleteEmployee();
        $servicio->delete();
        header('Location:/services');
    }

    public function pdf()
    {
        ob_start();
        $servicios = Servicio::all();
        require_once('app/views/services/pdf.php');
        $html = ob_get_clean();
        $dompdf = new DOMPDF();
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("Servicios.pdf", array("Attachment" => 0));
    }
}
