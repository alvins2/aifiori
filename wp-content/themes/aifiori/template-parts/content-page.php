<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aaifiori
 */
?>
<div class="main-container">
	<div class="container">
		<div class="entry-content">
			<?php
				the_content();
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aifiori' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
</div>