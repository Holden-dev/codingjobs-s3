<?php

require_once 'FlowerManager.php';

$flowerManager = new FlowerManager();
$flower = $flowerManager->find($_GET['id']);

echo $flower->name . '<br>';
echo $flower->get_price() . '<br>';
