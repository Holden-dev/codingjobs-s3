<?php

	/*
	Based on this DB structure : 

	USERS (user_id, first_name, last_name, mail, password) 
	ARTISTS (artist_id, name, bio, gender, date_of_birth) 
	SONGS (song_id, title, release_date, #categ_id, #artist_id) 
	CATEGORIES (categ_id, title) 
	PLAYLISTS (playlist_id, title, creation_date, #user_id) PLAYLIST_CONTENT(#playlist_id, #song_id)


	Write the SQL queries to : 
		1. Retrieve all playlists with user's full name on each playlist.
		2. Get all the songs for the artist id=2
		3. Get number of songs per categories.
	*/
