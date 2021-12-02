<?php

namespace Core;

require_once 'config/db.php';

use const Config\servername;
use const Config\dbname;
use const Config\username;
use const Config\password;

use PDO;

class Model
{
    public static function connect()
    {
        try {
            $dsn = 'mysql:dbname=' . dbname . ';host=' . servername . ';charset=utf8';
            $db = new PDO($dsn, username, password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Conexión fallida: ' . $e->getMessage();
        }
        return $db;
    }
}


// $dsn = 'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['MYSQL_DATABASE'];
// $pdo = new PDO($dsn, $_ENV['MYSQL_USER'], $_ENV['MYSQL_ROOT_PASSWORD']);
