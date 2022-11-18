<?php

class Orc extends Adventurer
{

    // Attack method
    public function attack($opponent)
    {
        if ($opponent->type == 'Elf' && $opponent->equipment == null) {
            $opponent->healthPoints -= 50;
        } else if ($opponent->type == 'Elf' && $opponent->equipment->type != 'Shield') {
            $opponent->healthPoints -= 50;
        } else
            $opponent->healthPoints -= $this->atkPoints;
    }

    // Use power method
    public function usePower()
    {
        if ($this->powerAlreadyUsed == false) {
            $this->atkPoints -= 10;
            $this->defPoints += 20;
            $this->powerAlreadyUsed = true;
        } else
            echo "Power already used<br>";
    }
}
