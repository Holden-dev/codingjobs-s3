<?php
session_start();

// Message placeholder
$msg = '';

// Handle query
require_once 'database.php';
$query = "SELECT * FROM directors ORDER BY last_name";
$result = mysqli_query($conn, $query);
$directors = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Handle form data
$title = '';
$poster = '';
$description = '';
$release_date = '';
$director_id = '';

// Check if form was submitted
if (isset($_POST['insertBtn'])) {

    // Handle errors messages
    $errors = array();

    // Check if TITLE is existing and not empty
    if (!isset($_POST['poster']) or empty($_POST['title']))
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
        $query = "INSERT INTO movies(title, poster, description, release_date, director_id)
        VALUES('$title', '$poster', '$description', '$release_date', $director_id)";
        $result = mysqli_query($conn, $query);

        if ($result)
            $msg = '<span class="success">Successfully inserted !</span>';
        else
            $msg = '<span class="error">Problem inserting in the database.</span>';
    }
}

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
    <?php require_once 'nav.php'; ?>

    <h1>Insert new movie</h1>

    <p class="message"><?= $msg; ?></p>

    <p style="text-align: center;">Use the form to insert a new movie inside the DB</p>
    <form method="POST">
        <div>
            <span class="error"><?= (isset($errors['title'])) ? $errors['title'] : '' ?></span>
            <label for="title">Title : </label>
            <input type="text" name="title" placeholder="Title" id="title" value="<?= $title ?>">
        </div>

        <div>
            <span class="error"><?= (isset($errors['poster'])) ? $errors['poster'] : '' ?></span>
            <label for="poster">Poster : </label>
            <input type="text" name="poster" placeholder="URL" id="poster" value="<?= $poster ?>">
        </div>

        <div>
            <span class="error"><?= (isset($errors['release_date'])) ? $errors['release_date'] : '' ?></span>
            <label for="release_date">Release date : </label>
            <input type="date" name="release_date" id="release_date" value="<?= $release_date ?>">
        </div>

        <div>
            <span class="error"><?= (isset($errors['director'])) ? $errors['director'] : '' ?></span>

            <label for="director">Director :</label>

            <select name="director" id="director">
                <?php foreach ($directors as $d) : ?>
                    <option value="<?= $d['id']; ?>" <?= ($d['id'] == $director_id) ? 'selected' : '' ?>><?= $d['first_name'] . ' ' . $d['last_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description..."><?= $description ?></textarea>
            <span class="error"><?= (isset($errors['description'])) ? $errors['description'] : '' ?></span>
        </div>

        <input type="submit" name="insertBtn" value="Insert">
    </form>
</body>

</html>