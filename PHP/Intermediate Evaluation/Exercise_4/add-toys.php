<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add a toy</h1>

    <?php

    $name = '';
    $price = '';
    $photo = '';
    $type = '';
    $description = '';

    // Make sure we clicked the button
    if (isset($_POST['insertBtn'])) {
        $errors = array();
        $name = $_POST['name'];
        $price = $_POST['price'];
        $photo = $_POST['photo'];
        $type = $_POST['type'];
        $description = $_POST['description'];

        // Validations
        if (empty($name))
            $errors['name'] = 'Name is mandatory';

        if (empty($price))
            $errors['price'] = 'Price is mandatory';
        else if (!is_numeric($price))
            $errors['price'] = 'Price must be a number!';

        if (empty($type))
            $errors['type'] = 'Type is mandatory';

        // Insert if no errors
        if (empty($errors)) {
            $conn = mysqli_connect('localhost', 'root', '', 'christmas_shop');
            $query = "INSERT INTO toys(name, price, photo, type, description)
            VALUES('$name', $price, '$photo', '$type', '$description')";
            $result = mysqli_query($conn, $query);
            mysqli_close($conn);

            if ($result)
                echo 'Successfully inserted !';
            else
                echo 'Problem inserting.';
        } else {
            // Display errors
            foreach ($errors as $key => $value) {
                echo "<span style='color: red'>$key : $value</span><br>";
            }
        }
    }
    ?>

    <form method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="price" placeholder="Price"><br>
        <input type="text" name="photo" placeholder="Photo"><br>

        <select name="type" id="type">
            <option value="dolls">Dolls</option>
            <option value="mechanic">Mechanic</option>
            <option value="puzzle">Puzzle</option>
        </select><br>

        <textarea name="description" id="" cols="30" rows="10"></textarea><br>

        <input type="submit" name="insertBtn" value="Insert">
    </form>

</body>

</html>