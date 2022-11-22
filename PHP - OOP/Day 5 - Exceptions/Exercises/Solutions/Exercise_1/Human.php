<?php

require_once "LivingBeing.php";

class Human extends LivingBeing implements IWorker
{
    public function communicate()
    {
        echo "Hey, my name is $this->name<br>";
    }

    public function work()
    {
        // 1 out 4 to throw exception
        if (rand(1, 4) == 1)
            throw new Exception("$this->name has been injured<br>");

        echo "$this->name is currently working.<br>";
    }
}
