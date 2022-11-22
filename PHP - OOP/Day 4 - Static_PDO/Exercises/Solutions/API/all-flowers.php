<?php

require_once 'FlowerAPIManager.php';
$flowerAPIManager = new FlowerAPIManager();
$json = $flowerAPIManager->findAll();

echo $json;
