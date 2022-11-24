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

    // Display the form
    public function new_artist()
    {
        require_once "./View/NewArtistView.php";
    }

    // Submit the form / Insert in the DB
    public function insert_artist($name, $gender, $birth_date, $bio)
    {
        // Validations
        $errors = array();

        if (empty($name))
            $errors['name'] = 'Name is mandatory !';

        if (empty($gender))
            $errors['gender'] = 'Gender is mandatory !';

        if (empty($birth_date))
            $errors['birth_date'] = 'Birth date is mandatory !';

        if (empty($bio))
            $errors['bio'] = 'Bio is mandatory !';

        if (empty($errors)) {
            // Ask the model to insert
            if ($this->artistModel->insert_artist($name, $gender, $birth_date, $bio))
                $msg = 'Successfully inserted in the DB!';
            else
                $msg = 'Problem inserting. Try again.';
        }

        // Call the view
        require_once './View/NewArtistView.php';
    }
}
