<?php
print('
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title>Mexflix</title>
		<meta name="description" content="Bienvenid@s a Mexflix tus películas y series favoritas">
		<link rel="shortcut icon" type="image/png" href="./public/img/favicon.png">
		<link rel="stylesheet" href="./public/css/mexflix.css">
	</head>
	<body>
		<!-- https://suitcss.github.io/ -->
		<header class="App-header">
			<h1 class="App-logo">Mexflix</h1>
');

if ( $_SESSION['ok'] ) {
	print('
			<nav class="App-menu">
				<ul class="App-menuListItem">
					<li class="App-menuItem">
						<a href="./" class="App-menuLink">Inicio</a>
					</li>
					<li class="App-menuItem">
						<a href="movies" class="App-menuLink">Películas</a>
					</li>
					<li class="App-menuItem">
						<a href="status" class="App-menuLink">Status</a>
					</li>
					<li class="App-menuItem">
						<a href="genres" class="App-menuLink">Géneros</a>
					</li>
					<li class="App-menuItem">
						<a href="countries" class="App-menuLink">Países</a>
					</li>
					<li class="App-menuItem">
						<a href="users" class="App-menuLink">Usuarios</a>
					</li>
					<li class="App-menuItem">
						<a href="logout" class="App-menuLink">Salir</a>
					</li>
				</ul>
			</nav>
	');

	printf('
			<aside class="App-userInfo">
				Bienvenid@ <b>%s</b> tu nivel es <b>%s</b>
			</aside>
		',
		$_SESSION['name'],
		$_SESSION['role']
	);
}

print('
		</header>
		<main class="App-mainContent">
');