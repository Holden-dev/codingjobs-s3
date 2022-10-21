<form method="post">
    <input type="submit" name="resetBtn" value="Reset">
</form>

<?php

// Reset btn
if (isset($_POST['resetBtn'])) {
    // Remove the cookie from the cookie file (permanent)
    setcookie('count', 1, time() - 3600);

    // Remove the cookie from the array
    unset($_COOKIE['count']);
}

// Check if my cookie exists
if (isset($_COOKIE['count'])) {
    // We have to do ++
    $count = $_COOKIE['count'] + 1;
    setcookie('count', $count, time() + 60);
    echo 'Number of time visited : ' . $_COOKIE['count'] . '<br>';
    echo 'Date of first visit : ' . $_COOKIE['first_visit'] . '<br>';
} else {
    // Its the first time : initialize to 1
    echo "First time visiting the page !<br>";
    setcookie('count', 1, time() + 600);
    setcookie('first_visit', date("d/m/Y H:i:s"), time() + 600);

    // time() : give you the timestamp of NOW
    // date() : date format FROM the timestamp of NOW
}
