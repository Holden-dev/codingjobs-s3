<?php

function display_songs()
{
    // Ask the model the data
    require_once './Model/SongModel.php';
    $songs = find_all();

    // Pass the data to the view
    require_once './View/SongsView.php';
}

function display_song($id)
{
    // Ask the model the data
    require_once './Model/SongModel.php';
    $song = find($id);

    // Check and call the proper view
    if ($song != null)
        require_once './View/SongDetailsView.php';
    else {
        $msg = 'Song is not available<br>';
        require_once './View/ErrorView.php';
    }
}
