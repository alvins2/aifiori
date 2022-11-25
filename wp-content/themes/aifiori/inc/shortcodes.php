<?php
/*
Shortcode : [press] press Page
*/
	add_shortcode('press', 'fn_press');
	function fn_press($attr){
	ob_start();
	?>
			<?php
				 $args = array(
				    'posts_per_page'   => -1,
				    'post_type'     => 'post',
				    'post_status' => 'publish',
					'orderby'   => array(
						'date' =>'DESC',
						'menu_order'=>'ASC',
						/*Other params*/
					   )
				);
				$wp_query = new WP_Query(); $wp_query->query($args);
				if($wp_query->have_posts()):?>
					<div class="press-section">
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<div class="press-row">
								<a class="post-link" href="<?php the_permalink(); ?>">
								<div class="row">
									<div class="col-md-5">
										<div class="press-img">
											<?php if(has_post_thumbnail()){
												the_post_thumbnail("post_thumb");
											} ?>
										</div>
									</div>
									<div class="col-md-7">
										<div class="press-text">
											<h4><?php the_title(); ?></h4>
											<div class="press-date">
												<?php echo the_date('F j, Y'); ?>
											</div>
										</div>
									</div>
								</div>
								</a>
							</div>
						<?php endwhile;?>
					</div>
				<?php endif;
	wp_reset_postdata();
	$press = ob_get_contents();
	ob_end_clean();
	return $press;
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
					<div class="container main_title">
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
									<div class="col-md-7 slide-main_menu-left">
										<div class="slide-menu-left">
											<h4><?php the_title(); echo __(' Menus');?></h4>
										</div>
										<div class="slide-menu-left-content">
											<p><?php the_content(); echo __(' Menus');?></p>
										</div>
									</div>
									<div class="col-md-5 slide-main_menu-right">
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
			<?php endif;
wp_reset_postdata();
$ai_menus = ob_get_contents();
ob_end_clean();
return $ai_menus;
}
/*
Shortcode : [private_rooms] Private Rooms Page
*/
add_shortcode('private_rooms', 'fn_private_rooms');
function fn_private_rooms($attr){
ob_start();
			$args = array(
				'posts_per_page'   => -1,
				'post_type'     => 'private-room',
				'post_status' => 'publish',
			);
			$wp_query = new WP_Query(); $wp_query->query($args);
			if($wp_query->have_posts()):?>
				<div class="private-rooms-section">
					<div class="private-rooms-row row">
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="col-md-6">
							<div class="privateRoomsBox">
								<h4><?php the_title(); ?></h4>
								<div class="privateRoomsImg">
									<?php
									if (has_post_thumbnail()) {
										the_post_thumbnail('full', array('class' => 'img-fluid'));
									}
									?>
								</div>
								<div class="privateRoomsText">
									<?php the_excerpt(); ?>
								</div>
							</div>
						</div>
					<?php endwhile;?>
					</div>
				</div>
			<?php endif;
wp_reset_postdata();
$ai_private_rooms = ob_get_contents();
ob_end_clean();
return $ai_private_rooms;
}
?>