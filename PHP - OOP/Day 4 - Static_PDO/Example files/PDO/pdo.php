<?php

/*
    PDO - PHP Data Object

    PDO is an abstraction layer to access/manipulate databases.
    It can handle around 12 different types of DB.

    PDO is using OOP.

*/

// 1. Connect to the DB
$pdo = new PDO('mysql:host=localhost;dbname=movie_db', 'root', '');

// 2. Create the query and execute
// $result = $pdo->exec('DELETE FROM movies WHERE id = 13');
// exec() only returns the number of records that were affected by the query

$result = $pdo->query('SELECT * FROM movies');

// 3. Fetch the results
$movies = $result->fetchAll(PDO::FETCH_ASSOC);

foreach ($movies as $movie) {
    echo $movie['title'] . '<br>';
}

// Close the connection
$pdo = null;

echo "<pre>";
var_dump($movies);
echo "</pre>";
