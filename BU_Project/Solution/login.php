<?php

session_start();
// Usefull functions
require_once 'functions.php';
require_once 'database.php';

$msg = '';
$email = '';

if (isset($_POST['loginBtn'])) {

    // Handle errors messages
    $errors = array();

    // Check if EMAIL is existing and not empty
    if (empty($_POST['email']))
        $errors['email'] = 'Email is mandatory.';
    else {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (!$user = doesUserExists($conn, $email))
            $errors['email'] = 'No user with this email.';
    }

    // Check if PASSWORD is existing and not empty
    if (empty($_POST['password']))
        $errors['password'] = 'Password is mandatory';
    else
        $password = $_POST['password'];

    // Register only if 0 errors 
    if (empty($errors)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['picture'] = $user['picture'];
            $msg = "<span class='success'>Successfully Loggued in</span><br>
            <a href='./account.php'>Check your account page</a>";
        } else
            $msg = "<span class='error'>Wrong password. Try again.</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>

<body>
    <nav id="main-navbar">
    </nav>

    <h1>Login</h1>

    <p class="message"><?= $msg; ?></p>

    <p style="text-align: center;">Try to login to your account</p>
    <form method="POST">
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

        <input type="submit" name="loginBtn" value="Insert">
    </form>

    <script>
        // Include navbar
        fetch('nav.php', {
                method: 'get',
            }).then(res => res.text())
            .then(function(result) {
                document.getElementById('main-navbar').innerHTML = result;
            });
    </script>
</body>

</html>