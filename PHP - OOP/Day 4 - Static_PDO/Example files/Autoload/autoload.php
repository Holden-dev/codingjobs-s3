<?php

// require_once 'Robot.php';

// Loads automaticall the class you need
// By default, it looks inside the same folder
spl_autoload_register();

$myRobot = new Robot('987989', 'Silver');

var_dump($myRobot);
