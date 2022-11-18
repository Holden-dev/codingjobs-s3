<?php

require_once 'Equipment.php';
require_once 'Character.php';

$elf = new Character('Legolas', 'Elf');
// echo '<pre>';
// var_dump($elf);
// echo '</pre>';

$orc = new Character('John', 'Orc');
// echo '<pre>';
// var_dump($orc);
// echo '</pre>';


$sword = new Equipment("Death Sword", "Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
$shield = new Equipment("Weak Shield", "Shield", 0, 10, 0);
// echo '<pre>';
// var_dump($sword);
// echo '</pre>';

$elf->add_equipment($sword);
$elf->add_equipment($shield);
$elf->remove_equipment($sword);

$elf->display_equipment();

$elf->attack($orc);


echo '<pre>';
var_dump($elf);
echo '</pre>';
