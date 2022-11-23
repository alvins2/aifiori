<?php /* Template Name: CMS Template*/
	global $theme_options;
	get_header();
 ?>
<div class="main-container">
	<?php
	    $loop_count = 0;
	    if (has_post_thumbnail()) {
	        $loop_count =1;
	    }
	?>
	<div <?php echo $loop_count == 1 ? 'class="page_banner"' : 'class="page_banner no_banner-image"'; ?>>
		<div class="banner-top">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="banner_text">
			<div class="container">
				<div class="bg_black">
					<h1 class="page_title">
								<span><?php the_title(); ?></span>
					</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="detail-wrap">
				<div class="entry-content">
					<?php
						the_content();
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aifiori' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</div>
		</article><!-- #post-## -->
	</div>
</div>