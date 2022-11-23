<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Contact</h2>


    <?php

    if (isset($_POST['submitBtn'])) {

        $errors = array();

        $name = '';
        $phone = '';
        $email = '';
        $subject = '';
        $message = '';

        if (empty($_POST['name']))
            $errors['name'] = 'Name is mandatory';
        else
            $name = $_POST['name'];

        if (empty($_POST['email']))
            $errors['email'] = 'Email is mandatory';
        else
            $email = $_POST['email'];

        if (empty($_POST['message']))
            $errors['message'] = 'A message is mandatory';
        else
            $message = $_POST['message'];

        if (empty($_POST['subject']))
            $subject = 'Contact form';
        else
            $subject = $_POST['subject'];

        if (empty($errors)) {
            // Send the mail
            $phone = $_POST['phone'];
            require_once 'send_mail.php';
        } else {
            foreach ($errors as $key => $err) {
                echo "$key : $err<br>";
            }
        }
    }
    ?>

    <form method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="phone" placeholder="Phone number"><br>
        <input type="text" name="email" placeholder="Email address"><br>
        <input type="text" name="subject" placeholder="Subject"><br>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="submitBtn" value="Send message">
    </form>
</body>

</html>