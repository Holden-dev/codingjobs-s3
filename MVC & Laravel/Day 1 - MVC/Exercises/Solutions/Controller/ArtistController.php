<?php

require_once 'Model/ArtistModel.php';

class ArtistController
{

    private $artistModel;

    public function __construct()
    {
        $this->artistModel = new ArtistModel();
    }

    public function display_artists()
    {
        // Ask the model for the data
        $artists = $this->artistModel->find_all();

        // Call the view
        require_once './View/ArtistsView.php';
    }
}
