<?php

/*

Errors:
An error is a unexpected result that can't be handle by the program itself.
Errors are fixed directly by the developer.

*/

function custom_error($error_no, $error_msg)
{
    echo "Something is wrong.<br>";
    echo "Error code : $error_no<br>";
    echo "Error message : $error_msg<br>";
}

set_error_handler('custom_error');


echo 15 / 0;
