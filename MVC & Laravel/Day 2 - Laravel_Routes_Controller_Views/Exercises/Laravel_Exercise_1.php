<?php 

/*

	We have an online flower website.

	- Step 1 : 

		Create a new database with the table flowers.
		This table should contain : id (int), name (varchar), price (double)
	
	- Step 2 :
		
		Create a new Laravel project or use an old one.
		You have to create a navigation menu that will be display on every pages.

	- Step 3 :

		In Laravel, you have to create the route to show all the flowers.
		Route should looks like this : '/flowers'.

		Don't forget to display the navigation menu on this page!

	- Step 4 :

		Insert a new flower.
		First, create a route using get method '/flowers/create' that display a form with all the mandatory fields.
		
		The form have to use post method.
		
		Create a second route using post method '/flowers/create'.
		This route should be call when submitting the form and it should be responsible for inserting the flowers in the DB.

	- Step 5 :

		Update an existing flower.
		First, create a route '/flowers/update/{id}'
		It should display a page that contains a form with all the fields (the fields should be filled with data from the flower).

		When form submitted it will use post method and update the flower in the DB.

	- Step 6 :
		
		Edit the page that shows all the flowers.
		Now, for each flower, there is a link to 'edit' the flower.

	- Step 7 :
	
		Edit the route that shows all the flowers.
		Now, for each flower, there is a link to 'delete' the flower.
		This link should target the route to delete '/flowers/delete/{id}'
		
		Inside the destroy method of your controller you should :
			1. Delete the flower.
			2. Redirect to flowers page.

 ?>

