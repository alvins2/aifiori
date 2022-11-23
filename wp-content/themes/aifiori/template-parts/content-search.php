<?php
/**
 * Template part for displaying search result page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aaifiori
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	if ( !is_single() && has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) { ?>
		<div class="entry-img">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('aifiori-common'); ?></a>
       </div>
       <?php
    } 
	?>
	<div class="detail-wrap">
		<div class="entry-header">
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				
		?>
		</div><!-- .entry-header -->

		<div class="entry-content entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
	</div>

</article><!-- #post-## -->