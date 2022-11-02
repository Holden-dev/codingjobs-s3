* Instructions:
    We want to develop a dynamic web application of the type 'IMDB'.
    Here is all the information and all the needs necessary for the development of the
    application.

* Part 0 :

    Create and initialize a Github repository.
    Everyone on the team should use it to collaborate on the project.

* Part 1 :
    
    MOVIES(id, title, description, poster, release_date, director_id)
    DIRECTORS(id, first name, last name, gender, nationality, birth_date)
    USERS(id, name, email, password)
    WATCHLIST(movie_id, user_id)

    Create the DB matching those informations.

* Part 2 :
    - Movies list page ('/ movies')
    This page will list all movies with poster and title.
    Display also description: If it is more than 30 characters, just display first 30 characters follow by '...'

    - Add a filter to be able to filter by title asc/desc OR by date asc/desc.

    - Add a search input on top. It can be use to search a movie by title when you submit.

* Part 3 :
    - Movie detail page ('/movie?id=x')
    This page display all informations about a specific movie.
    You retrieve the id of the movie to display in the URL.

* Part 4 :
    - Create a page to insert a new movie.
    You need to use a form and make sure to do the validations.

* Part 5 :
    - Registration page ('/ register'):
    Allows the user to register on the site. He must provide the email and
    password to be able to register.

    - Connection page ('/ login'):
    Allows the user to connect.
    Check if the user exists in the database.
    o If the user exists, you should display a success message.
    o Display an error message if this is not the case or if it has the
    wrong password.

    - When user is login, you must hide 'login/register' link from navbar.
    Instead display 'logout' button/link.

* Part 6 :
    - My account page ('/ account')
    This page will display information about the user.
    This page is allowed only for loggued-in user.

* Part 7 :
    - Watchlist
    Add a button 'add to watchlist' that saves the movie to the user watch list.
    
    - Edit account
    Display the watchlist content on the account page.
    User should also be able to delete a movie from this list.
    
