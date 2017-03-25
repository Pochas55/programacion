<?php
get_header();
echo '
	<p class="Template  border-box  xs-w100">
		home.php es la plantilla de la página frontal de WordPress
	</p>
';
get_template_part('content');
get_sidebar();
get_footer();