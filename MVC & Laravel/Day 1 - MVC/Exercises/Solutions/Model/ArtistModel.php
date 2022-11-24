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

    public function insert_artist($name, $gender, $birth_date, $bio)
    {
        $pdo = $this->get_pdo();
        $prep = $pdo->prepare("INSERT INTO artists(name, gender, date_of_birth, bio)
        VALUES(:name, :gender, :date_of_birth, :bio)");
        $result = $prep->execute([':name' => $name, ':gender' => $gender, ':date_of_birth' => $birth_date, ':bio' => $bio]);

        return $result;
    }
}
