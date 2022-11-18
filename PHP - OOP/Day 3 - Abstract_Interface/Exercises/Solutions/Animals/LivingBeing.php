<?php

abstract class LivingBeing
{
    public $name;
    public $color;
    public $gender;

    public function __construct($n, $c, $g)
    {
        $this->name = $n;
        $this->color = $c;
        $this->gender = $g;
    }

    abstract public function communicate();
}
