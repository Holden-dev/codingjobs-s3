<?php

require_once "LivingBeing.php";

class Human extends LivingBeing
{
    public function talk()
    {
        echo "Hey, my name is $this->name<br>";
    }

    public function work()
    {
        echo "$this->name is currently working.<br>";
    }
}
