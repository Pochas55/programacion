<?php 
require_once('UsersModel.php');

echo '<h1>CRUD de la Tabla Users</h1>';
$users = new UsersModel();

/* **************************************************** */

echo '<h2>Insertando users</h2>';
$new_users = array(
	'user' => '@usuario',
	'email' => 'usuario@midominio.com',
	'name' => 'Soy un Usuario',
	'birthday' => '1988-09-08',
	'pass' => 'un_password',
	'role' => 'Admin'
);
//$users->create($new_users);

/* **************************************************** */

echo '<h2>Actualizando info users</h2>';
$update_users = array(
	'user' => '@usuario',
	'email' => 'usuario@midominio.com',
	'name' => 'Usuario',
	'birthday' => '1984-07-17',
	'role' => 'User'
);
//$users->update($update_users);

/* **************************************************** */

echo '<h2>Actualizando pass users</h2>';
$update_users = array(
	'user' => '@usuario',
	'email' => 'usuario@midominio.com',
	'pass' => 'otro_password'
);
//$users->change_password($update_users);

/* **************************************************** */

echo '<h2>Eliminando users</h2>';
//$users->delete('@usuario');

/* **************************************************** */

$users_data = $users->read();
//var_dump($users_data);

$num_users = count($users_data);

echo "<h2>Número de users: <mark>$num_users</mark></h2>";

echo '<h2>Tabla de users</h2>';

echo '
	<table>
		<tr>
			<th>user</th>
			<th>email</th>
			<th>name</th>
			<th>birthday</th>
			<th>pass</th>
			<th>role</th>
		</tr>
	';
	for ($n=0; $n < count($users_data); $n++) {
		echo '
			<tr>
				<td>' . $users_data[$n]['user'] . '</td>
				<td>' . $users_data[$n]['email'] . '</td>
				<td>' . $users_data[$n]['name'] . '</td>
				<td>' . $users_data[$n]['birthday'] . '</td>
				<td>' . $users_data[$n]['pass'] . '</td>
				<td>' . $users_data[$n]['role'] . '</td>
			</tr>
		';
	}
echo '</table>';