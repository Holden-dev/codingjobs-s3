<?php

class CoffeeCup
{
    private $brand;
    public $quantity;
    public $temperature;
    private $volume;

    public function __construct($brand, $volume, $temp)
    {
        $this->volume = $volume;
        $this->quantity = $volume;
        $this->temperature = $temp;
        $this->set_brand($brand);
    }

    // Setter : argument + assign (DO NOT RETURN)
    public function set_brand($brand)
    {
        $availableBrands = ['Lavazza', 'Malongo', 'Nescafé'];

        if (in_array($brand, $availableBrands))
            $this->brand = $brand;
        else
            echo "Brand is incorrect.";
    }

    // Getter : NO arguments + return
    public function get_brand()
    {
        return $this->brand;
    }

    public function sip($qtyWeWantToDrink)
    {
        if ($this->quantity < $qtyWeWantToDrink)
            $this->quantity = 0;
        else
            $this->quantity -= $qtyWeWantToDrink;

        echo 'Remain ' . $this->quantity . 'cl of coffee<br>';
    }

    public function refill()
    {
        $this->quantity = $this->volume;
    }

    public function reHeat($degree)
    {
        $this->temperature += $degree;
        echo "Coffee was reheat by $degree C";
    }

    public function coolDown($degree)
    {
        $this->temperature -= $degree;
        echo "Coffee was cooldown by $degree C";
    }
}
