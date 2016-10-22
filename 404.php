<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Starter_Theme
 * @since Starter Theme 0.1
 */

get_header(); ?>

	<section id="primary" class="section">
		<article class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'startertheme' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'startertheme' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</article><!-- .error-404 -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</section><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
