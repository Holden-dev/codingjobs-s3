<?php
/*

	Let's assume you have an online shopping website.

	Step 1 :
		Create a 'login.php' file.
		This file should contain a form asking form : email and password. 

	Step 2 :
		Once the user submit the register form, you have to :
			- Check if email & password are not empty.
			- Open a session.
			- In this session, save the email adress.

	Step 3:
		Create a page 'account.php'.

		If a user is trying to access that page :
			- Check if the user loggued in before 
			- If he's not log-in you need to redirect to the register page.
			- If he logged-in, display 'Hello, username. Email address : '.

		To redirect in php : Look for header('location : ....') on google

    Step 4 : 
		
		Add a 'logout' button.
		When the user click, the user should be redirected to the login page and should now be log out.


 */