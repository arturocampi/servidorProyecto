<?php

namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

class Empleado extends Model
{
    public function __construct()
    {
        if (isset($this->birthdate)) {
            $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
        }
    }

    public static function all()
    {
        $db = Empleado::connect();
        $sql = 'SELECT * FROM employee';
        $statement  = $db->query($sql);
        $empleados = $statement->fetchAll(PDO::FETCH_CLASS, Empleado::class);
        return $empleados;
    }

    public function insert()
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('INSERT INTO employee(name, surname, email, details, birthdate, password) VALUES(:name, :surname, :email, :details, :birthdate, :password)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':password', $this->password);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('UPDATE employee SET name = :name, surname = :surname, email = :email, details = :details, birthdate = :birthdate, password = :password WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':password', $this->password);
        return $stmt->execute();
    }

    public function saveService($id, $servicios)
    {
        $db = Empleado::connect();
        $sql = 'SELECT * FROM service';
        $statement  = $db->query($sql);
        $nameServices = $statement->fetchAll(PDO::FETCH_CLASS, Servicio::class);
        foreach ($nameServices as $nameService) {
            $index = ($nameService->id) - 1;
            if ($nameService->name == $servicios[$index]) {
                $stmt = $db->prepare('UPDATE employee_service es join service s on (s.id= es.service_id) SET service_id = :service_id WHERE es.employee_id = :id');
                $stmt->bindValue(':id', $id);
                $stmt->bindValue(':service_id', $nameService->id);
                return $stmt->execute();
            }
        }
    }

    public static function find($id)
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('SELECT * FROM employee WHERE id = :id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Empleado::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        return $user;
    }

    public static function findbyEmail($email)
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('SELECT * FROM employee WHERE email=:email');
        $stmt->execute(array(':email' => $email));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Empleado::class);
        $empleado = $stmt->fetch(PDO::FETCH_CLASS);
        return $empleado;
    }

    public function __get($atributoDesconocido)
    {
        if (method_exists($this, $atributoDesconocido)) {
            $this->$atributoDesconocido = $this->$atributoDesconocido();
            return $this->$atributoDesconocido;
        }
    }

    public function service()
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('SELECT * FROM employee_service es join service s on (s.id= es.service_id) WHERE es.employee_id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();
        $employee_service = $stmt->fetchAll(PDO::FETCH_CLASS, Servicio::class);
        return $employee_service;
    }

    public function setPassword($password)
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $db = Empleado::connect();
        $stmt = $db->prepare('UPDATE employee SET password = :password WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        return $password;
    }

    public function encryptPassword($pass)
<<<<<<< HEAD
    {
        $password = password_hash($pass, PASSWORD_BCRYPT);
        return $password;
    }

    public static function passwordVerify($pass, $empleado)
    {
=======
    {
        $password = password_hash($pass, PASSWORD_BCRYPT);
        return $password;
    }

    public static function passwordVerify($pass, $empleado)
    {
>>>>>>> arthur
        return password_verify($pass, $empleado->password);
    }

    public function delete()
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('DELETE FROM employee WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
