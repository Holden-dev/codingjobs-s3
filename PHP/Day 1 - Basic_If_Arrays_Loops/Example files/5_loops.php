<?php

// LOOPS

// 1. For...Loop
for ($i = 0; $i < 10; $i++) {
    // echo $i . '<br>';
}

// For loop is used to execute code a specific number of times.

// 2. While
$a = 0;

while ($a < 10) {
    // echo $a . '<br>';
    $a++;
}

// While loop is used to execute code as long as a condition is true


// 3. Do... While
$a = 10;

do {
    // echo $a;
    $a++;
} while ($a < 10);

// Do While is used to execute code at least once, then the rest depends on the condition

// 4. Foreach 

$movies = [
    'NightCrawler',
    'ChinaTown',
    'Avatar'
];

// Use foreach when you want to loop through an array;

// Foreach provides the current $key and $value
foreach ($movies as $key => $value) {
    echo "Position : $key / Value : $value <br>";
}

// You can grab the value only
foreach ($movies as $title) {
    echo "Title : $title <br>";
}
