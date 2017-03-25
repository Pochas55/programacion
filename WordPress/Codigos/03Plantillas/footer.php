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
	</footer>
	<script src="<?php bloginfo('template_url'); ?>/js/navigation.js"></script>
	<?php wp_footer(); ?>
</body>
</html>