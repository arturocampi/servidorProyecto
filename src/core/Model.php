<?php

namespace Core;

use const Config\servername;
use const Config\dbname;
use const Config\charset;
use const Config\username;
use const Config\password;

use PDO;

class Model
{
    public static function connect()
    {
        try {
            $dsn = 'mysql:host=' . servername . ';dbname=' . dbname . ';charset=' . charset;
            $pdo = new PDO($dsn, username, password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Conexión fallida: ' . $e->getMessage();
        }
        return $pdo;
    }
}
