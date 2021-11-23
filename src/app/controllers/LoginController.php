<?php

namespace App\Controllers;

class LoginController {

    public function index(){
        require 'app/views/login.php';
    }

    public function auth()
    {
        session_start();
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];
        if (($_SESSION['user'] == 'gerente') && ($_SESSION['password'] == 'gerente')) {
            require 'app/views/forms/staff.php';
        } else {
            echo 'Credenciales incorrectas!';
        }
    }
}