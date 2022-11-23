<?php

namespace Flowers;

class Flower
{
    public $id;
    public $name;
    private $price;

    public function get_price()
    {
        return $this->price . '$';
    }
}
