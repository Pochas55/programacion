<?php 
require_once('CountriesModel.php');

echo '<h1>CRUD de la Tabla Countries</h1>';
$countries = new CountriesModel();

/* **************************************************** */

echo '<h2>Insertando countries</h2>';
$new_countries = array(
	'country_id' => 0,
	'country_name' => 'Moldavia'
);
//$countries->create($new_countries);

/* **************************************************** */

echo '<h2>Actualizando countries</h2>';
$update_countries = array(
	'country_id' => 195,
	'country_name' => 'República de Moldovia'
);
//$countries->update($update_countries);

/* **************************************************** */

echo '<h2>Eliminando countries</h2>';
//$countries->delete(195);

/* **************************************************** */

$countries_data = $countries->read();
//var_dump($countries_data);

$num_countries = count($countries_data);

echo "<h2>Número de countries: <mark>$num_countries</mark></h2>";

echo '<h2>Tabla de countries</h2>';

echo '
	<table>
		<tr>
			<th>country_id</th>
			<th>country_name</th>
		</tr>
	';
	for ($n=0; $n < count($countries_data); $n++) {
		echo '
			<tr>
				<td>' . $countries_data[$n]['country_id'] . '</td>
				<td>' . $countries_data[$n]['country_name'] . '</td>
			</tr>
		';
	}
echo '</table>';