<?php

require_once 'Equipment.php';
require_once 'Adventurer.php';
require_once 'Elf.php';
require_once 'Orc.php';
require_once 'Human.php';

$elf = new Elf('Legolas', 'Elf');
// echo '<pre>';
// var_dump($elf);
// echo '</pre>';

$orc = new Orc('John', 'Orc');
// echo '<pre>';
// var_dump($orc);
// echo '</pre>';


$sword = new Equipment("Death Sword", "Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
$shield = new Equipment("Weak Shield", "Shield", 0, 10, 0);
// echo '<pre>';
// var_dump($sword);
// echo '</pre>';

// $elf->add_equipment($sword);
// $elf->add_equipment($shield);
// $elf->remove_equipment($sword);

// $elf->display_equipment();

$orc->attack($elf);
$orc->usePower();
$orc->usePower();
$orc->usePower();
$orc->usePower();
$orc->usePower();


echo '<pre>';
var_dump($orc);
echo '</pre>';
