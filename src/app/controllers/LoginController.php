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
        $email = $_POST['email'];
        $password = $_POST['password'];
        $empleado = Empleado::findbyEmail($email);
        if ($empleado == false) {
            $_SESSION['message'] = 'Error el usuario no existe.';
            header('Location:/login');
        } else {
            if (Empleado::passwordVerify($password, $empleado)) {
                $_SESSION['empleado'] = $empleado;
                header('Location:/home');
            } else {
                $_SESSION['message'] = 'Error, la contraseña es incorrecta.';
                header('Location:/login');
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header('location:/home');
    }
}
