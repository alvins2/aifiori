<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Aaifiori
 */

get_header(); 
	/**
	 * Hook - aifiori_before_primary.
	 *
	 * @hooked aifiori_before_primary_action - 10
	 */
	do_action( 'aifiori_before_primary' );
?>

	<?php
	if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title">
			<?php 
			/* translators: used search keyword */
			printf( esc_html__( 'Search Results for: %s', 'aifiori' ), '<span>' . get_search_query() . '</span>' ); 
			?>
			</h1>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'search' );

		endwhile;

		get_template_part( 'template-parts/content', 'pagination' );

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

<?php get_footer();