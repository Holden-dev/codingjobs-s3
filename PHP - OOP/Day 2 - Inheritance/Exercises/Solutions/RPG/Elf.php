<?php

class Elf extends Adventurer
{

    // Attack method
    public function attack($opponent)
    {
        $bonusAtk = 0;
        if ($this->equipment->type == 'Sword')
            $bonusAtk += 2;

        $totalAtk = $this->atkPoints + $bonusAtk;
        $opponent->healthPoints -= $totalAtk;
    }

    // Use power method
    public function usePower()
    {
        if ($this->powerAlreadyUsed == false) {
            $this->defPoints += 3;
            $this->powerAlreadyUsed = true;
        } else
            echo "Power already used<br>";
    }
}
