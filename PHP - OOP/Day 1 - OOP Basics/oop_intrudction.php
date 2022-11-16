<?php

/*

OOP - Object Oriented Programming

Until now, we were coding using procedural method.
Starting from now, we will use OOP.

OOP is a method of programming based around real-world object.

In programming, an object have the same definition as an object of the real life.

For example, a phone have many characteristics :
    - Size of the screen
    - Name of the brand
    - Color of the phone
    .....

In OOP, characteristics are called 'properties'.

The object can also perform some actions.
For example, with a phone you can :
    - Call a friend
    - Send a message
    - Navigate throught the internet
    .....

In OOP, actions are called 'methods'.

-----------

- A CLASS -

A class is what defines an object. It's the blueprint / the mold.

A class defines all the properties and methods of your object.
A class IS NOT an object !!!

SOME RULES / GOOD PRACTICE :
    - Capital letter for the first letter of each words :
        HelloWorld, Car, CoffeeMug...
    - No symbols (including spaces) in the name of your class.
    - One class can be declared only once
    - One class = one file
    - The name of the file must be the name of the class

*/

// Define our class
class Car
{
    // Properties
    public $color;
    public $brand;
    public $year;

    // Constructor : is called when creating the object
    public function __construct($c, $b, $y)
    {
        $this->color = $c;
        $this->brand = $b;
        $this->year = $y;
    }

    // Methods
    public function speed_up()
    {
        echo 'VroooOoOOoOooOmmmm';
    }

    // toString method allows to display your object as a string
    public function __toString()
    {
        return "Color : $this->color<br>
        Brand : $this->brand<br>
        Year : $this->year";
    }
}

// Create an object : Instance of a class
$myCar = new Car('blue', 'bmw', '2018');

$myCar->speed_up();

echo $myCar;

echo '<pre>';
var_dump($myCar);
echo '</pre>';

// You can create as many objects as you want
$ferrari = new Car('red', 'ferrari', '2016');
$ferrari->color = 'Yellow';

echo '<pre>';
var_dump($ferrari);
echo '</pre>';
