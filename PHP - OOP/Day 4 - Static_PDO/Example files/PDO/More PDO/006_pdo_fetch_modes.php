<?php

/*
    It is possible to specify a different fetch mode.

 */

$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// By default, PDO use associative array

/*
    First argument : 
    PDO::ATTR_DEFAULT_FETCH_MODE

    Second :

    Fetch mode.
    http://php.net/manual/fr/pdostatement.fetch.php

    PDO::FETCH_OBJ
            Return standard objects

    PDO::FETCH_CLASS et
    PDO::FETCH_INTO
            Place result in object's class that we specify

    PDO::FETCH_ASSOC
            Return associative arrays

    PDO::FETCH_BOTH
            Return combined array
            (associative et numeric)

 */

