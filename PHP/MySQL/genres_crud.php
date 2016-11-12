<?php 
require_once('GenresModel.php');

echo '<h1>CRUD de la Tabla Genres</h1>';
$genres = new GenresModel();

/* **************************************************** */

echo '<h2>Insertando genres</h2>';
$new_genres = array(
	'genre_id' => 0,
	'genre_name' => 'Politica'
);
//$genres->create($new_genres);

/* **************************************************** */

echo '<h2>Actualizando genres</h2>';
$update_genres = array(
	'genre_id' => 27,
	'genre_name' => 'Politic'
);
//$genres->update($update_genres);

/* **************************************************** */

echo '<h2>Eliminando genres</h2>';
//$genres->delete(27);

/* **************************************************** */

$genres_data = $genres->read();
//var_dump($genres_data);

$num_genres = count($genres_data);

echo "<h2>Número de genres: <mark>$num_genres</mark></h2>";

echo '<h2>Tabla de genres</h2>';

echo '
	<table>
		<tr>
			<th>genre_id</th>
			<th>genre_name</th>
		</tr>
	';
	for ($n=0; $n < count($genres_data); $n++) {
		echo '
			<tr>
				<td>' . $genres_data[$n]['genre_id'] . '</td>
				<td>' . $genres_data[$n]['genre_name'] . '</td>
			</tr>
		';
	}
echo '</table>';