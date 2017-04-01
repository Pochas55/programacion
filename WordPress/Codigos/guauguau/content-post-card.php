<article class="PostCard">
	<h2><?php the_title(); ?></h2>
	<?php the_post_thumbnail(); ?>
	<a href="<?php the_permalink(); ?>">ver publicación</a>
	<p><?php the_date(); ?> - <?php the_time('j F, Y'); ?></p>
	<?php the_excerpt(); ?>
</article>