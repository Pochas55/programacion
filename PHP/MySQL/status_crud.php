<?php 
require_once('StatusModel.php');

echo '<h1>CRUD de la Tabla Status</h1>';

$status = new StatusModel();


echo '<h2>Insertando Status</h2>';
$new_status = array(
	'state_id' => 0,
	'state_name' => 'Otro Status por PHP'
);

//$status->create($new_status);

echo '<h2>Actualizando Status</h2>';
$update_status = array(
	'state_id' => 6,
	'state_name' => 'Other Status by PHP'
);

//$status->update($update_status);

echo '<h2>Eliminando Status</h2>';
//$status->delete(6);


$status_data = $status->read();
var_dump($status_data);

$num_status = count($status_data);

echo "<h2>Número de Status: <mark>$num_status</mark></h2>";

echo '<h2>Tabla de Status</h2>';

echo '<table>
	<tr>
		<th>state_id</th>
		<th>state_name</th>
	</tr>';
	for ($n = 0; $n < count($status_data); $n++) {
		echo '<tr>
			<td>' . $status_data[$n]['state_id'] . '</td>
			<td>' . $status_data[$n]['state_name'] . '</td>
		</tr>';
	}
echo '</table>';