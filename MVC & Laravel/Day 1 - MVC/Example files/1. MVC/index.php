<?php

/*
    ROUTEUR - FRONT CONTROLLER

    It will handle every requests from the user.
    Depending on the request, it will call the 'proper' controller.

    For example :
        - If you want to display all songs, the routeur will call the SongController.
        - If you want to retrieve informations about user, the routeur will call the UserController.

    Example of URL : 
        localhost/my_project/index.php
        localhost/my_project/index.php?page=songs
        localhost/my_project/index.php?page=songs&id=5
        localhost/my_project/index.php?page=contact

*/

// Check if there is a request
if (isset($_GET['page'])) {
    // Call the proper controller based on the request
    if ($_GET['page'] == 'songs') {
        require_once 'Controller/SongController.php';

        if (isset($_GET['id']))
            display_song($_GET['id']);
        else
            display_songs();
    } else {
        $msg = "404 - Page not found<br>";
        require_once './View/ErrorView.php';
    }
} else {
    // Display home page !
    echo 'Home page';
}
