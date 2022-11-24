<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>New artist</h1>

    <?php
    // Display errors if there is any
    if (!empty($errors)) {
        foreach ($errors as $key => $err) {
            echo "<span style='color:red'>$err</span><br>";
        }
    }

    // Display success / error message
    if (isset($msg))
        echo $msg;
    ?>

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name"><br>

        <label for="gender">Gender:</label>
        <input type="text" name="gender" id="gender" placeholder="gender"><br>

        <label for="date_of_birth">Date of birth:</label>
        <input type="date" name="date_of_birth" id="date_of_birth"><br>

        <label for="bio">Bio:</label>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>

        <input type="submit" name="insertBtn" value="Insert">
    </form>
</body>

</html>