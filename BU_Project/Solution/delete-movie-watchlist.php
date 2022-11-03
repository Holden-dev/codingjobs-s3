<?php

session_start();

require_once 'database.php';
$query = "DELETE FROM watchlist WHERE movie_id = " . $_GET['id'] . " AND user_id = " . $_SESSION['id'];
$result = mysqli_query($conn, $query);

header('Location: account.php');
