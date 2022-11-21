<?php

class Utility
{
    public static function Log()
    {
        $content = date('Y-m-d H:i:s') . " - Accessing file\r\n";

        $file_handle = fopen('access.log', 'a');

        if (fwrite($file_handle, $content))
            echo "Loggued ok";
        else
            echo "Loggued not ok";

        fclose($file_handle);
    }
}
