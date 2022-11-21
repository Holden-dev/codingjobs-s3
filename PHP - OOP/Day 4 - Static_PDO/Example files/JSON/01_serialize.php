<?php

/*

JSON :
It's a data/file format which allow to store datas. 
The datas represents an object or an array.

It's really easy to read and the syntax
is simple. It's lightweight and allow
fast data transfer.

Syntax : 
- {...} : Curly braces represents an object
- [...] : Square brackets represents an array
- JSON understands String, Boolean and Numbers


SERIALIZATION
Serialization is the process of converting an object/array into a string.

*/

require_once 'Movie.php';
// 1. Create an object
$fightClub = new Movie('Fight club', '1998-01-01');
$titanic = new Movie('Titanic', '1997-01-01');
$movies = [$fightClub, $titanic];
// 2. Convert it to JSON (serialization)
$json = json_encode($movies, JSON_PRETTY_PRINT);

echo '<pre>';
echo $json;
echo '</pre>';

// echo '<pre>';
// var_dump($fightClub);
// echo '</pre>';
