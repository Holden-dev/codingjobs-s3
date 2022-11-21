<?php

class FlowerManager
{
    
    public function findAll()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
        $results = $pdo->query('SELECT * FROM flowers');
        $flowers = $results->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;

        return $flowers;
    }

    public function find($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
        $prep = $pdo->prepare('SELECT * FROM flowers WHERE id = :id');
        $prep->bindValue(':id', $id);
        $prep->execute();
        $flower = $prep->fetch(PDO::FETCH_ASSOC);
        $pdo = null;

        return $flower;
    }
}
