<?php
$mysqli = new mysqli('localhost', 'root', '', 'mexflix32');

if ( $mysqli->connect_errno ) {
	echo '<p>Error al conectarse a MySQL</p>';
	echo '<p>N° Error: <mark>' . $mysqli->connect_errno . '</mark></p>';
	echo '<p>Mensaje de Error: <mark>' . $mysqli->connect_error . '</mark></p>';
	die();
}

$sql = 'SELECT * FROM status';

if ( !$resultado = $mysqli->query( $sql ) ) {
	echo '<p>Error: La ejecución de la consulta falló debido a:</p>';
	echo '<p>Query: <mark>' . $sql . '</mark></p>';
	echo '<p>N° Error: <mark>' . $mysqli->errno . '</mark></p>';
	echo '<p>Mensaje de Error: <mark>' . $mysqli->error . '</mark></p>';
	die();
}

if ( $resultado->num_rows == 0 ) {
	echo '<p>La consulta no devolvió registros</p>';
} else {
	echo '<ul>';
		//while ( $status = $resultado->fetch_row() ) {
		while ( $status = $resultado->fetch_assoc() ) {
			//echo '<li>' . $status[0] . ' - ' . $status[1] . '</li>';
			echo '<li>' . $status['state_id'] . ' - ' . $status['state_name'] . '</li>';
		}
	echo '</ul>';
}

$resultado->free();
$mysqli->close();