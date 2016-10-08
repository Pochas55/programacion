/*
	SQL NO distingue entre MÁYUSCULAS y minúsculas pero:
		Comandos y Palabras reservadas de SQL van en MÁYUSCULAS
		Nombres de Objetos y Datos van en minúsculas con snake_case
		Para strings usar ''
		Todas las sentencias terminan con ;

	Tipos de Datos en MySQL
		http://mysql.conclase.net/curso/index.php?cap=005#
		http://dev.mysql.com/doc/refman/5.7/en/data-types.html
*/

DROP DATABASE IF EXISTS mexflix32;

CREATE DATABASE IF NOT EXISTS mexflix32;

USE mexflix32;

CREATE TABLE countries(
	country_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	country_name VARCHAR(50) NOT NULL 
);

CREATE TABLE genres(
	genre_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	genre_name VARCHAR(50) NOT NULL
);

CREATE TABLE status(
	state_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	state_name VARCHAR(20) NOT NULL
);

CREATE TABLE movies(
	imdb_id CHAR(9) PRIMARY KEY,
	title VARCHAR(80) NOT NULL,
	plot TEXT,
	author VARCHAR(100) DEFAULT 'Pending',
	actors VARCHAR(100) DEFAULT 'Pending',
	premiere YEAR(4) NOT NULL,
	poster VARCHAR(150) DEFAULT 'no-poster.jpg',
	trailer VARCHAR(150) DEFAULT 'no-trailer.jpg',
	rating DECIMAL(2,1) UNSIGNED DEFAULT 0,
	category ENUM('Movie', 'Serie') NOT NULL,
	state INTEGER UNSIGNED NOT NULL,
	FOREIGN KEY(state)
		REFERENCES status(state_id)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
);

CREATE TABLE countries_x_movies(
	cxm_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	movie CHAR(9) NOT NULL,
	country INTEGER UNSIGNED NOT NULL,
	FOREIGN KEY(movie) 
		REFERENCES movies(imdb_id) 
		ON DELETE RESTRICT 
		ON UPDATE CASCADE,
	FOREIGN KEY(country)
		REFERENCES countries(country_id)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
);

CREATE TABLE genres_x_movies(
	gxm_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	movie CHAR(9) NOT NULL,
	genre INTEGER UNSIGNED NOT NULL,
	FOREIGN KEY(movie) 
		REFERENCES movies(imdb_id) 
		ON DELETE RESTRICT 
		ON UPDATE CASCADE,
	FOREIGN KEY(genre)
		REFERENCES genres(genre_id)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
);

CREATE TABLE users(
	user VARCHAR(20) PRIMARY KEY,
	email VARCHAR(80) UNIQUE NOT NULL,
	name VARCHAR(100) NOT NULL,
	birthday DATE NOT NULL,
	pass CHAR(32) NOT NULL,
	role ENUM('User', 'Admin') NOT NULL
);