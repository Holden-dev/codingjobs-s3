<?php
// This a single line comment

/*
        This a multiple line
        comment
    */

// 1. Simple variables
$firstName = 'Simon';
$age = 31;
$height = 1.80;
$are_you_doing_well = false;

/*
    Rules : 
    - name of the variable must start with a letter
    - name can contains numbers
    - only underscore, no other symbols
*/

// Display variables
echo $firstName;
echo '<br>';
echo $age;
echo '<br>';

echo "<h1>$firstName</h1>";
echo '<h1>$firstName</h1>';

// Display type of variable
echo gettype($are_you_doing_well);

// Display content & type
var_dump($are_you_doing_well);

// 2 . Arithmetic operators
$a = 5 + 2;
$a = 5 - 2;
$a = 5 / 2;
$a = 5 * 2;
$a = 5 % 2; // modulo : whats left of the division

// Incrementing
$a = 10;
$a = $a + 2;
$a += 2;










// Increment by one
$a += 1;
$a++;

// Decrement
$a = 10;
$a = $a - 2;
$a -= 2;

// Decrement by one
$a -= 1;
$a--;

// 3. Concatenation: put two (or more) strings together
echo "<br>";
echo "Hello $firstName, Welcome to my website<br>";
echo 'Hello ' . $firstName . ', Welcome to my website<br>';

//4. Escaping characters
echo 'It\'s easy';
