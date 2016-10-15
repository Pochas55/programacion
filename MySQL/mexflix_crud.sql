 /* Listado de Operaciones CRUD de Mexflix */

/* movies */
	/* create a movie */
	/* read movies */
	/* read a movie by imdb */
	/* read a movie like title, author, actors */
	/* read a movie by premiere */
	/* read a movie by rating */
	/* read a movie by category */
	/* read a movie by state */
	/* read a movie by genre */
	/* read a movie by country */
	/* update a movie */
	/* delete a movie */

/* genres */
	/* create a genre */
	INSERT INTO genres (genre_name) VALUES ('Agenre');
	/* read genres */
	SELECT * FROM genres;
	/* read a genre */
	SELECT * FROM genres WHERE genre_id = 27;
	/* update a genre */
	UPDATE genres SET genre_name = 'A genre' WHERE genre_id = 27;
	/* delete a genre */
	DELETE FROM genres WHERE genre_id = 27;

/* countries */
	/* create a country */
	INSERT INTO countries (country_name) VALUES ('Acountry');

	/* read countries */
	SELECT * FROM countries;

	/* read a country */
	SELECT * FROM countries WHERE country_id = 195;

	/* update a country */
	UPDATE countries SET country_name = 'A country' WHERE country_id = 195;

	/* delete a country */
	DELETE FROM countries WHERE country_id = 195;


/* status */
	/* create a state */
	INSERT INTO status (state_name) VALUES ('Astate');

	/* read status */
	SELECT * FROM status;

	/* read a state */
	SELECT * FROM status WHERE state_id = 6;

	/* update a state */
	UPDATE status SET state_name = 'A state' WHERE state_id = 6;

	/* delete a state */
	DELETE FROM status WHERE state_id = 6;

/* genres_x_movie */

/* countries_x_movie */

/* users */
	/* create a user */
	/* read users */
	/* read a user by user */
	/* read a user by email */
	/* read a user by role */
	/* update a user */
		/* update a data user */
		/* update a password user */
	/* delete a user */