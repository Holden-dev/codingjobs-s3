<?php

class Human
{
    public $name;
    public $hairColor;
    public $gender;

    public function __construct($n, $c, $g)
    {
        $this->name = $n;
        $this->hairColor = $c;
        $this->gender = $g;
    }

    public function talk()
    {
        echo "Hey, my name is $this->name<br>";
    }

    public function work()
    {
        echo "$this->name is currently working.<br>";
    }
}
