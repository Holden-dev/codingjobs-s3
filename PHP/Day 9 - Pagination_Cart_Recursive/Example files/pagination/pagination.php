<?php

/*
    To use pagination, we will use GET method
    For example : songs.php?page=1
*/

$nbPage = 1;

if (isset($_GET['page']))
    $nbPage = $_GET['page'];

echo "Im on the page number : $nbPage";

/*
    You want to use LIMIT.

    If you want to get the first three songs
    SELECT * FROM songs LIMIT 3, 0

    If you want to get the next three songs
    SELECT * FROM songs LIMIT 3, 3


    Helper : 

    Step 1:
        Decide how many elements to display on the page.

    Step 2:
        Check if you have a URI param.
        For example : songs.php?page=1
    
     Step 3:
        Thanks to the page number, you can change the query.
        SELECT * FROM songs LIMIT 3, X

        You just have to figure out the X value.
*/
