<?php

// Read the cookie
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

// Create two cookies
setcookie("username", "mako", time() + 20);
setcookie("email", "simon@gmail.com", time() + 60);
