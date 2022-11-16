<?php

require_once 'Car.php';

$ferrari = new Car('Red', 'Ferrari', 2018);
$ferrari->set_color('Blue');

//echo $ferrari->get_color() . '<br>';

// Display the object (works only with tostring)
echo $ferrari;

// Access the method
$ferrari->accelerate();
