<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.7.0/hamburgers.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/my_framework.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/navigation.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<header class="Header">
		<section class="Header-container">
			<h1 class="Logo">
				<a href="<?php bloginfo('home'); ?>" class="Logo-link">Logo</a>
			</h1>
			<span class="Panel-button">
				<button class="hamburger  hamburger--emphatic" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</span>
			<article class="Panel">
				<nav class="Menu">
					<ul class="Menu-listItem">
						<li class="Menu-item">
							<a href="#" class="Menu-link">Sección 1</a>
						</li>
						<li class="Menu-item">
							<a href="#" class="Menu-link">Sección 2</a>
						</li>
						<li class="Menu-item">
							<a href="#" class="Menu-link">Sección 3</a>
						</li>
						<li class="Menu-item">
							<a href="#" class="Menu-link">Sección 4</a>
						</li>
						<li class="Menu-item">
							<a href="#" class="Menu-link">Sección 5</a>
						</li>
						<li class="Menu-item">
							<a href="#" class="Menu-link">Sección 6</a>
						</li>
						<li class="Menu-item">
							<a href="#" class="Menu-link">Sección 7</a>
						</li>
					</ul>
				</nav>
			</article>
		</section>
	</header>
	<section class="Main">
		<div class="Main-container  lg-flex">