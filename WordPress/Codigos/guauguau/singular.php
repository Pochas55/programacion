<?php
get_header();
echo '
	<p class="Template  border-box  xs-w100">
		singular.php es la plantilla para mostrar contenido de páginas y entradas de WordPress
	</p>
';
get_template_part('content');
get_sidebar();
get_footer();