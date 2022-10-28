<form action="" method="post">
    <input type="password" name="password"><br>
    <input type="submit" name="submitBtn" value="Try">
</form>

<?php

/*

    Hash the password.
    It is necessary to hash your password BEFORE saving it into the DB.

    Hash the password makes it unreadable by humans.
*/

if (isset($_POST['submitBtn'])) {
    // Display the password
    echo $_POST['password'] . '<br>';

    // DO NOT USE THOSE FUNCTIONS (weak/old algortihm)
    // echo md5($_POST['password']) . '<br>';
    // echo sha1($_POST['password']) . '<br>';

    // Password hash function will hash your password using bcrypt() algorithm
    echo password_hash($_POST['password'], PASSWORD_DEFAULT);
    // it generates a 60 char long string
}

?>