<?php

/*
    ABSTRACT

    Abstraction is used when the parent should not be instantiate.
    Use it when you want to implement 'rules' for the children to follow (mandatory).

    The structure of the class is the same as a regular class.

    1. If a class contain one (or more) abstract method, the class has to be abstract.
    2. An abstract class can have 'regular' method.
    3. A class can be abstract without any abstract method

*/

abstract class Shape
{
    public $x;
    public $y;

    // Signature of the method : no body
    abstract function calculateSurface();

    public function get_x()
    {
        return $this->x;
    }

    public function example()
    {
        echo "We are doing the same thing !!!";
    }
}

// This will not work :
// $myShape = new Shape();

class Circle extends Shape
{
    public $diameter;

    public function calculateSurface()
    {
        echo "Calcul for the circle<br>";
    }
}

class Rectangle extends Shape
{
    public function calculateSurface()
    {
        echo "Calcul for the rectangle<br>";
    }
}

$myRectangle = new Rectangle();
$myRectangle->example();

$myCircle = new Circle();
$myCircle->example();

var_dump($myRectangle);
