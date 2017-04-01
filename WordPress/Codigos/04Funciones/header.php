<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
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
				<?php 
					$args = array(
						'theme_location' => 'menu_main',
						'container' => 'nav',
						'container_id' => 'MenuMain',
						'container_class' => 'MenuMain',
						'menu_id' => 'MenuMain-listItem',
						'menu_class' => 'Menu-listItem'
					);
					wp_nav_menu( $args );
				?>
			</article>
		</section>
	</header>
	<section class="Main">
		<div class="Main-container  lg-flex  lg-flex-wrap">