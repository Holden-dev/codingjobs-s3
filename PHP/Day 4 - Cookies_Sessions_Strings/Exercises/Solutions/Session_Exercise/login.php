<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>

    <?php

    // Make sure button was clicked
    if (isset($_POST['loginBtn'])) {
        $errors = false;

        // Check if email and password are not empty
        if (empty($_POST['email'])) {
            $errors = true;
            echo 'Email is mandatory<br>';
        }

        if (empty($_POST['password'])) {
            $errors = true;
            echo 'Password is mandatory<br>';
        }

        // If NO errors
        if (!$errors) {
            $_SESSION['email'] = $_POST['email'];
            echo '<a href="./account.php">Go to account page</a>';
        }
    }

    ?>


    <form method="POST">
        <input type="text" name="email" placeholder="Your email"><br>
        <input type="text" name="password" placeholder="Your password"><br>
        <input type="submit" name="loginBtn" value="Log in">
    </form>
</body>

</html>