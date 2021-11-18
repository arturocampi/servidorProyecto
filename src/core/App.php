<?php

namespace Core;

class App
{
    function __construct()
    {
        //Recoges el nombre del controlador
        if (isset($_GET['url']) and !empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }
        //Le damos el nombre completo al controlador pasado
        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments);
        $controllerName = ucwords($controllerName) . "Controller";
        //Recoges el nombre del método
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }
        //Instanciamos al controlador
        $file = "app/controllers/$controllerName" . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
        //Creamos un objeto del controlador
        //Llamamos al método pasado del controlador
        $controllerName = '\\App\\Controllers\\' . $controllerName;
        $controllerObject = new $controllerName;
        if (method_exists($controllerName, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
    }
}
