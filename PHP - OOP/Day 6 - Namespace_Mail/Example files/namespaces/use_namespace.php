<?php

require_once 'namespace.php';
require_once 'namespace2.php';

// First method :
/*
$myUser = new MyProject\User();
$myUser->run();
$otherUser = new ExternalProject\Login\User();
$otherUser->login();
*/

use MyProject\User;
use ExternalProject\Login\User as ExtUser;

$myUser = new User();
$myUser->run();
$otherUser = new ExtUser();
$otherUser->run();
