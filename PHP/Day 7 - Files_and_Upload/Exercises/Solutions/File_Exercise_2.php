<?php

/*
	Create a script that saves in the 'last_access.log' file the timestamp of this time (now).

	Everytime someone access the page you should save 'Access file : xxxx-xx-xx' (with hours minutes and seconds)

	Choose the right setting to open the file.
*/
date_default_timezone_set('Europe/Luxembourg');

// Open the file
$file_handle = fopen("last_access.log", "a");

// Write inside the file
fwrite($file_handle, "Access file : " . date('d/m/Y H:i:s') . "\r\n");

// Close the file
fclose($file_handle);

echo "File created";
