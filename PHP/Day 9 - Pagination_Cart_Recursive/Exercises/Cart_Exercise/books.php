<?php


$nbPage = 1;

if (isset($_GET['page']))
    $nbPage = $_GET['page'];

$howManyPerPage = 2;
$start = $howManyPerPage * ($nbPage - 1);

$conn = mysqli_connect('localhost', 'root', '', 'book_shop');

// Retrieve books
$query = "SELECT title, price
FROM books
LIMIT $start, $howManyPerPage";
$result = mysqli_query($conn, $query);
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Get the total number of pages
$query = "SELECT COUNT(*) as nbBooks FROM books";
$result = mysqli_query($conn, $query);
$queryResult = mysqli_fetch_assoc($result);
$totalPages = $queryResult['nbBooks'] / $howManyPerPage;

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

    <?php require_once 'nav.php'; ?>

    <h1>Books List</h1>

    <?php foreach ($books as $book) : ?>

        <p>
            <strong>Title : </strong>
            <?= $book['title']; ?>
        </p>

        <p>
            <strong>Price : </strong>
            <?= $book['price']; ?>
        </p>

        <hr>

    <?php endforeach; ?>

    <?php if ($nbPage > 1) : ?>
        <a href="books.php?page=<?= $previous ?>">Previous</a>
    <?php endif; ?>

    <?php if ($nbPage < $totalPages) : ?>
        <a href="books.php?page=<?= $next ?>">Next</a>
    <?php endif; ?>
</body>

</html>