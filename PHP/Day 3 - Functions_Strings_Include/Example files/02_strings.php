<?php

// String functions
$myString = 'Here, take a beer.';

// Make the whole string lowercase
echo strtolower($string) . '<br>';

// Make the whole string uppercase
echo strtoupper($string) . '<br>';

// Find the position of a word (substring) in a string
echo strpos($myString, 'beer') . '<br>';

// Replace a word in a string
echo str_replace('beer', 'coca-cola', $myString) . '<br>';

// Substring : Retrieve one part of a string
echo substr($myString, 6) . '<br>';
echo substr($myString, 6, 4) . '<br>';

$lorem = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus nulla tempora perspiciatis fuga commodi accusantium ratione, nam voluptas illo magni doloremque, id deleniti quis quas earum voluptatum temporibus, excepturi eius.';

echo substr($lorem, 0, 30) . '...';

// Get the length of a string
echo strlen($myString) . '<br>';

// Turn a string into an array
$string = "Hello I Hope, You Are Ok";
$myArray = explode(' ', $string);

echo '<pre>';
var_dump($myArray);
echo '</pre>';

// Turn an array into a string
echo implode('-', $myArray);
