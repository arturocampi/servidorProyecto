<?php

namespace App\Models;

use PDO;
use Core\Model;

class Servicio extends Model
{
    public static function all()
    {
        // Obtenemos la conexión primero
        $db = Servicio::connect();
        // Preparamos la consulta
        $sql = 'SELECT * FROM empleados';
        // Ejecutamos la orden
        $statement  = $db->query($sql);
        // Recogemos los datos con fetch_all
        $servicios = $statement->fetchAll(PDO::FETCH_CLASS, Servicio::class);
        // Devuelbe los empleados 
        return $servicios;
    }
}
