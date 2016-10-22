<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Starter_Theme
 * @since Starter Theme 0.1
 */

get_header(); ?>

<section id="primary" class="section">
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

		// End of the loop.
	endwhile;
	?>

	<?php get_sidebar( 'content-bottom' ); ?>

</section><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
