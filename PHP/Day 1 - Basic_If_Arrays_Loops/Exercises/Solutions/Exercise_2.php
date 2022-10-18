<?php

$inventory = [
    'TShirts' => 20,
    'Caps' => 10,
    'Shoes' => 5
];

echo $inventory['Caps'];

$inventory['Shoes'] += 5;
$inventory['Caps'] += 20;
