 /* Listado de Operaciones CRUD de Mexflix */

/* movies */
	/* create a movie */
	START TRANSACTION;
		INSERT INTO movies (imdb_id, title, plot, author, actors, premiere, poster, trailer, rating, category, state) VALUES
			('tt0479143', 'Rocky', '', 'SylcesterStallone', '', '2006', '', '', 7.2, 'Movie', 2);

		INSERT INTO genres_x_movie (movie, genre) VALUES
			('tt0479143', 8);

		INSERT INTO countries_x_movie (movie, country) VALUES
			('tt0479143', 61);
	COMMIT; /* ROLLBACK; */

	/* read movies */
	SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
		SELECT GROUP_CONCAT(g.genre_name)
			FROM genres AS g
			INNER JOIN genres_x_movie AS gxm
			ON g.genre_id = gxm.genre
			WHERE m.imdb_id = gxm.movie
	) AS genres, (
		SELECT GROUP_CONCAT(c.country_name)
			FROM countries AS c
			INNER JOIN countries_x_movie AS cxm
			ON c.country_id = cxm.country
			WHERE m.imdb_id = cxm.movie
	) AS countries FROM movies AS m
		INNER JOIN status AS s
		ON m.state = s.state_id;

	/* read a movie by imdb */
	SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
		SELECT GROUP_CONCAT(g.genre_name)
			FROM genres AS g
			INNER JOIN genres_x_movie AS gxm
			ON g.genre_id = gxm.genre
			WHERE m.imdb_id = gxm.movie
	) AS genres, (
		SELECT GROUP_CONCAT(c.country_name)
			FROM countries AS c
			INNER JOIN countries_x_movie AS cxm
			ON c.country_id = cxm.country
			WHERE m.imdb_id = cxm.movie
	) AS countries FROM movies AS m
		INNER JOIN status AS s
		ON m.state = s.state_id
		WHERE m.imdb_id = 'tt0479143';

	/* read a movie like title, author, actors */
	SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
		SELECT GROUP_CONCAT(g.genre_name)
			FROM genres AS g
			INNER JOIN genres_x_movie AS gxm
			ON g.genre_id = gxm.genre
			WHERE m.imdb_id = gxm.movie
	) AS genres, (
		SELECT GROUP_CONCAT(c.country_name)
			FROM countries AS c
			INNER JOIN countries_x_movie AS cxm
			ON c.country_id = cxm.country
			WHERE m.imdb_id = cxm.movie
	) AS countries FROM movies AS m
		INNER JOIN status AS s
		ON m.state = s.state_id
		WHERE MATCH(m.title, m.author, m.actors)
		AGAINST('Aaron' IN BOOLEAN MODE);

	/* read a movie by premiere */
	SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
		SELECT GROUP_CONCAT(g.genre_name)
			FROM genres AS g
			INNER JOIN genres_x_movie AS gxm
			ON g.genre_id = gxm.genre
			WHERE m.imdb_id = gxm.movie
	) AS genres, (
		SELECT GROUP_CONCAT(c.country_name)
			FROM countries AS c
			INNER JOIN countries_x_movie AS cxm
			ON c.country_id = cxm.country
			WHERE m.imdb_id = cxm.movie
	) AS countries FROM movies AS m
		INNER JOIN status AS s
		ON m.state = s.state_id
		WHERE m.premiere = '2006';

	/* read a movie by rating */
	SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
			SELECT GROUP_CONCAT(g.genre_name)
			FROM genres AS g
			INNER JOIN genres_x_movie AS gxm
			ON g.genre_id = gxm.genre
			WHERE m.imdb_id = gxm.movie
		) AS genres, (
			SELECT GROUP_CONCAT(c.country_name)
			FROM countries AS c
			INNER JOIN countries_x_movie AS cxm
			ON c.country_id = cxm.country
			WHERE m.imdb_id = cxm.movie
		) AS countries
		FROM movies AS m
		INNER JOIN status AS s
		ON m.state = s.state_id
		WHERE m.rating BETWEEN 8 AND 9;

	/* read a movie by category */
	SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
			SELECT GROUP_CONCAT(g.genre_name)
			FROM genres AS g
			INNER JOIN genres_x_movie AS gxm
			ON g.genre_id = gxm.genre
			WHERE m.imdb_id = gxm.movie
		) AS genres, (
			SELECT GROUP_CONCAT(c.country_name)
			FROM countries AS c
			INNER JOIN countries_x_movie AS cxm
			ON c.country_id = cxm.country
			WHERE m.imdb_id = cxm.movie
		) AS countries
		FROM movies AS m
		INNER JOIN status AS s
		ON m.state = s.state_id
		WHERE m.category = 'Serie';

	/* read a movie by state */
	SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
			SELECT GROUP_CONCAT(g.genre_name)
			FROM genres AS g
			INNER JOIN genres_x_movie AS gxm
			ON g.genre_id = gxm.genre
			WHERE m.imdb_id = gxm.movie
		) AS genres, (
			SELECT GROUP_CONCAT(c.country_name)
			FROM countries AS c
			INNER JOIN countries_x_movie AS cxm
			ON c.country_id = cxm.country
			WHERE m.imdb_id = cxm.movie
		) AS countries
		FROM movies AS m
		INNER JOIN status AS s
		ON m.state = s.state_id
		WHERE m.state = 2;

	/* read a movie by genre */
	SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
		SELECT g.genre_name
			FROM genres AS g
			INNER JOIN genres_x_movie AS gxm
			ON g.genre_id = gxm.genre
			WHERE m.imdb_id = gxm.movie
				AND g.genre_id = 8
		) AS genres, (
			SELECT GROUP_CONCAT(c.country_name)
			FROM countries AS c
			INNER JOIN countries_x_movie AS cxm
			ON c.country_id = cxm.country
			WHERE m.imdb_id = cxm.movie
		) AS countries
		FROM movies AS m
		INNER JOIN status AS s
		ON m.state = s.state_id
		HAVING genres = 'Drama';

	/* read a movie by country */
	SELECT m.imdb_id, m.title, m.plot, m.author, m.actors, m.premiere, m.poster, m.trailer, m.rating, m.category, s.state_name, (
			SELECT GROUP_CONCAT(g.genre_name)
			FROM genres AS g
			INNER JOIN genres_x_movie AS gxm
			ON g.genre_id = gxm.genre
			WHERE m.imdb_id = gxm.movie
		) AS genres, (
			SELECT c.country_name
			FROM countries AS c
			INNER JOIN countries_x_movie AS cxm
			ON c.country_id = cxm.country
			WHERE m.imdb_id = cxm.movie
				AND c.country_id = 60
		) AS countries
		FROM movies AS m
		INNER JOIN status AS s
		ON m.state = s.state_id
		HAVING countries = 'Estados Unidos';

	/* update a movie */
	START TRANSACTION;
		UPDATE movies
			SET title = 'Rocky Balboa',
				plot = 'Thirty years after the ring of the first bell, Rocky Balboa comes out of retirement and dons his gloves for his final fight; against the reigning heavyweight champ Mason \'The Line\' Dixon.',
				author = 'Sylvester Stallone',
				actors = 'Sylvester Stallone, Burt Young, Antonio Tarver, Geraldine Hughes',
				premiere = '2006',
				poster = 'http://ia.media-imdb.com/images/M/MV5BMTM2OTUzNDE3NV5BMl5BanBnXkFtZTcwODczMzkzMQ@@._V1_SX300.jpg',
				trailer = 'https://www.youtube.com/watch?v=8tab8fK2_3w',
				rating = 7.2,
				category = 'Movie',
				state = 2
			WHERE imdb_id = 'tt0479143';

		DELETE FROM genres_x_movie WHERE movie = 'tt0479143';

		INSERT INTO genres_x_movie (movie, genre) VALUES
			('tt0479143', 8),
			('tt0479143', 22);

		DELETE FROM countries_x_movie WHERE movie = 'tt0479143';

		INSERT INTO countries_x_movie (movie, country) VALUES
			('tt0479143', 60);
	COMMIT; /* ROLLBACK; */

	/* delete a movie */
	START TRANSACTION;
		DELETE FROM genres_x_movie WHERE movie = 'tt0479143';

		DELETE FROM countries_x_movie WHERE movie = 'tt0479143';

		DELETE FROM movies WHERE imdb_id = 'tt0479143';
	COMMIT; /* ROLLBACK; */

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
	INSERT INTO users
		SET	user = '@usuario',
			email = 'usuario@midominio.com',
			name = 'Soy un Usuario',
			birthday = '1988-09-08',
			pass = MD5('un_password'),
			role = 'Admin';

	/* read users */
	SELECT * FROM users;

	/* read a user by user */
	SELECT * FROM users WHERE user = '@usuario';

	/* read a user by email */
	SELECT * FROM users WHERE email = 'usuario@midominio.com';

	/* read a user by role */
	SELECT * FROM users WHERE role = 'Admin';

	/* update a user */
		/* update a data user */
		UPDATE users
			SET name = 'Soy un Usuario',
				birthday = '1988-08-07',
				role = 'User'
			WHERE user = '@usuario'
				AND email = 'usuario@midominio.com';
		/* update a password user */
		UPDATE users
			SET pass = MD5('un_nuevo_password')
			WHERE user = '@usuario'
				AND email = 'usuario@midominio.com';

	/* delete a user */
	DELETE FROM users
		WHERE user = '@usuario'
			AND email = 'usuario@midominio.com';
