<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Artists page</h2>

    <?php
    foreach ($artists as $key => $artist) {
        echo 'Name : ' . $artist['name'] . '<br>';
        echo 'Gender : ' . $artist['gender'] . '<br>';
        echo 'Birth date : ' . $artist['date_of_birth'] . '<br>';
        echo 'Bio : ' . $artist['bio'] . '<br>';
        echo '<hr>';
    }
    ?>
</body>

</html>