<?php

// Check if email exists in DB : either returns false either returns the user
function doesUserExists($conn, $email)
{
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $user = mysqli_fetch_assoc($result);

    if ($user)
        return $user;
    else
        return false;
}
