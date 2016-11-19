<?php 
print('
	<form class="FormApp" method="POST">
		<input type="text" name="user" placeholder="usuario" required>
		<input type="password" name="pass" placeholder="password" required>
		<input type="submit" class="u-button" value="Enviar">
	</form>
');

if ( isset( $_GET['error'] ) ) {
	print('<p class="u-error">' . $_GET['error'] .'</p>');
}