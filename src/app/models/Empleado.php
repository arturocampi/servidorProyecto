<?php

namespace App\Models;

use PDO;
use Core\Model;

require_once '../core/Model.php';

class Empleado extends Model
{
    public $nombre;
    public $apellido;
    public $telefono;
    public $edad;
    public $sexo;
    public $horario;
    public $sueldo;

    // public function __construct($nombre, $apellido, $telefono, $edad, $sexo, $horario, $sueldo)
    // {
    //     nombre = $nombre;
    //     apellido = $apellido;
    //     telefono = $telefono;
    //     edad = $edad;
    //     sexo = $sexo;
    //     horario = $horario;
    //     sueldo = $sueldo;
    // }

    public static function all()
    {
        // Obtenemos la conexión primero
        $db = Empleado::connect();
        // Preparamos la consulta
        $sql = 'SELECT * FROM empleados';
        // Ejecutamos la orden
        $statement  = $db->query($sql);
        // Recogemos los datos con fetch_all
        $empleados = $statement->fetch_all(PDO::FETCH_CLASS, User::class);
        // Devuelbe los empleados 
        return $empleados;
    }

    public function insert()
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('INSERT INTO empleados(nombre, apellido, telefono, edad, sexo, horario, sueldo) VALUES(:nombre, :apellido, :telefono, :edad, :sexo, :horario, :sueldo)');
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':apellido', $this->apellido);
        $stmt->bindValue(':telefono', $this->telefono);
        $stmt->bindValue(':edad', $this->edad);
        $stmt->bindValue(':sexo', $this->sexo);
        $stmt->bindValue(':horario', $this->horario);
        $stmt->bindValue(':sueldo', $this->sueldo);
        return $stmt->execute();
    }
}
