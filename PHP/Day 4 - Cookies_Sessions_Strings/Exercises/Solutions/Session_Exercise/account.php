<form method="post">
    <input type="submit" value="Log out" name="logoutBtn">
</form>


<?php
session_start();

if (isset($_SESSION['email'])) {
    echo 'Welcome user, email : ' . $_SESSION['email'];
} else {
    header("Location: login.php");
    exit();
}

// Click on logout
if (isset($_POST['logoutBtn'])) {
    unset($_SESSION['email']);
    header("Location: login.php");
    exit();
}
