<?php

class Human extends Adventurer
{

    // Attack method
    public function attack($opponent)
    {
        $bonusAtk = 0;
        if ($this->equipment == null)
            $bonusAtk += 3;

        $totalAtk = $this->atkPoints + $bonusAtk;
        $opponent->healthPoints -= $totalAtk;
    }

    // Use power method
    public function usePower()
    {
        if ($this->powerAlreadyUsed == false) {
            $this->healthPoints += 20;
            $this->powerAlreadyUsed = true;
        } else
            echo "Power already used<br>";
    }
}
