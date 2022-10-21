<?php

/*
    SESSIONS
    First : You need to start the session()
    If it's the first time, the server creates a new session just for you (and gives the key).
    If you already opened a session before, it will try to open the previous one (if you have the key)

*/

// First thing to do (BEFORE ANY HTML TAG)
session_start();

// Add an element to the session
$_SESSION['cart'] = 'Tshirt';

// Remove an element
// unset($_SESSION['cart']);

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
