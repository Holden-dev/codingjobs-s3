<?php

/*
	- Exercise 1 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>1.03,"Tomato"=>2.3,"Oignon"=>1.85,"Red cabbage"=>0.85)
	    Write a script that will : 
	    1. Sort by value (try to look on google) and display the array
	    2. Sort by key in descending order and display the array
	    3. Use a loop to calculate the total of Michel spendings.

	*/

$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);

// asort($array);
// echo '<pre>';
// var_dump($array);
// echo '</pre>';

krsort($array);
// echo '<pre>';
// var_dump($array);
// echo '</pre>';

$total = 0;
foreach ($array as $value) {
	$total += $value;
}
// echo "Total : $total";

/*
	- Exercise 2 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 1 etc.

		Do it by using a for loop.
		Once it's done, try to do it also with the while loop.
	*/
$array = [];
for ($i = 0; $i < 21; $i++) {
	$array[] = $i;
}

echo '<pre>';
var_dump($array);
echo '</pre>';

$array = [];
$a = 0;
while ($a <= 20) {
	$array[] = $a;
	$a++;
}

echo '<pre>';
var_dump($array);
echo '</pre>';



/*
	-Exercise 3 :
		Use a loop to create an array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

$array = [];
for ($i = 1; $i < 11; $i++) {
	$array[$i] = $i * 2;
}

echo '<pre>';
var_dump($array);
echo '</pre>';

/*
	-Exercise 4 :
		Create an array of random numbers.
		You can create it manually. For example $array = [5, 20, 6, -6, 100]

		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
		You have to use loop + variable
	
		2. Find the position of the max/min also.

		3. CHALLENGE (optional)
		You can only use 2 variables ($array and $i doesn't count).
	*/

$array = [5, 20, 6, -6, 100];
$posMax = 0;
$posMin = 0;

foreach ($array as $key => $value) {
	if ($value > $array[$posMax])
		$posMax = $key;

	if ($value < $array[$posMin])
		$posMin = $key;
}

echo 'Maximum is ' . $array[$posMax] . ', its position is : ' . $posMax . '<br>';

echo 'Minimum is ' . $array[$posMin] . ', its position is : ' . $posMin . '<br>';
