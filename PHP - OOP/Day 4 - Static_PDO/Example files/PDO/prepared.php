<?php

/*
    PREPARED STATEMENTS

    We use prepared statement for two main reasons : more secure (prevent SQL injection) and faster to execute().

*/

if (isset($_POST['submitBtn'])) {

    $date = $_POST['release_date'];

    // 1. Connect to the DB
    $pdo = new PDO('mysql:host=localhost;dbname=movie_db', 'root', '');

    $query = "SELECT *
FROM movies
WHERE release_date > :date
AND director_id = :id";

    // Prepare the query
    $prep = $pdo->prepare($query);
    // Bind the value to the placeholder
    $prep->bindValue(':date', $date);
    $prep->bindValue(':id', 1);

    // Execute the query
    $prep->execute();
    // Fetch the results
    $movies = $prep->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    var_dump($movies);
    echo "</pre>";

    // Close the connection
    $pdo = null;
}

?>

<form method="post">
    <input type="date" name="release_date">
    <input type="submit" value="Submit" name="submitBtn">
</form>