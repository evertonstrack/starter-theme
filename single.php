<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Starter_Theme
 * @since Starter Theme 0.1
 */

get_header(); ?>

<section id="primary" class="content-area">
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the single post content template.
		get_template_part( 'template-parts/content', 'single' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

		if ( is_singular( 'attachment' ) ) {
			// Parent post navigation.
			the_post_navigation( array(
				'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'startertheme' ),
			) );
		} elseif ( is_singular( 'post' ) ) {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'startertheme' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'startertheme' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'startertheme' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'startertheme' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
		}

		// End of the loop.
	endwhile;
	?>

	<?php get_sidebar( 'content-bottom' ); ?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
