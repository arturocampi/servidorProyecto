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
        $empleados = $statement->fetchAll(PDO::FETCH_CLASS, Empleado::class);
        // Devuelbe los empleados 
        return $empleados;
    }

    public function find($id){
        $db = Empleado::connect();
        $stmt = $db->prepare('SELECT * FROM empleados WHERE id = :id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Empleados::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        return $user;
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

    public function save()
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('UPDATE empleados SET nombre = :nombre, apellido = :apellido, telefono = :telefono, edad = :edad, sexo = :sexo, horario = :horario, sueldo = :sueldo WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':apellido', $this->apellido);
        $stmt->bindValue(':telefono', $this->telefono);
        $stmt->bindValue(':edad', $this->edad);
        $stmt->bindValue(':sexo', $this->sexo);
        $stmt->bindValue(':horario', $this->horario);
        $stmt->bindValue(':sueldo', $this->sueldo);
        return $stmt->execute();
    }

    public function delete(){
        $db = Empleado::connect();
        $stmt = $db->prepare('DELETE FROM empleados WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
