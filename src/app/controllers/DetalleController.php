<?php

namespace App\Controllers;

use App\Models\DetalleEvento;
use Dompdf\Dompdf;

class DetalleController
{
    public function index($arguments)
    {
        $id = (int) $arguments[0];
        $detalles = DetalleEvento::find($id);
        require 'app/views/detail_event/index.php';
    }

    public function add($arguments)
    {
        $id = (int) $arguments[0];
        require 'app/views/detail_event/add.php';
    }

    public function create($arguments)
    {
        $id = (int) $arguments[0];
        require 'app/views/detail_event/create.php';
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $detalle = DetalleEvento::findSpecific($id);
        require 'app/views/detail_event/edit.php';
    }

    public function pdf($arguments)
    {
        ob_start();
        $id = (int) $arguments[0];
        $detalles = DetalleEvento::find($id);
        require 'app/views/detail_event/pdf.php';
        $html = ob_get_clean();
        $dompdf = new DOMPDF();
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("Servicios.pdf", array("Attachment" => 0));
    }

    public function new()
    {
        $id = $_REQUEST['id'];
        $detail = new DetalleEvento();
        $detail->event_id = $id;
        $detail->line = $_REQUEST['line'];
        $detail->name = $_REQUEST['name'];
        $detail->quantity = $_REQUEST['quantity'];
        $detail->details = $_REQUEST['details'];
        $detail->price = $_REQUEST['price'];
        $detail->insert();
        $ref = '/detalle/index/' . $id;
        header("Location: $ref ");
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        $line = $_REQUEST['line'];
        $detalle = DetalleEvento::findSpecific($line);
        $detalle->name = $_REQUEST['name'];
        $detalle->quantity = $_REQUEST['quantity'];
        $detalle->details = $_REQUEST['details'];
        $detalle->price = $_REQUEST['price'];
        $detalle->save();
        $ref = '/detalle/index/' . $id;
        header("Location: $ref ");
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $detalle = DetalleEvento::findSpecific($id);
        $ref = '/detalle/index/' . $detalle->event_id;
        $detalle->delete();
        header("Location: $ref ");
    }
}
