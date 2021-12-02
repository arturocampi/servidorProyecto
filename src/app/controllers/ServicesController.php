<?php

namespace App\Controllers;

use App\Models\Servicio;
use Dompdf\Dompdf;

class ServicesController
{
    public function show()
    {
        $servicios = Servicio::all();
        require 'app/views/services/index.php';
    }

    public function showCliente()
    {
        $servicios = Servicio::all();
        require 'app/views/services/indexCliente.php';
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
        $servicio = new Servicio();
        $servicio->name = $_REQUEST['name'];
        $servicio->gender = $_REQUEST['gender'];
        $servicio->details = $_REQUEST['details'];
        $servicio->price = $_REQUEST['price'];
        $servicio->time = $_REQUEST['time'];
        $servicio->insert();
        header('Location:/services/show');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $servicio = Servicio::find($id);
        $servicio->delete();
        header('Location:/services/show');
    }

    public function pdf()
    {
        ob_start();
        $servicios = Servicio::all();
        require_once ('app/views/services/pdf.php');
        $html = ob_get_clean();
        $dompdf = new DOMPDF();
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("Servicios.pdf", array("Attachment"=>0));
    }
}
