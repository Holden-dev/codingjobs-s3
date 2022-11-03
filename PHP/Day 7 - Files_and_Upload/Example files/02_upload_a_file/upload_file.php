<?php

if (isset($_POST['uploadBtn'])) {
    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';

    /*
        The uploaded files are places in a temporary folder on the server.
        These files must be saved/moved to the desired location/folder.
    */

    // Is there some errors ? (connection lost, file too big ...) 
    if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK)
        die('Error during upload');

    // Limit the type of the file : only images
    $extension = array_search(
        $_FILES['myFile']['type'],
        array(
            '.jpg' => 'image/jpeg',
            '.png' => 'image/png',
            '.gif' => 'image/gif'
        )
    );

    if (!$extension)
        die('File must be an image !');
    else {
        $fileName = time();
        $filePath = "uploads/$fileName$extension";

        if (move_uploaded_file($_FILES['myFile']['tmp_name'], $filePath))
            echo "File uploaded !";
        else
            echo "Problem uploading the file !";
    }
}


?>

<!-- enctype is mandatory to be able to upload a file  -->
<form enctype="multipart/form-data" method="post">
    <input type="file" name="myFile" id="myFile"><br>
    <input type="submit" name="uploadBtn" value="Submit form">
</form>