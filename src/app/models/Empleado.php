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
        $stmt = $db->prepare('UPDATE employee SET name = :name, surname = :surname, email = :email, details = :details, birthdate = :birthdate WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':birthdate', $this->birthdate);
        return $stmt->execute();
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
        $stmt = $db->prepare('SELECT * FROM employee_service WHERE employee_id = :employee_id');
        $stmt->bindValue(':employee_id', $this->id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Servicio::class);
        $employee_service = $stmt->fetch(PDO::FETCH_CLASS);
        $stmt2 = $db->prepare('SELECT * FROM service WHERE id = :id');
        $stmt2->bindValue(':id', $employee_service->service_id);
        $stmt2->execute();
        $stmt2->setFetchMode(PDO::FETCH_CLASS, Servicio::class);
        $servicios = $stmt2->fetch(PDO::FETCH_CLASS);
        return $servicios;
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
    {
        $password = password_hash($pass, PASSWORD_BCRYPT);
        return $password;
    }

    public static function passwordVerify($pass, $empleado)
    {
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
