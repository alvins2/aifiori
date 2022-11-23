<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aaifiori
 */

?>
<?php 
	    $loop_count = 0;
	    if (has_post_thumbnail()) {
	        $loop_count =1;
	    }
	?>
	<div <?php echo $loop_count == 1 ? 'class="page_banner"' : 'class="page_banner no_banner-image"'; ?>>
		<div class="banner-top">
			<?php 

				

				if($top_banner){

					echo '<img src="'.$top_banner['url'].'" alt="Image">';
				}elseif( is_single() && has_post_thumbnail() ) { 
							the_post_thumbnail();
			    	}
				

			 ?>
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
<div class="single_blog">
	<div class="single_blog_container">
		<div class="container">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="detail-wrap">
						<?php
							if ( is_single() ) :
								the_title( '<h2 class="single-title">', '</h2>' );
							else :
								the_title( '<h3 class="single-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
							endif;
						 ?>


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

			</article><!-- #post-## -->
		</div>
	</div>
		<div class="comment_section">
			<div class="container">
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			</div>
		</div>
		<div class="related_post-container">
			<div class="container">
				<div class="related_post">
					<h4 class="titleh4 text-center"><?php echo __('You may also like','aifiori'); ?></h4>
					<div class="row">
						<?php
						
						// Start Related Posts

						$custom_query_args = array( 
							'post_type' => 'post',
							'posts_per_page' => 3, 
							'post__not_in' => array($post->ID),
							// 'orderby' => 'rand',
						);
						
						$custom_query = new WP_Query( $custom_query_args );

						if ( $custom_query->have_posts() ) : ?>

							<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
								<div class="col-md-4">
										<div class="blog_box">
											<a class="post-img" href="<?php the_permalink(); ?>">
												<?php  
													if(has_post_thumbnail()){
														the_post_thumbnail("post_thumb");
													}else{
														echo '<img src="'.get_template_directory_uri().'/assets/images/no-image.jpg" alt="No Image Found">';
													}
												?>
											</a>
											<div class="post-title">
												<a href="<?php the_permalink(); ?>">
													<h4><?php the_title(); ?></h4>
												</a>
											</div>
											<div class="post-text">
												<p><?php the_excerpt(); ?></p>
											</div>
											<div class="vc_btn3-container  see_more_btn vc_btn3-left">
												<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-modern vc_btn3-color-grey" href="<?php the_permalink(); ?>" title="See More"><?php echo _e( 'See More', 'aifiori' )?></a>
											</div>
										</div>
									</div>

							<?php endwhile; ?>

						<?php else : ?>

								<p>Sorry, no related articles to display.</p>
						
						<?php endif;
						// Reset postdata
						wp_reset_postdata();
						?>
					</div>
				</div><!--End Related Posts-->
			</div>
		</div>
	<div class="receive_offers">
		<?php dynamic_sidebar( 'receive-our-offers' ); ?>
	</div>
</div>