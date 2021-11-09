<?php

class HomeController
{

    function __construct()
    {
        echo "HomeController -> construct <br>";
    }

    public function index()
    {
        require "app/views/home.php";
    }
}
