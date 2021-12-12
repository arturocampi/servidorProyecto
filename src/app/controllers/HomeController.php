<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        require 'app/views/home.php';
    }

    public function admin(){
        require 'app/views/admin.php';
    }
}
