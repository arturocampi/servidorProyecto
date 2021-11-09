<?php

class App
{
    public function __construct()
    {
        session_start();
        if (isset($_GET['url']) and !empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }
        
        $controllerName = array_shift($arguments);
        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }
    }
}
