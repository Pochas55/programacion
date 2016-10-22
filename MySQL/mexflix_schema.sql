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

INSERT INTO countries (country_id, country_name) VALUES
	(1, 'Afganistán'),
	(2, 'Albania'),
	(3, 'Alemania'),
	(4, 'Andorra'),
	(5, 'Angola'),
	(6, 'Antigua y Barbuda'),
	(7, 'Arabia Saudita'),
	(8, 'Argelia'),
	(9, 'Argentina'),
	(10, 'Armenia'),
	(11, 'Australia'),
	(12, 'Austria'),
	(13, 'Azerbaiyán'),
	(14, 'Bahamas'),
	(15, 'Bangladés'),
	(16, 'Barbados'),
	(17, 'Baréin'),
	(18, 'Bélgica'),
	(19, 'Belice'),
	(20, 'Benín'),
	(21, 'Bielorrusia'),
	(22, 'Birmania'),
	(23, 'Bolivia'),
	(24, 'Bosnia y Herzegovina'),
	(25, 'Botsuana'),
	(26, 'Brasil'),
	(27, 'Brunéi'),
	(28, 'Bulgaria'),
	(29, 'Burkina Faso'),
	(30, 'Burundi'),
	(31, 'Bután'),
	(32, 'Cabo Verde'),
	(33, 'Camboya'),
	(34, 'Camerún'),
	(35, 'Canadá'),
	(36, 'Catar'),
	(37, 'Chad'),
	(38, 'Chile'),
	(39, 'China'),
	(40, 'Chipre'),
	(41, 'Ciudad del Vaticano'),
	(42, 'Colombia'),
	(43, 'Comoras'),
	(44, 'Corea del Norte'),
	(45, 'Corea del Sur'),
	(46, 'Costa de Marfil'),
	(47, 'Costa Rica'),
	(48, 'Croacia'),
	(49, 'Cuba'),
	(50, 'Dinamarca'),
	(51, 'Dominica'),
	(52, 'Ecuador'),
	(53, 'Egipto'),
	(54, 'El Salvador'),
	(55, 'Emiratos Árabes Unidos'),
	(56, 'Eritrea'),
	(57, 'Eslovaquia'),
	(58, 'Eslovenia'),
	(59, 'España'),
	(60, 'Estados Unidos'),
	(61, 'Estonia'),
	(62, 'Etiopía'),
	(63, 'Filipinas'),
	(64, 'Finlandia'),
	(65, 'Fiyi'),
	(66, 'Francia'),
	(67, 'Gabón'),
	(68, 'Gambia'),
	(69, 'Georgia'),
	(70, 'Ghana'),
	(71, 'Granada'),
	(72, 'Grecia'),
	(73, 'Guatemala'),
	(74, 'Guyana'),
	(75, 'Guinea'),
	(76, 'Guinea ecuatorial'),
	(77, 'Guinea-Bisáu'),
	(78, 'Haití'),
	(79, 'Honduras'),
	(80, 'Hungría'),
	(81, 'India'),
	(82, 'Indonesia'),
	(83, 'Irak'),
	(84, 'Irán'),
	(85, 'Irlanda'),
	(86, 'Islandia'),
	(87, 'Islas Marshall'),
	(88, 'Islas Salomón'),
	(89, 'Israel'),
	(90, 'Italia'),
	(91, 'Jamaica'),
	(92, 'Japón'),
	(93, 'Jordania'),
	(94, 'Kazajistán'),
	(95, 'Kenia'),
	(96, 'Kirguistán'),
	(97, 'Kiribati'),
	(98, 'Kuwait'),
	(99, 'Laos'),
	(100, 'Lesoto'),
	(101, 'Letonia'),
	(102, 'Líbano'),
	(103, 'Liberia'),
	(104, 'Libia'),
	(105, 'Liechtenstein'),
	(106, 'Lituania'),
	(107, 'Luxemburgo'),
	(108, 'Madagascar'),
	(109, 'Malasia'),
	(110, 'Malaui'),
	(111, 'Maldivas'),
	(112, 'Malí'),
	(113, 'Malta'),
	(114, 'Marruecos'),
	(115, 'Mauricio'),
	(116, 'Mauritania'),
	(117, 'México'),
	(118, 'Micronesia'),
	(119, 'Moldavia'),
	(120, 'Mónaco'),
	(121, 'Mongolia'),
	(122, 'Montenegro'),
	(123, 'Mozambique'),
	(124, 'Namibia'),
	(125, 'Nauru'),
	(126, 'Nepal'),
	(127, 'Nicaragua'),
	(128, 'Níger'),
	(129, 'Nigeria'),
	(130, 'Noruega'),
	(131, 'Nueva Zelanda'),
	(132, 'Omán'),
	(133, 'Países Bajos'),
	(134, 'Pakistán'),
	(135, 'Palaos'),
	(136, 'Panamá'),
	(137, 'Papúa Nueva Guinea'),
	(138, 'Paraguay'),
	(139, 'Perú'),
	(140, 'Polonia'),
	(141, 'Portugal'),
	(142, 'Reino Unido'),
	(143, 'República Centroafricana'),
	(144, 'República Checa'),
	(145, 'República de Macedonia'),
	(146, 'República del Congo'),
	(147, 'República Democrática del Congo'),
	(148, 'República Dominicana'),
	(149, 'República Sudafricana'),
	(150, 'Ruanda'),
	(151, 'Rumanía'),
	(152, 'Rusia'),
	(153, 'Samoa'),
	(154, 'San Cristóbal y Nieves'),
	(155, 'San Marino'),
	(156, 'San Vicente y las Granadinas'),
	(157, 'Santa Lucía'),
	(158, 'Santo Tomé y Príncipe'),
	(159, 'Senegal'),
	(160, 'Serbia'),
	(161, 'Seychelles'),
	(162, 'Sierra Leona'),
	(163, 'Singapur'),
	(164, 'Siria'),
	(165, 'Somalia'),
	(166, 'Sri Lanka'),
	(167, 'Suazilandia'),
	(168, 'Sudán'),
	(169, 'Sudán del Sur'),
	(170, 'Suecia'),
	(171, 'Suiza'),
	(172, 'Surinam'),
	(173, 'Tailandia'),
	(174, 'Tanzania'),
	(175, 'Tayikistán'),
	(176, 'Timor Oriental'),
	(177, 'Togo'),
	(178, 'Tonga'),
	(179, 'Trinidad y Tobago'),
	(180, 'Túnez'),
	(181, 'Turkmenistán'),
	(182, 'Turquía'),
	(183, 'Tuvalu'),
	(184, 'Ucrania'),
	(185, 'Uganda'),
	(186, 'Uruguay'),
	(187, 'Uzbekistán'),
	(188, 'Vanuatu'),
	(189, 'Venezuela'),
	(190, 'Vietnam'),
	(191, 'Yemen'),
	(192, 'Yibuti'),
	(193, 'Zambia'),
	(194, 'Zimbabue');

