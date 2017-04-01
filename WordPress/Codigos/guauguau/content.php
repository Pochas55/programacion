<main class="Dogs  border-box  lg-w80  lg-flex-auto">
	<?php
		//Lógica de the_loop
			//Si (hay entradas)
				//mientras (hay entradas)
					//muestra la info de las entradas
			//Si no
				//no hay entradas publicadas
		
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				//post info
				//echo '<p>Info de la entrada</p>';
				if ( !is_single() && !is_page() ) {
					get_template_part( 'content-post-card' );
				} else {
					get_template_part( 'content-post' );
				}
			endwhile;
		else:
			//no posts
			echo '<p class="u-error">No hay entradas</p>';
		endif;
		rewind_posts();
		wp_reset_query();
	?>
</main>