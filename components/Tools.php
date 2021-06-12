<?php

class Tools
{
    public static function showMessage($message, $color)
    {
        $output = "<p style='color:$color; font-size:18px; margin:0 auto;'>
            $message
        </p>";

        echo $output;
    }
}