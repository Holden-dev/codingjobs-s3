<?php

class Adventurer
{
    public $name;
    public $healthPoints;
    public $atkPoints;
    public $defPoints;
    public $warCry;
    protected $type;
    public $equipment;
    public $powerAlreadyUsed;

    public function __construct($name, $type)
    {
        $this->powerAlreadyUsed = false;
        $this->name = $name;
        $this->set_type($type);
        $this->healthPoints = 100;
        $this->atkPoints = 10;
        $this->defPoints = 5;
        $this->warCry = "Attaaaaaack!";
        if ($this->type == 'Orc')
            $this->warCry = "wwouogrouroulou mlll !!";
    }

    public function set_type($type)
    {
        $availableTypes = ['Human', 'Orc', 'Elf'];
        if (in_array($type, $availableTypes))
            $this->type = $type;
        else
            echo "Wrong type.";
    }

    public function add_equipment($equip)
    {
        $this->equipment = $equip;
    }

    public function remove_equipment($equip)
    {
        $this->equipment = null;
    }

    public function display_equipment()
    {
        echo "Inventory list : <br>";
        echo $this->equipment;
    }
}
