<?php

// WORKING WITH DATABASE

// 1. Connect to the DB
$conn = mysqli_connect('localhost', 'root', '', 'book_shop');

// True if connected, false if not
if ($conn) {
    echo 'Connected successfully<br>';

    // 2. Prepare the query
    $query = "SELECT * FROM books";

    // 3. Ask DB to execute/run the query
    $result = mysqli_query($conn, $query);
    // I retrieved the results but I need to fetch before using them

    // 4. Fetch the results as an associative array
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Close the connection :
    mysqli_close($conn);
} else {
    echo 'Problem connecting to the DB<br>';
}
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
    <h2>Books page</h2>

    <?php foreach ($books as $book) : ?>

        <p>
            <strong>Title : </strong>
            <?= $book['title']; ?>
        </p>

        <p>
            <strong>Price : </strong>
            <?= $book['price']; ?> €
        </p>

        <hr>

    <?php endforeach; ?>
</body>

</html>