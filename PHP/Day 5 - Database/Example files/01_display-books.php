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

    foreach ($books as $book) {
        echo $book['title'] . '<br>';
        echo $book['price'] . ' €<hr>';
    }

    // Close the connection :
    mysqli_close($conn);

    // echo '<pre>';
    // var_dump($books);
    // echo '</pre>';
} else {
    echo 'Problem connecting to the DB<br>';
}
