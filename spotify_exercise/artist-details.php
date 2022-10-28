<?php

require_once 'database.php';

$query = "SELECT *, COUNT(*) as NbSongs
FROM artists a
INNER JOIN songs s ON s.artist_id = a.id
WHERE a.id = " . $_GET['id'];

// echo "query : " . $query;


$result = mysqli_query($conn, $query);
$artist = mysqli_fetch_assoc($result);
mysqli_close($conn);

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
    <?php require_once 'nav.html'; ?>

    <h1>Artist Details</h1>

    <p>
        <strong>Name : </strong>
        <?= $artist['name']; ?>
    </p>
    <p>
        <strong>Biography : </strong>
        <?= $artist['biography']; ?>
    </p>
    <p>
        <strong>Birth year : </strong>
        <?= $artist['birth_year']; ?>
    </p>

    <img src="./assets/img/<?= $artist['poster']; ?>" width="200px">
    <hr>

    <p>
        <strong>Number of songs : </strong>
        <?= $artist['NbSongs']; ?>
    </p>

</body>

</html>