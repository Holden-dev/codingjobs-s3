<?php

// 1. Connect to the DB
$conn = mysqli_connect('localhost', 'root', '', 'book_shop');

// True if connected, false if not
if ($conn) {
    echo 'Connected successfully<br>';

    // 2. Prepare the query
    $query = "INSERT INTO books(title, price, author_id, publication_date)
    VALUES('lord of the ring', 14, 1, '1954-01-01')";

    // 3. Ask DB to execute/run the query
    $result = mysqli_query($conn, $query);

    // 4. NO NEED TO FETCH WHEN INSERT
    if ($result)
        echo "Successfully inserted<br>";
    else
        echo "Problem inserting in the DB<br>";


    // Close the connection :
    mysqli_close($conn);
} else {
    echo 'Problem connecting to the DB<br>';
}
