<?php 
require_once('MoviesModel.php');

echo '<h1>CRUD de la Tabla Movies</h1>';
$movies = new MoviesModel();

/* **************************************************** */

echo '<h2>Insertando movies</h2>';
$new_movies = array(
	array(
		'imdb_id' => 'tt0479143',
		'title' => 'Rocky',
		'plot' => '',
		'author' => 'SylvesterStallone',
		'actors' => '',
		'premiere' => '2006',
		'poster' => '',
		'trailer' => '',
		'rating' => 7.2,
		'category' => 'Movie',
		'state' => 2
	),
	array(8, 22), //géneros
	array(60) //paises
);
var_dump($new_movies);
echo '<br><br>';
var_dump($new_movies[0]);
echo '<br><br>';
var_dump($new_movies[1]);
echo '<br><br>';
var_dump($new_movies[1][1]);
echo '<br><br>';
$movies->create($new_movies);

/* **************************************************** */

echo '<h2>Actualizando movies</h2>';
$update_movies = array(
	'state_id' => 6,
	'state_name' => 'Other movies by PHP'
);
//$movies->update($update_movies);

/* **************************************************** */

echo '<h2>Eliminando movies</h2>';
//$movies->delete(6);

/* **************************************************** */

$movies_data = $movies->read();
//var_dump($movies_data);

$num_movies = count($movies_data);

echo "<h2>Número de movies: <mark>$num_movies</mark></h2>";

echo '<h2>Tabla de movies</h2>';

echo '
	<table>
		<tr>
			<th>imdb_id</th>
			<th>title</th>
			<th>plot</th>
			<th>author</th>
			<th>actors</th>
			<th>premiere</th>
			<th>poster</th>
			<th>trailer</th>
			<th>rating</th>
			<th>category</th>
			<th>state_name</th>
			<th>genres</th>
			<th>countries</th>
		</tr>
	';
	for ($n=0; $n < count($movies_data); $n++) {
		echo '
			<tr>
				<td>' . $movies_data[$n]['imdb_id'] . '</td>
				<td>' . $movies_data[$n]['title'] . '</td>
				<td>' . $movies_data[$n]['plot'] . '</td>
				<td>' . $movies_data[$n]['author'] . '</td>
				<td>' . $movies_data[$n]['actors'] . '</td>
				<td>' . $movies_data[$n]['premiere'] . '</td>
				<td><img src="' . $movies_data[$n]['poster'] . '"></td>
				<td><a href="' . $movies_data[$n]['trailer'] . '" target="_blank">ver trailer</a></td>
				<td>' . $movies_data[$n]['rating'] . '</td>
				<td>' . $movies_data[$n]['category'] . '</td>
				<td>' . $movies_data[$n]['state_name'] . '</td>
				<td>' . $movies_data[$n]['genres'] . '</td>
				<td>' . $movies_data[$n]['countries'] . '</td>
			</tr>
		';
	}
echo '</table>';