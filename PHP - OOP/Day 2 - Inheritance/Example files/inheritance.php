<?php

/*
    INHERITANCE

    Inheritance represents a relationship between classes in a form of parent/child relation.

    Children will benefits from the parent (properties & methods).
    A class can only inherit from ONE parent.
    Different children can inherit from the same parent.
    
    The parent share properties/methods to the children when it's 'public'/'protected'.
    The parent can keep things private by using 'private'.

    Children can have their own properties/methods.

*/

class Vehicle
{
    // Properties children can access
    protected $manufacturer;
    public $color;

    public function __construct($m, $c)
    {
        $this->manufacturer = $m;
        $this->color = $c;
    }

    public function horn()
    {
        echo 'Tuut tuut<br>';
    }
}


// Car inherits from Vehicle
class Car extends Vehicle
{
    private $nbDoors;

    public function __construct($m, $c, $d)
    {
        parent::__construct($m, $c);
        $this->nbDoors = $d;
    }

    public function slam_the_door()
    {
        echo "Bam<br>";
    }
}

class Truck extends Vehicle
{
    private $loadCapacity;

    public function __construct($m, $c, $load)
    {
        parent::__construct($m, $c);
        $this->loadCapacity = $load;
    }
}


$myVehicle = new Vehicle('Audi', 'Grey');
$myCar = new Car('BMW', 'Blue', 5);
$myCar->horn();
$myCar->slam_the_door();
echo $myCar->manufacturer;

$myTruck = new Truck('Volvo', 'White/Red', 25);
echo '<pre>';
var_dump($myCar);
echo '</pre>';
