<?php

namespace App\Controllers;

use App\Models\Empleado;

class LoginController
{

    public function index()
    {
        require 'app/views/login.php';
    }

    public function auth()
    {
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = Empleado::findbyEmail($email);
        if ($user == false) {
            $_SESSION['message'] = 'Error el usuario no existe.';
            header('Location:/login');
        } else {
            if (Empleado::passwordVerify($password, $user)) {
                $_SESSION['user'] = $user;
                header('Location:/home');
            } else {
                $_SESSION['message'] = 'Error, la contraseña es incorrecta.';
                header('Location:/login');
            }
        }
    }

    public function logout(){
        session_destroy();
        require 'app/views/login.php';
    }
}
