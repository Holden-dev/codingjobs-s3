<?php

// Retrieve id from the URL
$id = $_GET['id'];
// Query the DB
$pdo = new PDO('mysql:host=localhost;dbname=spotify', 'root', '');
$prep = $pdo->prepare('SELECT * 
FROM songs 
INNER JOIN artists ON artists.id = songs.artist_id
WHERE songs.id = :id');
$prep->bindValue(':id', $id);
$prep->execute();

$song = $prep->fetch(PDO::FETCH_ASSOC);
$pdo = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Title : <?= $song['title']; ?></p>
    <p>Date : <?= $song['release_date']; ?></p>
    <p>Artist : <?= $song['name']; ?></p>
    <hr>
</body>

</html>