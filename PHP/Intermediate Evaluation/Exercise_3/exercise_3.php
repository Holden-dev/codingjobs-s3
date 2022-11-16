<?php

// Declare function
function array_multiply($arr1, $arr2)
{
    // Make sure both arguments are arrays
    if (!is_array($arr1) or !is_array($arr2)) {
        echo "Both arguments must be of type array";
        return false;
    }

    // Make sure both arrays are the same size
    if (count($arr1) != count($arr2)) {
        echo "Both arrays must be the same size";
        return false;
    }

    // Create the new array and populate it
    $finalArray = array();

    for ($i = 0; $i < count($arr1); $i++) {
        $finalArray[$i] = $arr1[$i] * $arr2[$i];
    }

    return $finalArray;
}

// call the function
$tab1 = array(9, 20, 10, 3, 25, 2, 4);
$tab2 = array(2, 5, 13, 3, 1, 11, 7);
$result = array_multiply($tab1, $tab2);

// Display array only if result != false
if ($result) {
    foreach ($result as $value) {
        echo $value . '<br>';
    }
}
