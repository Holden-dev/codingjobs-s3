<?php

session_start();

// Usefull functions
require_once 'functions.php';
require_once 'database.php';

$msg = '';
$name = '';
$email = '';

if (isset($_POST['registerBtn'])) {

    // Handle errors messages
    $errors = array();

    // Check if NAME is existing and not empty
    if (empty($_POST['name']))
        $errors['name'] = 'Name is mandatory.';
    else
        $name = strip_tags(trim($_POST['name']));

    // Check if EMAIL is existing and not empty
    if (empty($_POST['email']))
        $errors['email'] = 'Email is mandatory.';
    else {
        // remove forbidden symbols
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        // If email is OK, check if not already in use
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $errors['email'] = 'Email is not valid.';
        else if (doesUserExists($conn, $email))
            $errors['email'] = 'Email already in use !';
    }

    // Check if PASSWORD is existing and not empty
    if (empty($_POST['password']))
        $errors['password'] = 'Password is mandatory';
    else if (empty($_POST['cPassword']))
        $errors['password'] = 'Confirm your password !';
    else if ($_POST['password'] != $_POST['cPassword'])
        $errors['password'] = 'Passwords are not matching.';
    else
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Register only if 0 errors 
    if (empty($errors)) {

        $query = "INSERT INTO users(name, email, password)
        VALUES('$name', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result)
            $msg = "<span class='success'>Successfully registered</span><br>
        <a href='./login.php'>Try to login !</a>";
        else
            $msg = "<span class='error'>Problem registering</span>";
    }

    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>

<body>
    <?php require_once 'nav.php'; ?>

    <h1>Register</h1>

    <p class="message"><?= $msg; ?></p>

    <p style="text-align: center;">Use the form to insert a new movie inside the DB</p>
    <form method="POST">
        <div>
            <span class="error"><?= (isset($errors['name'])) ? $errors['name'] : '' ?></span>
            <label for="name">Name : </label>
            <input type="text" name="name" placeholder="Enter your name" id="name" value="<?= $name ?>">
        </div>

        <div>
            <span class="error"><?= (isset($errors['email'])) ? $errors['email'] : '' ?></span>
            <label for="email">Email : </label>
            <input type="text" name="email" placeholder="Enter a valid email" id="email" value="<?= $email ?>">
        </div>

        <div>
            <span class="error"><?= (isset($errors['password'])) ? $errors['password'] : '' ?></span>
            <label for="password">Password : </label>
            <input type="text" name="password" id="password">
        </div>

        <div>
            <label for="cPassword">Confirm password : </label>
            <input type="text" name="cPassword" id="cPassword">
        </div>

        <input type="submit" name="registerBtn" value="Insert">
    </form>
</body>

</html>