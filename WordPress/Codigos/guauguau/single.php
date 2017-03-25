<?php
get_header();
echo '
	<p class="Template  border-box  xs-w100">
		single.php es la plantilla para mostrar contenido de entradas de WordPress
	</p>
';
get_template_part('content');
get_sidebar();
comments_template();
get_footer();