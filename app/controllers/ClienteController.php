<?php

class ClienteController
{

    function __construct()
    {
        echo "HomeController -> construct <br>";
    }

    public function index()
    {
        require "app/views/cliente.php";
    }
}
