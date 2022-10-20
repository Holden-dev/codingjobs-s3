<?php

$myNumber = 5;
echo 'BEFORE -- Number outside : ' . $myNumber . '<br>'; // 5
echo displayVariable($myNumber); // 15
echo 'AFTER -- Number outside : ' . $myNumber . '<br>'; // 5

//Function
function displayVariable($x)
{
    $x += 10;
    return 'INSIDE THE FUNCTION ' . $x . '<br>';
}
