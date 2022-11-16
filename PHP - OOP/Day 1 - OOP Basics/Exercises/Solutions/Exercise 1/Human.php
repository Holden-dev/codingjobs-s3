<?php

class Human
{
    private $name;
    public $hairColor;
    public $gender;
    public $height;

    public function __construct($name, $hairColor, $gender, $height)
    {
        $this->name = $name;
        $this->hairColor = $hairColor;
        $this->gender = $gender;
        $this->height = $height;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function __toString()
    {
        return "$this->name has $this->hairColor hair color.<br>
        Gender : $this->gender<br>
        Height : $this->height";
    }
}
