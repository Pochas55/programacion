		</div>
	</section>
	<footer class="Footer">
		<section class="Pagination  container">
			<?php
				the_posts_pagination(array(
					'prev_text' => __( '&laquo;' ),
					'next_text' => __( '&raquo;' ),
					'screen_reader_text' => __( ' ' )
				));
			?>
		</section>
		<?php 
			$args = array(
				'theme_location' => 'menu_social',
				'container' => 'nav',
				'container_id' => 'MenuSocial',
				'container_class' => 'MenuSocial',
				'menu_id' => 'MenuSocial-listItem',
				'menu_class' => 'MenuSocial-listItem'
			);
			wp_nav_menu( $args );
		?>
		<aside class="container">
			<?php dynamic_sidebar(2); ?>
		</aside>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>