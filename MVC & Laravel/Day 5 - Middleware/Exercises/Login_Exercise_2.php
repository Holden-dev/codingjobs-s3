<?php

/*

Continue Login exercise.
We want to allow only administrator to access 'create flower' / 'update flower' and 'delete flower'

https://laravel.com/docs/9.x/middleware

Step 1 :
    Change the User migration.
    Add a column 'admin' (boolean). By default, it's always false.

    To be able to set someone as admin, you will have to do it manually directly in PHPMyAdmin

Step 2 :
    When user is logging in, save the role in session (admin: true or false)

Step 2 :

    Create a middleware 'EnsureIsAdmin'
    The middleware needs to check if the user is admin before accessing the page.
    If user is not admin, it will be redirected to flowers page with a message saying 'You dont have enough credentials'.

Step 3 :

    Apply the middleware to the matching routes.



*/