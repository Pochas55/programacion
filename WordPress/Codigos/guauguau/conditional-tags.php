<?php
if ( is_home() || is_front_page() ) {
	echo '
		<p class="Template  border-box  xs-w100">
			home.php es la plantilla de la página frontal de WordPress
		</p>
	';
}

if ( is_category() ) {
	echo '
		<p class="Template  border-box  xs-w100">
			category.php es la plantilla para mostrar contenido de categorías de WordPress
		</p>
	';
}

if ( is_tag() ) {
	echo '
		<p class="Template  border-box  xs-w100">
			tag.php es la plantilla para mostrar contenido de etiquetas de WordPress
		</p>
	';
}

if ( is_author() ) {
	echo '
		<p class="Template  border-box  xs-w100">
			author.php es la plantilla para mostrar contenido del autor de la publicación en WordPress
		</p>
	';

	$author_info = '
		<ul class="Author-info  border-box  xs-w100">
			<li>Autor: <b>%s</b></li>
			<li>ID Autor: <b>%s</b></li>
			<li>Correo: <b>%s</b></li>
			<li>Login: <b>%s</b></li>
			<li>Password: <b>%s</b></li>
			<li>Nicename: <b>%s</b></li>
			<li>URL Autor: <b>%s</b></li>
			<li>URL Página Autor: <b>%s</b></li>
			<li>Fecha y Hora de Registro: <b>%s</b></li>
			<li>Rol: <b>%s</b></li>
			<li>Nombre para mostrar: <b>%s</b></li>
			<li>Alias: <b>%s</b></li>
			<li>Nombre: <b>%s</b></li>
			<li>Apellido: <b>%s</b></li>
			<li>Descripción: <b>%s</b></li>
			<li>Número de Publicaciones: <b>%s</b></li>
			<li>Avatar: %s</li>
		</ul>
	';

	printf(
		$author_info,
		get_the_author(),
		get_the_author_id(),
		get_the_author_meta('user_email'),
		get_the_author_meta('user_login'),
		get_the_author_meta('user_pass'),
		get_the_author_meta('user_nicename'),
		get_the_author_meta('user_url'),
		get_author_posts_url( get_the_author_id() ),
		get_the_author_meta('user_registered'),
		get_the_author_meta('roles')[0],
		get_the_author_meta('display_name'),
		get_the_author_meta('nickname'),
		get_the_author_meta('first_name'),
		get_the_author_meta('last_name'),
		get_the_author_meta('description'),
		get_the_author_posts(),
		get_avatar( get_the_author_id(), 50 )
	);
}

if ( is_search() ) {
	echo '
		<p class="Template  border-box  xs-w100">
			search.php es la plantilla para búsquedas de WordPress
		</p>
		<p class="Template  border-box  xs-w100">
			Los resultado para la búsqueda <mark>' . get_search_query() . '</mark> son:
		</p>
	';
}

if ( is_404() ) {
	echo '
		<p class="Template  border-box  xs-w100">
			404.php es la plantilla del error 404 NOT FOUND en WordPress
		</p>
	';
}
