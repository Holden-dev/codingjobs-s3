<?php

use Flowers\Utilities\FlowerManager;

$name = "";
$price = "";

$errors = array();
$name = trim($_POST['name']);
$price = trim($_POST['price']);

if (empty($name))
    $errors['name'] = 'Name is mandatory !';

if (empty($price))
    $errors['price'] = 'Price is mandatory !';

if (empty($errors)) {
    // Try to insert
    require_once 'FlowerManager.php';
    $flowerManager = new FlowerManager();

    if ($flowerManager->insert_flower($name, $price))
        echo '{ "success": "Successfully inserted in the DB!" }';
    else
        echo '{ "error": "Prolem, try again later." }';
} else {
    echo json_encode($errors);
}
