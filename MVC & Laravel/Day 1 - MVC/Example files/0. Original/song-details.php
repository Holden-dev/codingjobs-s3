<?php

$pdo = new PDO('mysql:host=localhost;dbname=spotify', 'root', '');

$id = $_GET['id'];
$prep = $pdo->prepare('SELECT * FROM songs WHERE id = :id');
$prep->bindValue(':id', $id);
$prep->execute();
$song = $prep->fetch(PDO::FETCH_ASSOC);
$pdo = null;

echo 'Title : ' . $song['title'] . '<br>';
echo 'Date : ' . $song['release_date'] . '<br>';
echo '<hr>';
