<?php

namespace App\Controllers;

use App\Models\Evento;
use Dompdf\Dompdf;

class EventoController
{

    public function index()
    {
        $eventos = Evento::all();
        require 'app/views/events/index.php';
    }

    public function create()
    {
        require 'app/views/events/create.php';
    }

    public function new()
    {
        $event = new Evento();
        $event->name = $_REQUEST['name'];
        $event->client = $_REQUEST['client'];
        $event->details = $_REQUEST['details'];
        $event->start_date = $_REQUEST['start_date'];
        $event->insert();
        header('Location:/evento/');
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $evento = Evento::find($id);
        require 'app/views/events/edit.php';
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        $emp = Evento::find($id);
        $emp->name = $_REQUEST['name'];
        $emp->client = $_REQUEST['client'];
        $emp->details = $_REQUEST['details'];
        $emp->start_date = $_REQUEST['start_date'];
        $emp->save();
        header('Location:/evento/');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $evento = Evento::find($id);
        $evento->delete();
        header('Location:/evento/');
    }

    public function pdf()
    {
        ob_start();
        $eventos = Evento::all();
        require 'app/views/events/pdf.php';
        $html = ob_get_clean();
        $dompdf = new DOMPDF();
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("Servicios.pdf", array("Attachment" => 0));
    }
}
