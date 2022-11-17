<?php

class Equipment
{
    public $name;
    public $type;
    public $bonusAtk;
    public $bonusDef;
    public $bonusHealth;

    public function __construct($name, $type, $bAtk, $bDef, $bHealth)
    {
        $this->name = $name;
        $this->type = $type;
        $this->bonusAtk = $bAtk;
        $this->bonusDef = $bDef;
        $this->bonusHealth = $bHealth;
    }

    public function __toString()
    {
        return "-- Equipment details --<br>
        Name : $this->name<br>
        Type : $this->type<br>
        Bonus atk : $this->bonusAtk<br>
        Bonus def : $this->bonusDef<br>
        Bonus health : $this->bonusHealth<br>";
    }
}
