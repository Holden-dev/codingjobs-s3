<?php

require_once 'exercise2_array.php';

krsort($celebrities);

$richestCelebrity = '';
$richestBank = 0;

foreach ($celebrities as $name => $info) {
    // Calculate bank balance (credit - debit)
    $balance = $info['credit'] - $info['debit'];

    // Display in red if balance < 0
    if ($balance > 0)
        echo $name . ' owns ' . $info['houses'] . ' houses and has a bank balance of ' . $balance  . ' $<br>';
    else
        echo $name . ' owns ' . $info['houses'] . ' houses and has a bank balance of <span style="color: red">' . $balance  . '</span> $<br>';


    // Retrieve the richest celibrity
    if ($balance > $richestBank) {
        $richestBank = $balance;
        $richestCelebrity = $name;
    }
}

echo '<hr>';
echo 'The richest person is : ' . $richestCelebrity . ' with : ' . $richestBank . ' $';
