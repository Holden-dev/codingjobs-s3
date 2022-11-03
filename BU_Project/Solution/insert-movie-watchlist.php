<?php

session_start();

require_once 'database.php';
$query = "INSERT INTO watchlist(user_id, movie_id)
VALUES(" . $_SESSION['id'] . "," . $_GET['id'] . ")";

$result = mysqli_query($conn, $query);

header('Location: movies.php');
