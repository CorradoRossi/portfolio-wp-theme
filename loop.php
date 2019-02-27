<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="col-4 col-mx-auto col-lg-6 col-sm-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="card m-2 text-center">
				<div class="card-image m-2">
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<img class="img-responsive" <?php the_post_thumbnail(); ?></a>
					<?php endif; ?>
				</div>
				<div class="card-header">
					<div class="card-title h3">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="card-subtitle text-gray">
						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
						<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
					</div>
				</div>
				<div class="card-body">
					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				</div>
				<div class="card-footer">
					<?php edit_post_link(); ?>
				</div>
			</div>
		</div>

	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
