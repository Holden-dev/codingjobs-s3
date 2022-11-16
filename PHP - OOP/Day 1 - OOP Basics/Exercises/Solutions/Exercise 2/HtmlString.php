<?php

class HtmlString
{
    private $string;

    // Constructor
    public function __construct($string)
    {
        $this->set_string($string);
    }

    // Setter
    public function set_string($newString)
    {
        if (is_string($newString))
            $this->string = $newString;
        else
            echo "Argument must be a String";
    }

    // Getters
    public function get_string()
    {
        return $this->string;
    }

    public function get_bold_string()
    {
        return "<strong>$this->string</strong>";
    }

    public function get_italic_string()
    {
        return "<i>$this->string</i>";
    }

    public function get_bold_italic_string()
    {
        return "<strong><i>$this->string</i></strong>";
    }
}
