<?php

require_once 'FlowerAPIManager.php';
$flowerAPIManager = new FlowerAPIManager();
$json = $flowerAPIManager->find($_GET['id']);

echo $json;
