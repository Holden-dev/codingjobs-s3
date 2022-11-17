<?php

require_once 'CoffeeCup.php';
$myCoffee = new CoffeeCup('Malongo', 30, 25);
$myCoffee->sip(10);
$myCoffee->sip(5);
$myCoffee->sip(20);
