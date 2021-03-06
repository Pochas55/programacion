<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
	<h1>Hola WordPress</h1>
	<h2>Función <code>bloginfo()</code></h2>
	<p>Nombre: <mark><?php bloginfo('name'); ?></mark></p>
	<p>Descripción: <mark><?php bloginfo('description'); ?></mark></p>
	<p>URL HOME: <mark><?php bloginfo('home'); ?></mark></p>
	<p>URL hoja de estilos: <mark><?php bloginfo('stylesheet_url'); ?></mark></p>
	<p>URL del Tema: <mark><?php bloginfo('template_url'); ?></mark></p>
	<p>Idioma: <mark><?php bloginfo('language'); ?></mark></p>
	<p>Juego de caracteres: <mark><?php bloginfo('charset'); ?></mark></p>
	<img src="<?php bloginfo('template_url'); ?>/screenshot.png">
</body>
</html>