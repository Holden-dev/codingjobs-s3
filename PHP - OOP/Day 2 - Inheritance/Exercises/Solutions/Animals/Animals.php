<?php

class Animal
{
    public $name;
    public $color;
    public $gender;
    public $nbLegs;

    public function __construct($n, $c, $g, $l)
    {
        $this->name = $n;
        $this->color = $c;
        $this->gender = $g;
        $this->nbLegs = $l;
    }
}
