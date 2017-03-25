<?php
get_header();
echo '
	<p class="Template  border-box  xs-w100">
		tag.php es la plantilla para mostrar contenido de etiquetas de WordPress
	</p>
';
get_template_part('content');
get_sidebar();
get_footer();