<article class="PostCard">
	<h2><?php the_title(); ?></h2>
	<p><?php the_date(); ?> - <?php the_time('j F, Y'); ?></p>
	<?php the_category(); ?>
	<div><?php the_tags(); ?></div>
	<p><?php the_author(); ?></p>
	<div class="PostContent"><?php the_content(); ?></div>
</article>