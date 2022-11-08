<?php

/*
    Recursive functions

    A recursive function is a function that calls itself during its execution.
    The process may repeat several times (similar to a loop).

*/

function display($x)
{
    echo $x . '<br>';

    if ($x >= 20)
        return "Done";
    else
        return display($x + 1);
}

echo display(10);
