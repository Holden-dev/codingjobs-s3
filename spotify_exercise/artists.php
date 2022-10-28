<?php

$conn = mysqli_connect('localhost', 'root', '', 'spotify');
$query = "SELECT id, name, poster
FROM artists";
$result = mysqli_query($conn, $query);
$artists = mysqli_fetch_all($result, MYSQLI_ASSOC);
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

    <h1>Artists List</h1>

    <?php foreach ($artists as $artist) : ?>

        <p>
            <strong>Name : </strong>
            <?= $artist['name']; ?>
        </p>

        <p>
            <strong>Poster : </strong>
            <img src="./assets/img/<?= $artist['poster']; ?>" width="200px">
        </p>

        <a href="./artist-details.php?id=<?= $artist['id']; ?>">Detail page</a>
        <hr>

    <?php endforeach; ?>

</body>

</html>