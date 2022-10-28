<?php

if (isset($_POST['submitBtn'])) {

    // Original value
    echo $_POST['myInput'] . '<br>';

    /*
        htmlspecialchars() convert the HTML tags to entities
        < convert to &amp;
    */
    echo htmlspecialchars($_POST['myInput']) . '<br>';

    // Remove all specials characters (html tags)
    echo strip_tags($_POST['myInput']);
}

?>

<form method="post">
    <input type="text" name="myInput" placeholder="Type in something"><br>
    <input type="submit" name="submitBtn" value="Try me">
</form>