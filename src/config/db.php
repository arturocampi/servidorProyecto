<?php

class Database
{

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect()
    {
        $this->servername = 'host.docker.internal';
        $this->username = 'docker';
        $this->password = 'docker';
        $this->dbname = 'docker';
        $this->charset = 'utf8mb4';

        try {
            $dsn = 'mysql:host=' . $this->servername . ';dbname=' . $this->dbname . ';charset=' . $this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Conexión fallida: ' . $e->getMessage();
        }
    }
}
