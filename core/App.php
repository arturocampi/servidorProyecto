<?php

class App
{
    public function __construct()
    {
        session_start();
    }

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'run';
        }
        $this->run();
    }
}
