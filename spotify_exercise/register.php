<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>

<body>
    <h1>Register</h1>

    <?php

    if (isset($_POST['registerBtn'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];

        $errors = false;

        if (empty($firstName) || empty($lastName)) {
            echo "First name and last name are mandatory!<br>";
            $errors = true;
        }

        if (empty($email)) {
            echo "Email is mandatory<br>";
            $errors = true;
        } else if (!strpos($email, '@')) {
            echo "Email is not valid<br>";
            $errors = true;
        }

        if (empty($password)) {
            echo "Password is mandatory<br>";
            $errors = true;
        } else if ($password != $cPassword) {
            echo "Passwords are not matching<br>";
            $errors = true;
        }


        // Only if no errors 
        if (!$errors) {
            $conn = mysqli_connect('localhost', 'root', '', 'spotify');
            $query = "INSERT INTO users(first_name, last_name, email, password)
            VALUES('$firstName', '$lastName', '$email', '$password')";
            $result = mysqli_query($conn, $query);
            mysqli_close($conn);

            if ($result)
                echo "<p style='color: green'>Successfully registered</p>";
            else
                echo "<p style='color: red'>Problem registering</p>";
        }
    }

    ?>

    <form method="post">
        <input type="text" name="first_name" placeholder="First name"><br>
        <input type="text" name="last_name" placeholder="Last name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="text" name="cPassword" placeholder="Confirm password"><br>
        <input type="submit" name="registerBtn" value="Register"><br>
    </form>
</body>

</html>