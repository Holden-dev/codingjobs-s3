<?php

function read_a_file($filename)
{
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        echo "Content of the file : $content";
    } else {
        throw new Exception("File '$filename' does not exists!\r\n");
    }
}

$chances = 3;

while ($chances > 0) {
    try {
        $filename = readline("Filename ?\r\n");
        read_a_file($filename);
        $chances = 0;
    } catch (\Exception $e) {
        echo $e->getMessage();
        $chances--;

        if ($chances == 0)
            echo "No more tries.";
    }
}
