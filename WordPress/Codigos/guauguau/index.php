<?php
get_header();
echo '
	<p class="Template  border-box  xs-w100">
		index.php es la plantilla principal de WordPress
	</p>
';
get_template_part('content');
get_sidebar();
get_footer();