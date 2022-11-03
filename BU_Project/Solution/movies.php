<?php

session_start();

// Message placeholder
$msg = '';

// Handle query
require_once 'database.php';
$query = "SELECT * FROM movies";

// Check if search
if (isset($_POST['searchBtn'])) {
    $query .= " WHERE title LIKE '%" . $_POST['searchBox'] . "%'";
    $msg = "Searching for : " . $_POST['searchBox'];
}

// Sort by title OR date
if (isset($_GET['sortBtn'])) {
    if (isset($_GET['filter_title']))
        $query .= " ORDER BY title " . $_GET['filter_title'];
    else
        $query .= " ORDER BY release_date " . $_GET['filter_date'];
}

$result = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <h1>Movies list</h1>

    <form id="movies-search" method="POST">
        <input type="text" name="searchBox" placeholder="Type title of a movie...">
        <input type="submit" name="searchBtn" value="Search">
    </form>

    <div id="movies-filter">
        <form>
            <label for="filter_title">Sort by title</label>

            <select name="filter_title" id="filter_title">
                <option value="asc">ASC</option>
                <option value="desc">DESC</option>
            </select>

            <input type="submit" name="sortBtn" value="Sort">
        </form>

        <form>
            <label for="filter_date">Sort by date</label>

            <select name="filter_date" id="filter_date">
                <option value="asc">ASC</option>
                <option value="desc">DESC</option>
            </select>

            <input type="submit" name="sortBtn" value="Sort">
        </form>
    </div>

    <p class="message"><?= $msg; ?></p>

    <div id="movies-list">
        <?php foreach ($movies as $movie) : ?>
            <div class="movie-card">
                <img src="./assets/img/posters/<?= $movie['poster']; ?>" alt="">

                <p>
                    <a href="./movie-details.php?id=<?= $movie['id']; ?>"><?= $movie['title']; ?></a>

                    (<?= substr($movie['release_date'], 0, 4) ?>)
                </p>

                <p><?= strlen($movie['description']) > 30 ? substr($movie['description'], 0, 30) . '...' : $movie['description'] ?></p>

                <?php if (isset($_SESSION['email'])) : ?>
                    <a href="./insert-movie-watchlist.php?id=<?= $movie['id']; ?>">Add to my watchlist</a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>