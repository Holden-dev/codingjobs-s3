<?php

require_once 'IWorker.php';
require_once 'Robot.php';
require_once 'LivingBeing.php';
require_once 'Animal.php';
require_once 'Human.php';
require_once 'Cat.php';
require_once 'Dog.php';

$simon = new Human('Simon', 'brown', 'Male', 1.79);
$camel = new Human('Camel', 'brown', 'Male', 1.90);
$natalia = new Human('Natalia', 'brown', 'Female', 1.72);

$workers = array(
    $simon,
    $camel,
    $natalia
);

$injuredWorkers = [];

foreach ($workers as $key => $worker) {
    try {
        $worker->work();
    } catch (\Exception $e) {
        echo $e->getMessage();
        unset($workers[$key]);
        $injuredWorkers[] = $worker;
    }
}

echo "<pre>";
var_dump($workers);
echo "</pre>";

echo '<hr>';

echo "<pre>";
var_dump($injuredWorkers);
echo "</pre>";