CREATE TABLE genres(
	genre_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	genre_name VARCHAR(50) NOT NULL
);

INSERT INTO genres(genre_id, genre_name) VALUES
	(1, 'Action'),
	(2, 'Adventure'),
	(3, 'Animation'),
	(4, 'Biography'),
	(5, 'Comedy'),
	(6, 'Crime'),
	(7, 'Documentary'),
	(8, 'Drama'),
	(9, 'Family'),
	(10, 'Fantasy'),
	(11, 'Film-Noir'),
	(12, 'Game-Show'),
	(13, 'History'),
	(14, 'Horror'),
	(15, 'Music'),
	(16, 'Musical'),
	(17, 'Mystery'),
	(18, 'News'),
	(19, 'Reality-TV'),
	(20, 'Romance'),
	(21, 'Sci-Fi'),
	(22, 'Sport'),
	(23, 'Talk-Show'),
	(24, 'Thriller'),
	(25, 'War'),
	(26, 'Western');

CREATE TABLE status(
	state_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	state_name VARCHAR(20) NOT NULL
);

INSERT INTO status (state_id, state_name) VALUES
	(1, 'Coming Soon'),
	(2, 'Release'),
	(3, 'In Issue'),
	(4, 'Finished'),
	(5, 'Canceled');

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
	FULLTEXT INDEX search(title, author, actors),
	FOREIGN KEY(state)
		REFERENCES status(state_id)
		ON DELETE RESTRICT
		ON UPDATE CASCADE
);

INSERT INTO movies (imdb_id, title, plot, author, actors, premiere, poster, trailer, rating, category, state) VALUES
	('tt0903747', 'Breaking Bad', 'A chemistry teacher diagnosed with terminal lung cancer teams up with his former student to cook and sell crystal meth.', 'Vince Gilligan', 'Bryan Cranston, Anna Gunn, Aaron Paul, Dean Norris', '2008', 'http://ia.media-imdb.com/images/M/MV5BMTQ0ODYzODc0OV5BMl5BanBnXkFtZTgwMDk3OTcyMDE@._V1_SX300.jpg', 'https://www.youtube.com/watch?v=--z4YzxlT8o', 9.5, 'Serie', 4),
	('tt0468569', 'The Dark Knight', 'Batman raises the stakes in his war on crime. With the help of Lieutenant Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the city streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as The Joker.', 'Christopher Nolan', 'Christian Bale, Heath Ledger, Aaron Eckhart, Michael Caine', '2008', 'http://ia.media-imdb.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SX300.jpg', 'https://www.youtube.com/watch?v=EXeTwQWrcwY', 9.0, 'Movie', 2);

CREATE TABLE countries_x_movie(
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

INSERT INTO countries_x_movie (cxm_id, movie, country) VALUES
	(1, 'tt0903747', 60),
	(2, 'tt0468569', 60),
	(3, 'tt0468569', 142);

CREATE TABLE genres_x_movie(
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

INSERT INTO genres_x_movie (gxm_id, movie, genre) VALUES
	(1, 'tt0903747', 6),
	(2, 'tt0903747', 8),
	(3, 'tt0903747', 24),
	(4, 'tt0468569', 1),
	(5, 'tt0468569', 6),
	(6, 'tt0468569', 8);

CREATE TABLE users(
	user VARCHAR(20) PRIMARY KEY,
	email VARCHAR(80) UNIQUE NOT NULL,
	name VARCHAR(100) NOT NULL,
	birthday DATE NOT NULL,
	pass CHAR(32) NOT NULL,
	role ENUM('User', 'Admin') NOT NULL
);

INSERT INTO users (user, email, name, birthday, pass, role) VALUES
	('@jonmircha', 'jonmircha@gmail.com', 'Jonathan MirCha', '1984-05-23', MD5('los perros rifan'), 'Admin'),
	('@user', 'usuario@loquesea.com', 'Usuario Normal', '2000-12-19', MD5('usuario sin privilegios'), 'User');
