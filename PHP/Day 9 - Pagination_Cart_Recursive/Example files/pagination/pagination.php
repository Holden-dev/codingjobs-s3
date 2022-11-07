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
    SELECT * FROM songs LIMIT 0, 3

    If you want to get the next three songs
    SELECT * FROM songs LIMIT 3, 3


    Helper : 

    Step 1:
        Decide how many elements to display on the page. 2

    Step 2:
        Check if you have a URI param.
        For example : songs.php?page=1
    
     Step 3:
        Thanks to the page number, you can change the query.
        SELECT * FROM songs LIMIT X, 3

        You just have to figure out the X value.

        --- Links (navigate throught the pages)

        Step 1. Create two links/buttons 'previous' / 'next'.
        Previous : currentpage - 1
        Next : currentpage + 1

        Step 2. 
        Make sure that on the first page, 'previous' is disable.
        Make sure that on the last page, 'next' is disable.

        To do that, you have to count how many songs in total.
        Divide that number by the number of songs per page.

*/
