<?php get_header(); ?>

  <div class="container all-holder">

		<!-- section -->

		<section class="columns">

			<!--h5 class="latest-h5"><!?php _e( 'Latest Posts', 'html5blank' ); ?></h5-->

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</div>

<!--?php get_sidebar(); ?-->

<?php get_footer(); ?>
