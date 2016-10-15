SELECT * FROM users;

SELECT COUNT(*) FROM genres_x_movie;

SELECT * FROM countries_x_movie WHERE country = 60;

SELECT * FROM movies WHERE actors LIKE '%Aaron%';

SELECT * FROM movies WHERE actors LIKE '%Aaron%' AND category = 'Movie';

SELECT * FROM movies WHERE actors LIKE '%Aaron%' OR category = 'Movie';

SELECT * FROM genres_x_movie WHERE genre IN (6, 8);

SELECT title, premiere, category, rating FROM movies WHERE rating BETWEEN 9 AND 10;

SELECT title, premiere, category, rating FROM movies WHERE rating BETWEEN 9 AND 10 AND NOT category = 'Serie';

SELECT * FROM genres_x_movie ORDER BY movie DESC, genre DESC;

SELECT * FROM movies WHERE MATCH(title, author, actors) 	AGAINST('Breaking' IN BOOLEAN MODE);

/* INTEGRIDAD REFERENCIAL */

DELETE FROM countries WHERE country_id = 60;

DELETE FROM countries WHERE country_id = 61;

UPDATE countries SET country_id = 200 WHERE country_id = 60;

SELECT * FROM countries_x_movie;

DELETE FROM countries;

/* TODA SENTENCIA DELETE O UPDATE DEBEN LLEVAR CLÁUSULA WHERE */

DELETE FROM users;

UPDATE movies SET plot = 'No description';

/* 
	SENTENCIA REPLACE
		Si el valor del campo clave y/o único  del registro a insertar existe, REPLACE lo elimina y agrega el nuevo registro (ejecuta 2 consultas 1 DELETE y 1 INSERT)

		Si el valor del campo clave y/o único  del registro a insertar NO existe, REPLACE agrega el nuevo registro (ejecuta 1 consultas 1 INSERT)
*/

SELECT * FROM users;

REPLACE INTO users (user, email, name, birthday, pass, role) VALUES ('@otro_usuario', 'otrousuario@loquesea.com', 'Otro Usuario', '1984-07-17', MD5('otro password'), 'User');

REPLACE INTO users SET user = '@otro_usuario', email = 'otrousuario@loquesea.com', role = 'Admin';