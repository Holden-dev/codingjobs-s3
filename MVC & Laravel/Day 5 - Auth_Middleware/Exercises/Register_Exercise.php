<?php

/*

Continue the Flower exercise

- Step 1 :

    You have to create a migration file for 'users' table.
    Attribute for User : username, email, password.

- Step 2 :

    Run the migration by running : 
        php artisan migrate

    You don't need to refresh or rollback for this step.
    Just migrate.

- Step 3 :

    Create the 'register' page that displays a form.
    This form will ask for : username, email, password.

- Step 4 :

    Create the CustomUser model (User model already exists by default, so let's call it 'CustomUser).

    Make sure it connects to the correct table.

- Setp 5 :
    
    When the user submits the form you have to perfom the 'standard' validations.
    If validations are ok, try to insert using the CustomUser model.

    When inserting in the DB, the password must be hashed !
    For this purpose, use accessors (setters).

*/