<?php

namespace App\Models;

use PDO;
use Core\Model;

class Evento extends Model
{
    public static function all()
    {
        $db = Evento::connect();
        $sql = 'SELECT * FROM event';
        $statement  = $db->query($sql);
        $eventos = $statement->fetchAll(PDO::FETCH_CLASS, Evento::class);
        return $eventos;
    }

    public function insert()
    {
        $db = Evento::connect();
        $stmt = $db->prepare('INSERT INTO event(name, client, details, start_date) VALUES(:name, :client, :details, :start_date)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':client', $this->client);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':start_date', $this->start_date);
        return $stmt->execute();
    }

    public static function find($id)
    {
        $db = Evento::connect();
        $stmt = $db->prepare('SELECT * FROM event WHERE id = :id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Evento::class);
        $evento = $stmt->fetch(PDO::FETCH_CLASS);
        return $evento;
    }

    public function save()
    {
        $db = Evento::connect();
        $stmt = $db->prepare('UPDATE event SET name = :name, client = :client, details = :details, start_date = :start_date WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':client', $this->client);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':start_date', $this->start_date);
        return $stmt->execute();
    }

    public function complete()
    {
        $db = Evento::connect();
        $stmt = $db->prepare('INSERT INTO event(name, cliente, details, start_date) VALUES(:name, :cliente, :details, :start_date)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':cliente', $this->cliente);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':start_date', $this->start_date);
        return $stmt->execute();
    }

    public function delete()
    {
        $db = Evento::connect();
        $stmt = $db->prepare('DELETE FROM event WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
