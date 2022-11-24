<?php

/*

******* Exercise : Spotify ********

Continue the MVC Example about Songs.

Step 1 : 
    - Create an ArtistModel and add a method to retrieve all artists
    - Method should RETURN the artists

Step 2 : 
    - Create ArtistController and add a method to 'display the artists'.
    This method should ask the model and require the view to display

Step 3 : 
    - Create a view ArtistsView, that displays all the artists.

Step 4 : 
    - Edit ArtistModel and add a method to insert an Artist
    This method is taking four(4) arguments : name, gender, birth_date and bio.

    - Method should return true or false. 

Step 5 : 
    - Create a view NewArtistView, that displays a form to insert a new Artist.

Step 6 : 
    - Edit ArtistController and add a method to handle displaying the form
    This method should require the view to display the form

Step 7 :
    Edit index.php file to handle request to show the form for adding new artist

Step 8 : 
    - Edit ArtistController and add a method to handle inserting a Artist
    This method should use $_POST array and ask for ArtistModel to insert

    You also have to edit index.php
    
You must use MVC and OOP !!