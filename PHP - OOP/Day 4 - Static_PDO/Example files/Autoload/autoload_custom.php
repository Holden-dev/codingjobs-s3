<?php

function projectAutoload($className)
{
    require_once "classes/$className.php";
}

// Loads automaticall the class you need
// By default, it looks inside the same folder
spl_autoload_register('projectAutoload');

$myRobot = new Robot('987989', 'Silver');

var_dump($myRobot);
