<?php

class Car
{
    // Declare properties
    private $color;
    private $brand;
    public $year;

    /* Constructor
    It's a method that allows to initialize properties while creating the object.
    */
    public function __construct($c, $b, $y)
    {
        $this->color = $c;
        $this->brand = $b;
        $this->year = $y;
    }

    // Setter
    public function set_color($newColor)
    {
        // Make sure the color is a string
        if (is_string($newColor))
            $this->color = $newColor;
        else
            echo 'Color must be a string';
    }

    public function set_brand($newBrand)
    {
        // Brand is only BMW / Ferrari OR Tesla
        if ($newBrand != 'BMW' && $newBrand != 'Ferrari' && $newBrand != 'Tesla')
            echo 'Manufacturor is only BMW/Ferrari/Tesla';
        else
            $this->brand = $newBrand;
    }

    // Getter
    public function get_color()
    {
        return $this->color;
    }

    public function get_brand()
    {
        return strtoupper($this->brand);
    }

    // Declare methods
    public function accelerate()
    {
        echo 'Vroooooooooooooooom';
    }

    // toString method allows to display the object as a string
    public function __toString()
    {
        return "Color : $this->color<br>
        Brand : $this->brand<br>
        Year : $this->year<br>";
    }
}
