<?php
require_once 'Movie.php';

// Connect to the DB
$dsn = 'mysql:host=localhost;dbname=movie_db';
$pdo = new PDO($dsn, 'root', '');

$results = $pdo->query('SELECT * FROM movies');
$movies = $results->fetchAll(PDO::FETCH_CLASS, 'Movie');

foreach ($movies as $movie) {
    echo $movie;
    echo $movie->get_title();
    echo '<hr>';
}
