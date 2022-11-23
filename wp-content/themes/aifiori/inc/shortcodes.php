<?php
/*
Shortcode : [blogs] blogs Page
*/
	add_shortcode('blogs', 'fn_blogs');
	function fn_blogs($attr){
	ob_start();
	?>
			<?php
				$temp = $wp_query; $wp_query= null;
				 $args = array(
				    'posts_per_page'   => 4,
				    'post_type'     => 'post',
				    'post_status' => 'publish',
				);
				$wp_query = new WP_Query(); $wp_query->query($args);
				if (isset($attr['posts_per_page']) && $attr['posts_per_page'] != '') {
					$args['posts_per_page'] = 6;
				}
				if(isset($attr['page']) && $attr['page'] != ''){
					$args['paged'] = $attr['page'];
					$page = $attr['page'];
				}
				if($wp_query->have_posts()):?>
					<div class="row">
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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
						<?php endwhile;?>
					</div>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>
	<?php
	wp_reset_postdata();
	$blogs = ob_get_contents();
	ob_end_clean();
	return $blogs;
	}

/*
Shortcode : [menus] Menus Page
*/
add_shortcode('menus', 'fn_menus');
function fn_menus($attr){
ob_start();
?>
		<?php
			$args = array(
				'posts_per_page'   => -1,
				'post_type'     => 'menus',
				'post_status' => 'publish',
			);
			$wp_query = new WP_Query(); $wp_query->query($args);
			if($wp_query->have_posts()):?>
				<div class="menus-slider-section">
					<div class="container">
						<div class="slider-for">
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<div class="slider-menu-title">
									<h4><?php the_title(); ?></h4>
								</div>
							<?php endwhile;?>
						</div>
					</div>
					<div class="slider-nav">
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<div class="slider-menus-content">
								<div class="row">
									<div class="col-md-8">
										<div class="slide-menu-left">
											<h4><?php the_title(); echo __(' Menus');?></h4>
										</div>
									</div>
									<div class="col-md-4">
										<div class="slide-menu-right">
										<?php
											if (has_post_thumbnail()) {
												the_post_thumbnail('full', array('class' => 'img-fluid'));
											}else{
												echo '<img class="img-fluid" src="'.get_template_directory_uri().'/assets/images/no-page-banner.jpg" alt="Image">';
											}
											?>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile;?>
					</div>
				</div>
			<?php endif; ?>
		<?php wp_reset_postdata(); ?>
<?php
wp_reset_postdata();
$ai_menus = ob_get_contents();
ob_end_clean();
return $ai_menus;
}
?>