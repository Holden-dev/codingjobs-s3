<?php

/*

EXCEPTION
An exception is an unexpected result that can be handle by the script.

For example: you try to open a file, but the file doesn't exists. You can let the user choose another file OR maybe create the file.

Exceptions must be handle by the developper.
Exceptions are handled in a Object Oriented way.

When an exception is triggered (thrown), an 'Exception' object is created.
An exception object contains some usefull information about what is happening (getMessage(), getCode(), toString....)

Syntax:
    throw new Exception();

'new' create an exception object
'throw' allow to trigger the exception
*/

class MultiplyByNegativeException extends Exception
{
}


function multiply($x, $y)
{
    // Check if numbers are negative
    if ($x < 0 or $y < 0)
        throw new MultiplyByNegativeException('Negative numbers not allowed!');
    else if (is_string($x) or is_string($y))
        throw new Exception();

    echo $x * $y;
}

try {
    multiply(10, -2);
    echo "After function<br>";
} catch (\MultiplyByNegativeException $th) {
    // Do something if it is negative
    echo $th->getMessage();
} catch (\Exception $th) {
    echo "Something is wrong<br>";
}
