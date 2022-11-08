<?php

require_once 'database.php';

// Retrieve directors list
$query = "SELECT * FROM directors ORDER BY last_name";
$result = mysqli_query($conn, $query);
$directors = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Handle errors messages
$errors = array();
$msg = '';

if (isset($_POST['updateBtn'])) {

    // Check if TITLE is existing and not empty
    if (!isset($_POST['title']) or empty($_POST['title']))
        $errors['title'] = 'Title is mandatory';
    else
        $title = $_POST['title'];

    // Check if POSTER is existing and not empty
    if (!isset($_POST['poster']) or empty($_POST['poster']))
        $errors['poster'] = 'Poster is mandatory';
    else
        $poster = $_POST['poster'];

    // Check if DESCRIPTION is existing and not empty
    if (!isset($_POST['description']) or empty($_POST['description']))
        $errors['description'] = 'Description is mandatory';
    else
        $description = $_POST['description'];

    // Check if RELEASE DATE is existing and not empty
    if (!isset($_POST['release_date']) or empty($_POST['release_date']))
        $errors['release_date'] = 'Date is mandatory';
    else
        $release_date = $_POST['release_date'];

    // Check if DIRECTOR is existing and not empty
    if (!isset($_POST['director']) or empty($_POST['director']))
        $errors['director'] = 'Director is mandatory';
    else
        $director_id = $_POST['director'];

    // Insert if no errors
    if (empty($errors)) {
        $query = "UPDATE movies
        SET title = '$title',
        description = '$description',
        poster = '$poster',
        release_date = '$release_date',
        director_id = $director_id
        WHERE id = " . $_GET['id'];
        $result = mysqli_query($conn, $query);

        if ($result)
            $msg = '<span class="success">Successfully updated !</span>';
        else
            $msg = '<span class="error">Problem inserting in the database.</span>';
    }
}

// Retrieve movie's information
$query = "SELECT * FROM movies WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $query);
$movie = mysqli_fetch_assoc($result);
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>

<body>
    <nav id="main-navbar">
        <?php require_once 'nav.php'; ?>
    </nav>

    <h1>Update movie</h1>

    <p id="message">
        <?php
        echo $msg . '<br>';
        foreach ($errors as $key => $msg) {
            echo "<span class='error'>$key : $msg</span><br>";
        }
        ?>
    </p>

    <form method="POST">
        <div>
            <label for="title">Title : </label>
            <input type="text" name="title" placeholder="Title" id="title" value="<?= $movie['title']; ?>">
        </div>

        <div>
            <label for="poster">Poster : </label>
            <input type="text" name="poster" placeholder="URL" id="poster" value="<?= $movie['poster']; ?>">
        </div>

        <div>
            <label for="release_date">Release date : </label>
            <input type="date" name="release_date" id="release_date" value="<?= $movie['release_date']; ?>">
        </div>

        <div>
            <label for="director">Director :</label>

            <select name="director" id="director">
                <?php foreach ($directors as $d) : ?>
                    <option <?= ($d['id'] == $movie['director_id']) ? 'selected' : '' ?> value="<?= $d['id']; ?>">
                        <?= $d['first_name'] . ' ' . $d['last_name'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description..."><?= $movie['description']; ?></textarea>
        </div>

        <input type="submit" name="updateBtn" value="Update">
    </form>

</body>

</html>