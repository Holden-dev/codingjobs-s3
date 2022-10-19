<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    /*

    method attribute : defines HOW you send the request to the server. Two ways : GET and POST.

    When the server receives request/data from a form, the data are saved in a superglobal variable.

        $_GET
        $_POST

    GET method : 
        It will send the data throught the URL directly.
        form.php?firstname=simon&lastname=bertrand

    POST method :
        Will send the data without editing the URL.
        Use post when informations are sensitive, or you need to send a file or a lot of data.

    action attribute : choose WHERE (which page) to send the data to
    */

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $firstName = '';

    // Only if form was submitted
    //if (!empty($_GET))
    if (isset($_POST['submitBtn'])) {
        $errors = false;

        // Saving data coming from the form in a variable
        $firstName =  $_POST['firstname'];

        // Validations
        if (empty($firstName)) {
            echo 'Firstname is mandatory<br>';
            $errors = true;
        }

        if (empty($_POST['lastname'])) {
            echo 'Lastname is mandatory<br>';
            $errors = true;
        }

        // Only if NO errors
        if ($errors == false)
            echo 'Form was submitted. First name : ' . $_POST['firstname'] . ' / Last name : ' . $_POST['lastname'];
    }
    ?>

    <form method="POST">
        <input type="text" name="firstname" placeholder="First name" value="<?php echo $firstName; ?>"><br>
        <input type="text" name="lastname" placeholder="Last name"><br>
        <textarea name="message" cols="15" rows="5"></textarea><br>
        <input name="submitBtn" type="submit" value="Send message">
    </form>
</body>

</html>