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

?>

<nav>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="index.php?page=songs">Songs</a>
        </li>
        <li>
            <a href="index.php?page=artists">Artists</a>
        </li>
        <li>
            <a href="index.php?page=new-artist">New Artist</a>
        </li>
    </ul>
</nav>

<?php

// Check if there is a request
if (isset($_GET['page'])) {
    // Call the proper controller based on the request
    if ($_GET['page'] == 'songs') {
        require_once 'Controller/SongController.php';
        $songCtrler = new SongController();

        if (isset($_GET['id']))
            $songCtrler->display_song($_GET['id']);
        else
            $songCtrler->display_songs();
    } else if ($_GET['page'] == 'artists') {
        require_once 'Controller/ArtistController.php';
        $artistCtrler = new ArtistController();

        $artistCtrler->display_artists();
    } elseif ($_GET['page'] == 'new-artist') {
        require_once 'Controller/ArtistController.php';
        $artistCtrler = new ArtistController();

        if (isset($_POST['insertBtn']))
            $artistCtrler->insert_artist($_POST['name'], $_POST['gender'], $_POST['date_of_birth'], $_POST['bio']);
        else
            $artistCtrler->new_artist();
    } else {
        $msg = "404 - Page not found<br>";
        require_once './View/ErrorView.php';
    }
} else {
    // Display home page !
    echo 'Home page';
}
