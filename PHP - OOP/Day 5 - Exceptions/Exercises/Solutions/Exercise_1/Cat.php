<?php

require_once "Animal.php";

class Cat extends Animal
{
    public function communicate()
    {
        echo "Meow !<br>";
    }
}
