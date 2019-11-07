<?php get_header(); ?>
<div class="row">

	<div class="large-9 columns" role="main">

		<div>



			<?php 
			/**
			 *	Change category number to news category ID
			 *  to ignore posts in news category
			 */
			if ( is_home() ) {
				query_posts($query_string . '&cat=-3');
			}
			?>



			<?php if ( have_posts() ) : ?>

				<?php do_action('foundationPress_before_content'); ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>

				<?php do_action('foundationPress_before_pagination'); ?>

			<?php endif;?>
	
		<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
			</nav>
		<?php } ?>

		<?php do_action('foundationPress_after_content'); ?>
		</div>
	</div>

	<div class="large-3 columns">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
