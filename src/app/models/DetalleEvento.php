<?php

namespace App\Models;

use PDO;
use Core\Model;

class DetalleEvento extends Model
{
    public static function find($id)
    {
        $db = DetalleEvento::connect();
        $stmt = $db->prepare('SELECT * FROM detail_event WHERE event_id = :id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, DetalleEvento::class);
        $detalles = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $detalles;
    }

    public static function findSpecific($id)
    {
        $db = DetalleEvento::connect();
        $stmt = $db->prepare('SELECT * FROM detail_event WHERE line = :id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, DetalleEvento::class);
        $detalles = $stmt->fetch(PDO::FETCH_CLASS);
        return $detalles;
    }

    public function insert()
    {
        $db = DetalleEvento::connect();
        $stmt = $db->prepare('INSERT INTO detail_event(event_id, line, name, quantity, details, price) VALUES(:event_id, :line, :name, :quantity, :details, :price)');
        $stmt->bindValue(':event_id', $this->event_id);
        $stmt->bindValue(':line', $this->line);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':quantity', $this->quantity);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':price', $this->price);
        return $stmt->execute();
    }

    public function save()
    {
        $db = DetalleEvento::connect();
        $stmt = $db->prepare('UPDATE detail_event SET name = :name, quantity = :quantity, details = :details, price = :price WHERE line = :id');
        $stmt->bindValue(':id', $this->line);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':quantity', $this->quantity);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':price', $this->price);
        return $stmt->execute();
    }

    public function delete()
    {
        $db = DetalleEvento::connect();
        $stmt = $db->prepare('DELETE FROM detail_event WHERE line = :id');
        $stmt->bindValue(':id', $this->line);
        return $stmt->execute();
    }
}
