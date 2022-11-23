<?php

namespace Flowers\Utilities;

require_once 'Flower.php';

use \PDO;

class FlowerManager
{
    private function get_pdo()
    {
        return new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
    }

    public function findAll()
    {
        $pdo = $this->get_pdo();
        $results = $pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
        $pdo = null;

        return $flowers;
    }

    public function find($id)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare('SELECT * FROM flowers WHERE id = :id');
        $prep->bindValue(':id', $id);
        $prep->execute();

        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flowers\Flower');
        $flower = $prep->fetch();
        $pdo = null;

        return $flower;
    }

    // New function : insert flower
    public function insert_flower($name, $price)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare('INSERT INTO flowers(name, price)
        VALUES(:name, :price)');
        $prep->bindValue(':name', $name);
        $prep->bindValue(':price', $price);
        $result = $prep->execute();
        $pdo = null;

        return $result;
    }
}
