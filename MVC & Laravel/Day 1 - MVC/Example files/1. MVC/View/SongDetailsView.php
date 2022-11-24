<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Song detail</h2>

    <?php
    echo 'Title : ' . $song['title'] . '<br>';
    echo 'Date : ' . $song['release_date'] . '<br>';
    ?>
</body>

</html>