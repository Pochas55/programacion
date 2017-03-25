<?php
get_header();

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

get_template_part('content');
get_sidebar();
get_footer();