<?php

// Set the time
date_default_timezone_set('Europe/Luxembourg');

/*
    Timestamps
    Number of seconds between a specific date and the 1st January 1970;

    Today's date : 19/10/2022 11:43
    Today's timestamp : 1666172611
    
*/

// Display a date in a nice format : date() function

echo date('d/m/Y') . '<br>';
echo date('d-m-Y') . '<br>';

// Day's number
echo date('d') . '<br>';
// Return today month number
echo date('m') . '<br>';
echo date('M') . '<br>';

// With hours/minutes/seconds
echo date('d/m/Y H:i:s') . '<br>';

// Another date
echo date('d/m/Y H:i:s', 1602100468) . '<br>';

// Retrieve/Convert a date, or a string, into a timestamp
echo strtotime('now') . '<br>';
echo strtotime('next Thursday') . '<br>';
echo strtotime('yesterday') . '<br>';
echo strtotime('+2 days') . '<br>';
echo strtotime('20 October 1990') . '<br>';

// Mix the two functions
echo date('d/m/Y H:i:s', strtotime('+3 days')) . '<br>';
