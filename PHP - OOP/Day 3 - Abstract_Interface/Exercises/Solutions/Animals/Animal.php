<?php

require_once "LivingBeing.php";

abstract class Animal extends LivingBeing
{
    public $nbLegs;

    public function __construct($n, $c, $g, $l)
    {
        parent::__construct($n, $c, $g);
        $this->nbLegs = $l;
    }
}
