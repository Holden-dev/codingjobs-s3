<?php

require_once 'Flower.php';

class FlowerAPIManager
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

        return json_encode($flowers, JSON_PRETTY_PRINT);
    }

    public function find($id)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare('SELECT * FROM flowers WHERE id = :id');
        $prep->bindValue(':id', $id);
        $prep->execute();

        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        $flower = $prep->fetch();
        $pdo = null;

        return json_encode($flower, JSON_PRETTY_PRINT);
    }

    public function findByName($name)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare('SELECT * FROM flowers WHERE name LIKE :name');
        $prep->bindValue(':name', "%$name%");
        $prep->execute();

        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        $flower = $prep->fetchAll();
        $pdo = null;

        return json_encode($flower, JSON_PRETTY_PRINT);
    }


    public function sortBy($column, $direction)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare("SELECT * 
        FROM flowers
        ORDER BY $column $direction");
        // $prep->bindValue(':column', $column, PDO::PARAM_INT);
        // $prep->bindValue(':direction', $direction);
        $prep->execute();

        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        $flower = $prep->fetchAll();
        $pdo = null;

        return json_encode($flower, JSON_PRETTY_PRINT);
    }
}
