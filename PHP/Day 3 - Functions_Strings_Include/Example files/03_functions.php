<?php

/*
    FUNCTIONS

    Functions are block of code that you can reuse anytime you want.
    Functions can either perform a specific action OR return a result.

*/

// Declare a function
function hello_world()
{
    // Code to be executed when you call the function
    echo 'Hello, world<br>';
}

// Call a function
hello_world();
hello_world();
hello_world();

// Function with return value
function hello()
{
    // Return the message 
    return 'hello';

    // Never going to be executed
    echo 'Yoyooyoyoyoyoyoyyoyoyo';
}

// Display the result
echo hello();

// Save the result in a variable
$result = hello();
echo $result;

// Function with arguments
function login($email, $password)
{
    echo "Try to login with : $email / $password<br>";
}

login('simon@gmail.com', '1234');
login('pedro@gmail.com', '4321');

// Scope : visibility of your variables
$number = 10;

function example()
{
    // This doesnt work
    echo $number;
}

example();

function example2()
{
    $number2 = 15;
}

// This doesnt work :
example2();
echo $number2;

// Let's get back to arguments
function greetings($firstName)
{
    echo 'Hello, welcome to my website ' . $firstName . '<br>';
}

greetings('simon');

$firstName = 'paul';
greetings($firstName);

// Default value for arguments
function multiplyByTwo($x = 1)
{
    return $x * 2;
}

echo multiplyByTwo(5); // 5*2
echo multiplyByTwo(7); // 7*2
echo multiplyByTwo(); // 1*2