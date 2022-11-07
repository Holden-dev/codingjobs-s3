<?php


$nbPage = 1;

if (isset($_GET['page']))
    $nbPage = $_GET['page'];

$howManyPerPage = 2;
$start = $howManyPerPage * ($nbPage - 1);

$conn = mysqli_connect('localhost', 'root', '', 'spotify');

// Retrieve songs
$query = "SELECT title, type
FROM songs s
INNER JOIN categories c ON s.categ_id = c.id
LIMIT $start, $howManyPerPage";
$result = mysqli_query($conn, $query);
$songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Get the total number of pages
$query = "SELECT COUNT(*) as nbSongs FROM songs";
$result = mysqli_query($conn, $query);
$queryResult = mysqli_fetch_assoc($result);
$totalPages = $queryResult['nbSongs'] / $howManyPerPage;

mysqli_close($conn);

$previous = $nbPage - 1;
$next = $nbPage + 1;

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

    <h1>Songs List</h1>

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

    <?php if ($nbPage > 1) : ?>
        <a href="songs.php?page=<?= $previous ?>">Previous</a>
    <?php endif; ?>

    <?php if ($nbPage < $totalPages) : ?>
        <a href="songs.php?page=<?= $next ?>">Next</a>
    <?php endif; ?>
</body>

</html>