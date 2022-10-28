<?php

// Remove white spaces from Left and Right of the input
$email = '    simon@gmail.com ';
$email = trim($email);

// Make sure the email is valid (return true or false)
$cleanedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$validEmail = filter_var($cleanedEmail, FILTER_VALIDATE_EMAIL);
