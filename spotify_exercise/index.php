<?php

$conn = mysqli_connect('localhost', 'root', '', 'spotify');
$query = "SELECT title, type
FROM songs s
INNER JOIN categories c ON s.categ_id = c.id
ORDER BY release_date DESC
LIMIT 3";

$result = mysqli_query($conn, $query);
$songs = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($conn);

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
    <?php require_once 'nav.html'; ?>

    <h1>Home page</h1>
    <h3>Welcome to my beautiful website</h3>

    <h4>Latest songs : </h4>
    <?php foreach ($songs as $song) : ?>

        <p>
            <strong>Title : </strong>
            <?= $song['title']; ?>
        </p>

        <p>
            <strong>Type : </strong>
            <?= $song['type']; ?>
        </p>

        <hr>

    <?php endforeach; ?>

</body>

</html>