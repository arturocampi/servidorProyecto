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
        $sql = 'SELECT * FROM service';
        // Ejecutamos la orden
        $statement  = $db->query($sql);
        // Recogemos los datos con fetch_all
        $servicios = $statement->fetchAll(PDO::FETCH_CLASS, Servicio::class);
        // Devuelbe los empleados 
        return $servicios;
    }

    public static function find($id)
    {
        $db = Servicio::connect();
        $stmt = $db->prepare('SELECT * FROM service WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Servicio::class);
        $servicio = $stmt->fetch(PDO::FETCH_CLASS);
        return $servicio;
    }

    public function __get($atributoDesconocido)
    {
        if (method_exists($this, $atributoDesconocido)) {
            $this->$atributoDesconocido = $this->$atributoDesconocido();
            return $this->$atributoDesconocido;
        }
    }

    public function employee()
    {
        $db = Servicio::connect();
        $stmt = $db->prepare('SELECT * FROM employee_service es join employee e on (e.id = es.employee_id) WHERE es.service_id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
        $service_employee = $stmt->fetchAll(PDO::FETCH_CLASS, Empleado::class);
        return $service_employee;
    }

    public function insert()
    {
        $db = Servicio::connect();
        $stmt = $db->prepare('INSERT INTO service(name, gender, details, price, time) VALUES(:name, :gender, :details, :price, :time)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':gender', $this->gender);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':price', $this->price);
        $stmt->bindValue(':time', $this->time);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Servicio::connect();
        $stmt = $db->prepare('UPDATE service SET name = :name, gender = :gender, details = :details, price = :price, time = :time WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':gender', $this->gender);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':price', $this->price);
        $stmt->bindValue(':time', $this->time);
        return $stmt->execute();
    }

    public function delete()
    {
        $db = Servicio::connect();
        $stmt = $db->prepare('DELETE FROM service WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }

    public function deleteEmployee()
    {
        $db = Servicio::connect();
        $stmt = $db->prepare('DELETE FROM employee_service WHERE service_id = :id');
        $stmt->bindValue('id', $this->id);
        return $stmt->execute();
    }
}
