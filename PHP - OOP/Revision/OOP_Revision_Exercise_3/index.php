<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <p>How many characters in your name ?</p>
    <form action="" method="GET">
        <input type="text" name="first_name" placeholder="First name"><br>
        <input type="text" name="last_name" placeholder="Last name"><br>
        <input type="button" value="Submit">
    </form>

    <?php

    if (isset($_POST['first_name']) && isset($_POST['last_name'])) {

        if (empty($_POST['first_name'])) {
            $errors['first_nme'] = 'First name is mandatory';
        }

        if (empty($_POST['last_name'])) {
            $errors['last_name'] = 'Last name is mandatory';
        }


        if (!empty($errors)) {
            $firstName = $_POST['first_name'];
            $lastname = $_POST['last_name'];

            $nbCharacters = strlen($firstName) - strlen($lastName);

            echo "Your full name has $nbCharacters characters";
        } else {
            echo 'There are some errors !';
        }
    }

    ?>

</body>

</html>