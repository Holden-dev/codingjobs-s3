<?php
$firstName = 'Simon';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>Link 1</li>
            <li>Link 2</li>
        </ul>
    </nav>

    <h1>HTML/PHP Page</h1>

    <?php
    /* You can open PHP tags inside HTML
        You can write PHP code in different places of the same file
    */
    echo 'Hello, ' . $firstName;
    ?>
</body>

</html>