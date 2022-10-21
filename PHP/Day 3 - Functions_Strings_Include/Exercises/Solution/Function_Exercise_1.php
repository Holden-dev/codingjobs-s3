<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
- Exercise 1

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    "The first number is higher" (if the first number is higher than the second number)
    "The first number is smaller" (if the first number is smaller than the second number)
    "The two numbers are identical" (if the two numbers are equal)

*/

function whichIsHigher($a, $b)
{
	if ($a > $b)
		echo "First number is higher<br>";
	else if ($a < $b)
		echo "Second number is higher<br>";
	else
		echo "Numbers are identical !<br>";
}

whichIsHigher(5, 10);
whichIsHigher(12, 7);




echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*

-- Exercice 2
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/
function htmlImage($src)
{
	echo "<img src='$src'>";
}

htmlImage('skate.jpg');


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Copy the code from Michel supermarket exercise.
	    - Calculates the sum of Michel's expenses (already done)
	3.2
	Write a function that will:
	- Take an array as input
	- Calculate the sum of the expenses of the array
	- return the sum

*/

function expenses($myArray)
{
	$total = 0;
	foreach ($myArray as $value) {
		$total += $value;
	}

	return $total;
}

$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);
echo expenses($array);

$array2 = array("Salad" => 2, "Tomato" => 5);
echo expenses($array2);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

function multiply($a = 1, $b = 1)
{
	return $a * $b;
}

echo multiply(10, 2);
echo multiply(4);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"
*/

function isPalindrome($string)
{
	$length = strlen($string) - 1;

	for ($i = 0; $i <= $length / 2; $i++) {

		if ($string[$i] != $string[$length - $i]) {
			return false;
		}
	}

	return true;
}

echo isPalindrome('kayak');

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*
-- Exercice 6

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

function isPrime($myNumber)
{
	// First, check if number is greater than 1
	if ($myNumber <= 1)
		return 'Number should be > 1<br>';

	// Try to divide by every numbers
	for ($i = 2; $i < $myNumber; $i++) {
		// To check if a number is divisible by another one, use modulo
		if ($myNumber % $i == 0)
			return 'Not a prime number<br>';
	}

	// Return after loop : dont use else
	return 'Its a prime<br>';
}

echo isPrime(12);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
*/

$myArray = [5, 7, 20, 8, 32, 99];
var_dump(reverseArray($myArray));

function reverseArray($array)
{
	$length = count($array) - 1;
	for ($i = 0; $i < $length / 2; $i++) {
		$temp = $array[$i];
		$array[$i] = $array[$length - $i];
		$array[$length - $i] = $temp;
	}

	return $array;
}



/* 
This is what happens if you do it 'manually' : 

$myArray = [5, 7, 20, 8, 32, 99];

$temp = $array[0]; // 5
$array[0] = $array[5]; // 99
$array[5] = $temp; // 5

$temp = $array[1]; // 7
$array[1] = $array[4]; // 32
$array[4] = $temp; // 7

$temp = $array[2]; // 20
$array[2] = $array[3]; // 8
$array[3] = $temp; // 20

*/
