<?php

class ArtistModel
{
    private function get_pdo()
    {
        return new PDO('mysql:host=localhost;dbname=spotify', 'root', '');
    }

    public function find_all()
    {
        $pdo = $this->get_pdo();
        $results = $pdo->query('SELECT * FROM artists');
        $artists = $results->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;

        return $artists;
    }
}
