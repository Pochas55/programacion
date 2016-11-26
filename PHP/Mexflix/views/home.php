<?php 
$html = '
	<article class="App-home">
		<h2>Bienvenid@ a Mexflix</h2>
		<h3>Tus Películas y Series Favoritas</h3>
		<h4>Ésta es tu información</h4>
		<p>Usuario: <b>%s</b></p>
		<p>Password encriptado: <b>%s</b></p>
		<p>Nombre: <b>%s</b></p>
		<p>Email: <b>%s</b></p>
		<p>Cumpleaños: <b>%s</b></p>
		<p>Nivel: <b>%s</b></p>
	</article>
';

printf(
	$html,
	$_SESSION['user'],
	$_SESSION['pass'],
	$_SESSION['name'],
	$_SESSION['email'],
	$_SESSION['birthday'],
	$_SESSION['role']
);