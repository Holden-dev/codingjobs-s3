<?php

// String functions
$myString = 'Here, take a beer.';

// Find the position of a word (substring) in a string
echo strpos($myString, 'beer') . '<br>';

// Replace a word in a string
echo str_replace('beer', 'coca-cola', $myString) . '<br>';

// Substring : Retrieve one part of a string
echo substr($myString, 6) . '<br>';
echo substr($myString, 6, 4) . '<br>';

$lorem = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus nulla tempora perspiciatis fuga commodi accusantium ratione, nam voluptas illo magni doloremque, id deleniti quis quas earum voluptatum temporibus, excepturi eius.';

echo substr($lorem, 0, 30) . '...';
