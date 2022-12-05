<?php

/*

Auth exercise.

-- Exercise 1 :

- Step 1
    For this exercise, I suggest you to create a new laravel project.
    You can try it on Flower Exercise but it's better to create new project.

- Step 2 
    Create a new empty database in phpmyadmin.
    You can call it 'auth_db' or 'auth_test'.

- Step 3
    You are now ready to install all packages for Authentication.
    Follow those steps :
    https://laravel.com/docs/9.x/starter-kits#laravel-breeze-installation
    https://laravel.com/docs/9.x/starter-kits#breeze-and-blade

- Step 4 :

    Once you are done with the two steps above, you are ready to use the built-in register/login process from Laravel.
    Try to run the server and access '/register' or '/login' page to see if it works.


-- Exercise 2 :

Exercise 1 needs to be completed to do this exercise.

- Step 1

        Change the user migration.
		User table should now have those columns :
			- first_name (string)
			- last_name (string)
			- city (string)
			- postal code (numeric)
			- email
			- email_verified_at
			- password
			- remember token
			- updated_at
			- created_at

		You also have to edit the register form to match.

- Step 2 :
        Create an account page.
		Display all informations about the user (except password).
		
		This page is accessible only by the loggued in user.
		If user try to access without being connected, redirect to home page.

    To check if user is loggued in, check this :
    https://laravel.com/docs/9.x/authentication#retrieving-the-authenticated-user

*/