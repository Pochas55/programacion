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
				'container_class' => 'Menu  container',
				'menu_id' => 'MenuSocial-listItem',
				'menu_class' => 'Menu-listItem'
			);
			wp_nav_menu( $args );
		?>
	</footer>
	<script src="<?php bloginfo('template_url'); ?>/js/navigation.js"></script>
	<?php wp_footer(); ?>
</body>
</html>