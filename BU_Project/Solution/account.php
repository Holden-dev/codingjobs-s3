<?php

session_start();

// If user is not loggued in, redirect to login page
if (!isset($_SESSION['email']))
    header('Location: login.php');

// Retrieve watchlist content
require_once 'database.php';
$result = mysqli_query($conn, "SELECT movies.*
FROM users 
INNER JOIN watchlist ON watchlist.user_id = users.id 
INNER JOIN movies ON watchlist.movie_id = movies.id 
WHERE email = '" . $_SESSION['email'] . "'");
$watchlist = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/account.css">
</head>

<body class="container">
    <nav id="main-navbar">
    </nav>

    <h1>Account page</h1>

    <img width="100px" src="assets/img/pictures/<?= $_SESSION['picture'] ?>" alt="User picture">

    <p>
        <strong>Name : </strong>
        <?= $_SESSION['name'] ?>
    </p>

    <p>
        <strong>Email : </strong>
        <?= $_SESSION['email'] ?>
    </p>

    <div id="watch-list">
        <h3>Watch List</h3>

        <?= (empty($watchlist) ? 'No movies in the watchlist' : '') ?>

        <?php foreach ($watchlist as $movieToWatch) : ?>
            <div class="watchlist-card">
                <p><a href="./movie-details.php?id=<?= $movieToWatch['id']; ?>"><?= $movieToWatch['title']; ?></a> (<?= substr($movieToWatch['release_date'], 0, 4) ?>) <a href="./delete-movie-watchlist.php?id=<?= $movieToWatch['id']; ?>">Delete</a></p>
            </div>
        <?php endforeach; ?>

    </div>

    <script>
        // Include navbar
        fetch('nav.php', {
                method: 'get',
            }).then(res => res.text())
            .then(function(result) {
                document.getElementById('main-navbar').innerHTML = result;
            });
    </script>
</body>

</html>