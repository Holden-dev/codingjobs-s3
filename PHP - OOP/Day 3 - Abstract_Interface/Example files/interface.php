<?php

/*
    INTERFACE

    Interface looks like a class but only contains abstract methods.

    Interfaces are used to 'force' classes to have the same role/job.
    Sometimes, we use interfaces to implement multiple inheritance.

    Best practice : 
        - Name of the file should be the same as the interface name.
        - Name of the interface starts with Capital I

*/

interface IActions
{
    // Abstract is implicit
    public function sit();
}


class Robot implements IActions
{
    public function work()
    {
        echo "Robot is working";
    }

    public function sit()
    {
        echo "Robot is trying to sit<br>";
    }
}

class Dog extends Animal implements IActions
{
    public function communicate()
    {
        echo "Wooooof !<br>";
    }

    public function sit()
    {
        echo "Dog is sitting<br>";
    }
}

/*
Abstract class :
    1. Use abstract class when rules/template must be defined for subclasses (children).
    2. Abstract classes provides default action for children
    3. Use to provide a template for potential future inherited classes.

    
Interface
    1. Use an interface when a role/rules must be defined for classes, regardless of the inheritance.
    2. You can't instantiate an interface.
    3. A class can implement multiple interfaces.
    */