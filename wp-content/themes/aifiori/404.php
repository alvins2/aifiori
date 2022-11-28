<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Aaifiori
 */

get_header(); ?>
<style>
	.error-404.not-found.container {
		padding-top: 35px;
		padding-bottom: 35px;
		font-family: 'futura-pt-light';
	}
	.btn404 {
		padding: 8px 18px;
		background: #000;
		color: #fff;
	}
	.btn404:hover{
		color:#fff;
		opacity: 0.7;
	}
</style>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="error-404 not-found container">
			<header class="page-header">
				<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'aifiori' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content text-center">
				<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'aifiori' ); ?></p>
				<a class="btn404" href="<?php echo get_site_url(); ?>"><?php esc_html_e( 'Back to home', 'aifiori' ); ?></a>
				<?php //get_search_form(); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
