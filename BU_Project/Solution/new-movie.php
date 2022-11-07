<?php
session_start();

// Message placeholder
$msg = '';

// Handle query
require_once 'database.php';

// Handle form data
$title = '';
$poster = '';
$description = '';
$release_date = '';
$director_id = '';

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
        echo '<span class="success">Successfully inserted !</span>';
    else
        echo '<span class="error">Problem inserting in the database.</span>';
} else {
    foreach ($errors as $key => $msg) {
        echo "<span class='error'>$key : $msg</span><br>";
    }
}

mysqli_close($conn);
