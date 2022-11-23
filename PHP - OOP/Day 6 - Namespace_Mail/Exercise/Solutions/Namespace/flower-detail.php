<?php

require_once 'FlowerManager.php';

use Flowers\Utilities\FlowerManager;

$flowerManager = new FlowerManager();
$flower = $flowerManager->find($_GET['id']);

echo $flower->name . '<br>';
echo $flower->get_price() . '<br>';
