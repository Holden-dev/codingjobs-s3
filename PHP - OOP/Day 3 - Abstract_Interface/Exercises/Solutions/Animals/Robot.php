<?php

class Robot implements IWorker
{
    public $id;
    public $color;

    public function __construct($id, $color)
    {
        $this->id = $id;
        $this->color = $color;
    }

    public function work()
    {
        echo "Robot id:$this->id is currently working.<br>";
    }
}
