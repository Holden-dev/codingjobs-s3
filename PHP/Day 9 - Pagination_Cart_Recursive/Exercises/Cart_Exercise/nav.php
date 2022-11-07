<?php

$totalBooks = 0;
$totalPrice = 0;
foreach ($_SESSION['cart'] as $book) {
    $totalBooks += $book['qty'];
    $totalPrice += $book['price'] * $book['qty'];
}

?>

<nav>
    <ul>
        <li>
            <a href="./books.php">Books</a>
        </li>
        <li>
            <a href="./cart.php">Cart (<?= $totalBooks; ?>)</a>
        </li>
    </ul>
</nav>