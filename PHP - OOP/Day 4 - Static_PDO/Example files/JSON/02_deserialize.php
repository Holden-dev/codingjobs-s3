<?php
/*
DESERIALIZATION
Deserialization is the process of converting a string into an array/object.
*/

// 1. Get the content of the JSON
$jsonFile = file_get_contents("movie.json");

// 2. Desezialise
$movies = json_decode($jsonFile);

echo '<pre>';
var_dump($movies);
echo '</pre>';
