<?php


$nbPage = 1;

if (isset($_GET['page']))
    $nbPage = $_GET['page'];

$howManyPerPage = 2;
$start = $howManyPerPage * ($nbPage - 1);

$conn = mysqli_connect('localhost', 'root', '', 'spotify');
$query = "SELECT title, type
FROM songs s
INNER JOIN categories c ON s.categ_id = c.id
LIMIT $start, $howManyPerPage";
$result = mysqli_query($conn, $query);
$songs = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($conn);
$currentPage = $_GET['page'];
$previous = $currentPage - 1;
$next = $currentPage + 1;


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
    <a href="songs.php?page=<?= $previous ?>">Previous</a>
    <a href="songs.php?page=<?= $next ?>">Next</a>
</body>

</html>