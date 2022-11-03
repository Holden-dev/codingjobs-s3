<?php

// Read a file (but no control)
// $file_content = readfile('movies.txt');
// echo $file_content;

// Another function to read file (but no control)
// $file_content = file_get_contents('movies.txt');
// echo $file_content;

// Check if a file exists
if (file_exists('movies.txt')) {

    // Open the file (r : read, w: write, a: append)
    $file_handle = fopen('movies.txt', 'r');

    // Read the file
    while (!feof($file_handle)) {
        // Retrieve the current line
        $current_line = fgets($file_handle);
        echo "<p>$current_line</p>";
    }

    // Close the file
    fclose($file_handle);
} else
    echo "File doesnt exists!";
