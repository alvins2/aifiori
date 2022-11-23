<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Aaifiori
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found container">
			<header class="page-header">
				<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'aifiori' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content text-center">
				<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'aifiori' ); ?></p>
				<a href="<?php echo get_site_url(); ?>"><?php esc_html_e( 'Back to home', 'aifiori' ); ?></a>
				<?php //get_search_form(); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
