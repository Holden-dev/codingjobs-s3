<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Toys list</h1>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'christmas_shop');
    $query = 'SELECT * FROM toys';
    $results = mysqli_query($conn, $query);
    $toys = mysqli_fetch_all($results, MYSQLI_ASSOC);

    ?>

    <table border="1">
        <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Description</th>
        </tr>

        <?php foreach ($toys as $toy) : ?>
            <tr>
                <td><img src="<?= $toy['photo']; ?>" width="200px"></td>
                <td><?= strtoupper($toy['name']); ?></td>
                <td><?= $toy['price']; ?> $</td>
                <td><?= $toy['type']; ?></td>
                <td><?= (strlen($toy['description']) > 30) ? substr($toy['description'], 0, 30) . '...' : $toy['description']; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>


</body>

</html>