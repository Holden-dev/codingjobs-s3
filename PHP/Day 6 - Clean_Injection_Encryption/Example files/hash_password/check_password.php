<form action="" method="post">
    <input type="password" name="password"><br>
    <input type="submit" name="submitBtn" value="Try">
</form>

<?php

$hashPassword = '$2y$10$uDUFw4FvtIRSSKLDRTQycOffCZhAy.cIVsrkYAj8luXi5zWLO/3r6';
// check if password match
if (isset($_POST['submitBtn'])) {

    if (password_verify($_POST['password'], $hashPassword)) {
        echo "Password matches !";
    }
}
