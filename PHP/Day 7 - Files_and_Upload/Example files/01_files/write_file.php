<?php

// In write mode, if the file doesn't exists, it will try to create it
// Two modes : "w" override the content of the file, "a" to append
$file_handle = fopen("myfile.txt", "a");

// Write inside the file
fwrite($file_handle, "I need a beer.\r\n");

// Close the file
fclose($file_handle);

echo "File created";
