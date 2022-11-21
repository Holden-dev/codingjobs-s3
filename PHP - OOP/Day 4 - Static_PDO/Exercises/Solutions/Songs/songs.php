<?php

// 1. Connect to the DB
$pdo = new PDO('mysql:host=localhost;dbname=spotify', 'root', '');
$results = $pdo->query('SELECT songs.*, artists.name 
FROM songs 
INNER JOIN artists ON artists.id = songs.artist_id');
$songs = $results->fetchAll(PDO::FETCH_ASSOC);
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
    <?php foreach ($songs as $song) : ?>

        <p>Title : <?= $song['title']; ?></p>
        <p>Date : <?= $song['release_date']; ?></p>
        <p>Artist : <?= $song['name']; ?></p>
        <a href="./song-details.php?id=<?= $song['id']; ?>">Detail page</a>
        <hr>
    <?php endforeach; ?>
</body>

</html>