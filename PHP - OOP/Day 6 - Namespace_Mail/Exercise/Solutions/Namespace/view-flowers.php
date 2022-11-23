<?php

require_once 'FlowerManager.php';

use Flowers\Utilities\FlowerManager;

$flowerManager = new FlowerManager();

$flowers = $flowerManager->findAll();

// echo '<pre>';
// var_dump($flowers);
// echo '</pre>';

foreach ($flowers as $key => $flower) {
    echo $flower->name . '<br>';
    echo $flower->get_price() . '<br>';

    echo '<a href="flower-detail.php?id=' . $flower->id . '">Detail page</a>';
    echo '<hr>';
}
