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
	?>
				<article class="PostCard">
					<h2><?php the_title(); ?></h2>
					<a href="<?php the_permalink(); ?>">ver publicación</a>
					<p><?php the_date(); ?> - <?php the_time('j F, Y'); ?></p>
					<?php the_excerpt(); ?>
					<?php the_category(); ?>
					<div><?php the_tags(); ?></div>
					<p><?php the_author(); ?></p>
					<div class="PostContent"><?php the_content(); ?></div>
				</article>
	<?php
			endwhile;
		else:
			//no posts
			echo '<p class="u-error">No hay entradas</p>';
		endif;
		rewind_posts();
		wp_reset_query();
	?>
</main>