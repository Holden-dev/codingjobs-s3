<?php

/*

OOP - Object Oriented Programming

Until now, we were coding using procedural method.

OOP is a method of programming organized around real-world object.

In programming, an object have the same definition as an object of the real life.

For example, a car have many characteristics :
    - The name of the car
    - The brand of the car
    - Color of the car
    ....

In OOP, characteristics are called 'properties'.

The object can also perform some actions.
For example, a car can :
    - speed / accelerate
    - brake
    - pull down the window

In OOP, actions are called 'methods'.

---------------


-- A CLASS --

A class is what defines an object.
It's the blueprint / the mold.

A class defines all the properties and methods of your object.
A class is not an object !!!!

SOME RULES / GOOD PRACTICE :
    - Capital Letter for the first letter of each words : 
        HelloWorld, Car, CoffeeMug
    - No crazy symbol (including spaces) in the name of your class, please.
    - One class can be declared only once (same with function)
    - One class = one file
    - The name of the file should be the name of the class

*/

// Define our class
class Car
{
}

// Create an object : Instance of a class
$myCar = new Car();

echo '<pre>';
var_dump($myCar);
echo '</pre>';

// I can create as much objects as I want
$lambo = new Car();

/*
    Classes have 'internal variables', called 'properties'  
    They have also 'internal functions', called 'methods'
*/

class Car2
{
    // Declare properties
    public $color;
    public $brand;
    public $model;

    // Declare methods
    public function accelerate()
    {
        echo 'Vroooooooom !';
    }
}

$bmw = new Car2();
$bmw->color = 'Yellow';
$bmw->brand = 'BMW';
$bmw->model = 'm3';

echo '<pre>';
var_dump($bmw);
echo '</pre>';

$ferrari = new Car2();
echo '<pre>';
var_dump($ferrari);
echo '</pre>';


/*

    - The constructor :
    
    It's a method that allows you to initialize properties when creating the object.

*/

class Car3
{
    // Declare properties
    public $color;
    public $brand;
    public $model;

    // Constructor
    public function __construct($c, $b, $m)
    {
        // 'this' keyword refers to the object itself.
        // 'this->color' refers to property color of the object.
        $this->color = $c;
        $this->brand = $b;
        $this->model = $m;
    }

    // Declare methods
    public function accelerate()
    {
        echo 'Vroooooooom !';
    }

    // toString function allows to display your object as a string
    public function __toString()
    {
        // need to return a string (the string to be display)
        return 'Car details. Color : ' . $this->color;
    }
}

$otherCar = new Car3('Red', 'Ferrari', 'f12');

// Call a method of your object :
$otherCar->accelerate();

// Edit property :
$otherCar->color = 'Blue';
// Display a property
echo $otherCar->color . '<br>';

echo '<pre>';
var_dump($otherCar);
echo '</pre>';

echo $otherCar;

/*
    Scope :
    Visibility of your properties & methods

    'public' keyword means that the property/method will be accessible from anywhere (inside & outside the class)

    'private' keyword means property/method can be accessible only inside the class


    Encapsulation :
    - Proect the state of an object. Access properties is done via methods. This makes the class flexible and easy to manage.
    - The code of an object is easily editable without breaking the program.
    - Encapsulation is done using private scope and setters/getters

*/

class Car4
{

    // Properties
    private $color;
    public $brand;
    public $model;

    // Constructor
    public function __construct($c, $b, $m)
    {
        $this->setColor($c);
        $this->brand = $b;
        $this->model = $m;
    }

    // Setter
    public function setColor($c)
    {
        // Update the color property
        // I have only three allowed colors : red/green/blue 
        if ($c != 'red' && $c != 'green' && $c != 'blue') {
            echo 'Choose a valid color (red/green/blue)';
        } else
            $this->color = $c;
    }

    // Getter
    public function getColor()
    {
        return $this->color;
    }
}

// Create an object
$myCar = new Car4('Yellow', 'Bmw', 'm2');
// This WON'T work : property is private

//$myCar->color = 'red';

// This will work:
$myCar->setColor('red');

// This WON'T work
//echo $myCar->color;

// This will work:
echo $myCar->getColor();

echo '<pre>';
var_dump($myCar);
echo '</pre>';
