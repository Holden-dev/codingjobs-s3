<?php

require_once 'IWorker.php';
require_once 'Robot.php';
require_once 'LivingBeing.php';
require_once 'Animal.php';
require_once 'Human.php';
require_once 'Cat.php';
require_once 'Dog.php';

$garfield = new Cat('Garfield', 'Orange', 'Male', 4);
$snoopy = new Dog('Snoopy', 'White/Black', 'Male', 4);
$simon = new Human('Simon', 'brown', 'Male', 1.79);

$livingBeing = array(
    $garfield,
    $snoopy,
    $simon
);

foreach ($livingBeing as $key => $value) {
    $value->communicate();
}

$pragyaBot = new Robot('Z-15874541', 'Gold');

$workers = array(
    $simon,
    $pragyaBot
);

foreach ($workers as $key => $worker) {
    $worker->work();
}
