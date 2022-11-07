<?php session_start(); ?>
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

    <h1>Cart</h1>

    <?php foreach ($_SESSION['cart'] as $bookId => $book) : ?>
        <p>Title : <?= $book['title'] ?> / Price : <?= $book['price'] ?> € / Qty : <?= $book['qty'] ?></p>

        <a href="./remove-cart.php?id=<?= $bookId  ?>">Remove from cart</a>
    <?php endforeach; ?>

    <p>Total : <?= $totalPrice; ?> €</p>
</body>

</html>