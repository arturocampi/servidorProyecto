<?php

namespace App\Models;

use PDO;
use Core\Model;

class Empleado extends Model
{
    public function insert()
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('INSERT INTO employee(id,name, surname, email, details, birthdate, password, active,admin) VALUES(:id,:name, :surname, :email, :details, :birthdate, :password, :active,:admin)');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':password', $this->password);
        $stmt->bindValue(':active', 1);
        $stmt->bindValue(':admin', 1);
        return $stmt->execute();
    }

    public static function all()
    {
        // Obtenemos la conexión primero
        $db = Empleado::connect();
        // Preparamos la consulta
        $sql = 'SELECT * FROM employee';
        // Ejecutamos la orden
        $statement  = $db->query($sql);
        // Recogemos los datos con fetch_all
        $empleados = $statement->fetchAll(PDO::FETCH_CLASS, Empleado::class);
        // Devuelbe los empleados 
        return $empleados;
    }

    public function find($id)
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('SELECT * FROM employee WHERE id = :id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Empleados::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        return $user;
    }

    public static function findbyEmail($email)
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('SELECT * FROM employee WHERE email=:email');
        $stmt->execute(array(':email' => $email));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Empleado::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        return $user;
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

    public function passwordVerify($password, $user)
    {
        return password_verify($password, $user->$password);
    }

    public function save()
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('UPDATE employee SET id =:id, name = :name, surname = :surname, email = :email, details = :details, birthdate = :birthdate, password = :password, active = :active,admin = :admin) VALUES(id =:id, name = :name, surname = :surname, email = :email, details = :details, birthdate = :birthdate, password = :password, active = :active,admin = :admin)');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':password', $this->password);
        $stmt->bindValue(':active', 1);
        $stmt->bindValue(':admin', 1);
        return $stmt->execute();
    }

    public function delete()
    {
        $db = Empleado::connect();
        $stmt = $db->prepare('DELETE FROM employee WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
