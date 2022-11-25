<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aaifiori
 */
?>
<div class="press-top-section">
	<div class="container">
		<div class="press-top-img">
			<?php
				if( is_single() && has_post_thumbnail() ) {
					the_post_thumbnail();
				}
			?>
		</div>
		<h1 class="page_title">
			<?php the_title(); ?>
		</h1>
	</div>
</div>
<div class="single_blog">
	<div class="container">
		<div class="detail-wrap">
			<div class="entry-content">
				<?php
					if( is_single() ){
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aifiori' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );
					} else{
						the_excerpt();
					}
				?>
			</div><!-- .entry-content -->
		</div>
	</div>
</div>