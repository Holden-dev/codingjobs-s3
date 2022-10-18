<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $avatar = 'banana.png';
    $firstName = 'Banana';
    $lastName = 'Guy';
    $atkPoints = 10;
    $defPoints = 5;

    // echo $avatar;
    // echo "<h2>$firstName $lastName</h2>";
    // echo "Attack : $atkPoints<br>";
    // echo "Defense : $defPoints<br>";
    ?>

    <img src="<?php echo $avatar; ?>" width="100px">
    <h2><?php echo "$firstName $lastName"; ?></h2>
    <p>Attack points : <?php echo $atkPoints; ?></p>
    <p>Defense points : <?php echo $defPoints; ?></p>

    <?php
    if ($atkPoints > 9 or $defPoints > 9) {
        echo '<div class="alert">
            <strong>Congratulations !</strong> Your character is ready to fight.</strong>
        </div>';
    }
    ?>

</body>

</html>