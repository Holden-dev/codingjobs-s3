<?php

// Numerical Arrays

// Initialize empty array
$movies = array();
$movies = [];

// Array with values
// $movies = array(
//     0 => 'NightCrawler',
//     1 => 'Chinatown',
//     2 => 'Avatar'
// );

$movies = array(
    'NightCrawler',
    'Chinatown',
    'Avatar'
);

$movies = [
    'NightCrawler',
    'Chinatown',
    'Avatar'
];

// Access an element of the array
echo $movies[1] . '<br>';

// Override the last movie
$movies[2] = 'Titanic';

// Create a new movie at the end
$movies[] = 'Avatar';

// Remove an element
unset($movies[2]);

// Count numbers of elements
$nbElements = count($movies);

echo '<pre>';
var_dump($movies);
echo '</pre>';

// ASSOCIATIVE ARRAYS
$simonInformations = [
    'firstname' => 'Simon',
    'lastname' => 'Bertrand',
    'phone' => '+336667854789',
    'mail' => 'simon@simon.fr'
];

// Access an element
echo $simonInformations['phone'];

// Change the phone number
$simonInformations['phone'] = '+645878748548';
$simonInformations['age'] = 30;

$contacts = [
    0 => [
        'firstname' => 'Simon',
        'lastname' => 'Bertrand',
        'phone' => '+336667854789',
        'mail' => 'simon@simon.fr'
    ],
    1 => [
        'firstname' => 'Noel',
        'lastname' => 'Thommes',
        'phone' => '+564964796749',
        'mail' => 'noel@noel.fr'
    ]
];

echo $contacts[0]['phone'];
