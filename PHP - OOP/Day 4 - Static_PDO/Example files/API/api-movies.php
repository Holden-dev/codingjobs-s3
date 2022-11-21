<?php

require_once 'Flower.php';

$pdo = new PDO('mysql:host=localhost;dbname=flower_db', 'root', '');
$results = $pdo->query('SELECT * FROM flowers');
$flowers = $results->fetchAll(PDO::FETCH_CLASS, 'Flower');
$pdo = null;

echo json_encode($flowers);
