<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file, located in the same folder as this script.
		Split each lines with a horizontal line in between. 

	*/


// Check if a file exists
if (file_exists('../message.txt')) {

	// Open the file (read mode)
	$file_handle = fopen('../message.txt', 'r');

	// Read the file
	while (!feof($file_handle)) {
		// Retrieve the current line
		$current_line = fgets($file_handle);
		echo "<p>$current_line</p><hr>";
	}

	// Close the file
	fclose($file_handle);
} else
	echo "File doesnt exists!";
