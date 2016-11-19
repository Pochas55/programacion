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
	<header class="HeaderApp">
		<h1 class="LogoApp">Mexflix</h1>
		<nav class="MenuApp">
			<ul class="MenuApp-listItem">
				<li class="MenuApp-item">
					<a href="./" class="MenuApp-link">Inicio</a>
				</li>
				<li class="MenuApp-item">
					<a href="movies" class="MenuApp-link">Películas</a>
				</li>
				<li class="MenuApp-item">
					<a href="status" class="MenuApp-link">Status</a>
				</li>
				<li class="MenuApp-item">
					<a href="genres" class="MenuApp-link">Géneros</a>
				</li>
				<li class="MenuApp-item">
					<a href="countries" class="MenuApp-link">Países</a>
				</li>
				<li class="MenuApp-item">
					<a href="users" class="MenuApp-link">Usuarios</a>
				</li>
				<li class="MenuApp-item">
					<a href="logout" class="MenuApp-link">Salir</a>
				</li>
			</ul>
		</nav>
	</header>
	<main class="MainApp">
');