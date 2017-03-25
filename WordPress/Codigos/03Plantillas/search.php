<?php
get_header();
echo '
	<p class="Template  border-box  xs-w100">
		search.php es la plantilla para búsquedas de WordPress
	</p>
	<p class="Template  border-box  xs-w100">
		Los resultado para la búsqueda <mark>' . get_search_query() . '</mark> son:
	</p>
';
get_template_part('content');
get_sidebar();
get_footer();