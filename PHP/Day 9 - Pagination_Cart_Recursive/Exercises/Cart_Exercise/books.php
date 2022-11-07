<?php

session_start();
// session_destroy();
$msg = '';

// Add to cart
if (isset($_POST['addToCart'])) {
    if (!empty($_POST['title']) && !empty($_POST['price'])) {

        // Retrieve id in a variable
        $bookId = $_POST['id'];

        // Prepare the book to be added to the Cart
        $bookToAdd = [
            'title' => $_POST['title'],
            'price' => $_POST['price'],
            'qty' => 1
        ];

        // Check if the book is already in the cart
        if (isset($_SESSION['cart'][$bookId])) {
            // If yes, edit the quantity (+1) in the cart
            $_SESSION['cart'][$bookId]['qty'] += 1;
        } else {
            // If not, push the book in the cart
            $_SESSION['cart'][$bookId] = $bookToAdd;
        }

        $msg = 'Added to cart!';
    }
}

$nbPage = 1;

if (isset($_GET['page']))
    $nbPage = $_GET['page'];

$howManyPerPage = 2;
$start = $howManyPerPage * ($nbPage - 1);

$conn = mysqli_connect('localhost', 'root', '', 'book_shop');

// Retrieve books
$query = "SELECT id, title, price
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

    <?= $msg; ?>

    <?php foreach ($books as $book) : ?>

        <p>
            <strong>Title : </strong>
            <?= $book['title']; ?>
        </p>

        <p>
            <strong>Price : </strong>
            <?= $book['price']; ?>
        </p>

        <form method="post">
            <input type="hidden" name="id" value="<?= $book['id']; ?>">
            <input type="hidden" name="title" value="<?= $book['title']; ?>">
            <input type="hidden" name="price" value="<?= $book['price']; ?>">
            <input type="submit" name="addToCart" value="Add to cart">
        </form>

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