<?php

session_start();

$bookId = $_GET['id'];

unset($_SESSION['cart'][$bookId]);

header('Location: cart.php');
