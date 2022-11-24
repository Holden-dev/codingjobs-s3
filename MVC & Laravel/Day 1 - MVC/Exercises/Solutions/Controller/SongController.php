<?php

require_once './Model/SongModel.php';

class SongController
{
    private $songModel;

    public function __construct()
    {
        $this->songModel = new SongModel();
    }

    public function display_songs()
    {
        // Ask the model the data
        $songs = $this->songModel->find_all();

        // Pass the data to the view
        require_once './View/SongsView.php';
    }

    public function display_song($id)
    {
        // Ask the model the data
        $song = $this->songModel->find($id);

        // Check and call the proper view
        if ($song != null)
            require_once './View/SongDetailsView.php';
        else {
            $msg = 'Song is not available<br>';
            require_once './View/ErrorView.php';
        }
    }
}
