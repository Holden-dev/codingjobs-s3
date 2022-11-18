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
        echo "$this->name is currently working.<br>";
    }
}
