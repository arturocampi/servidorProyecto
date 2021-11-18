<?php

namespace App\Models;

use PDO;
use Core\Model;

require_once '../core/Model.php';

class Particular extends Model
{
    public function insert()
    {
        $db = Particular::connect();
        $stmt = $db->prepare('INSERT INTO particulares(nombre, apellido, telefono, email, fecha, sexo, peinado) VALUES(:nombre, :apellido, :telefono, :email, :fecha, :sexo, :peinado)');
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':apellido', $this->apellido);
        $stmt->bindValue(':telefono', $this->telefono);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':fecha', $this->fecha);
        $stmt->bindValue(':sexo', $this->sexo);
        $stmt->bindValue(':peinado', $this->peinado);
        return $stmt->execute();
    }

    public static function all()
    {
        // Obtenemos la conexión primero
        $db = Particular::connect();
        // Preparamos la consulta
        $sql = 'SELECT * FROM particulares';
        // Ejecutamos la orden
        $statement = $db->query($sql);
        // Recogemos los datos con fetch_all
        $eventos = $statement->fetchAll(PDO::FETCH_CLASS, Particular::class);
        // Devuelbe los empleados
        return $eventos;
    }

    public function find($id){
        $db = Particular::connect();
        $stmt = $db->prepare('SELECT * FROM particulares WHERE id = :id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Particular::class);
        $citas = $stmt->fetch(PDO::FETCH_CLASS);
        return $citas;
    }
}
