<?php

class Movie
{
    public $title;
    public $release_date;

    public function __construct($title, $release_date)
    {
        $this->title = $title;
        $this->release_date = $release_date;
    }
}
