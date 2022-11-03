<?php

session_start();

// Check for id in the URL
if (!isset($_GET['id'])) {
    die('You should not access this page');
} else if (!is_numeric($_GET['id'])) {
    die('Trying to access something forbidden, mate.');
}

// Handle query
require_once 'database.php';
$query = "SELECT * FROM movies WHERE id = " . $_GET['id'];;
$result = mysqli_query($conn, $query);
$movie = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php require_once 'nav.php'; ?>

    <h1><?= $movie['title']; ?></h1>

    <div id="movie-details">
        <div class="movie-card">
            <img src="./assets/img/posters/<?= $movie['poster']; ?>" alt="">

            <p>
                <strong>Release date : </strong>
                <?= $movie['release_date']; ?>
            </p>

            <p>
                <strong>Description : </strong>
                <?= $movie['description']; ?>
            </p>
        </div>
    </div>
</body>

</html>