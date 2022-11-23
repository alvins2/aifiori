<?php 
	add_action( 'widgets_init', 'fn_register_widgets' );

		function fn_register_widgets() {

		    register_sidebar(array(
		        'name' => 'Receive our offers',
		        'id' => 'receive-our-offers',
		        'before_widget' => '<div class="widget">',
		        'after_widget' => '</div>',
		        'before_title' => '<h3 class="widget-title">',
		        'after_title' => '</h3>',
		    ));
		    register_sidebar(array(
		        'name' => 'Reviews',
		        'id' => 'reviews',
		        'before_widget' => '<div class="widget">',
		        'after_widget' => '</div>',
		        'before_title' => '<h3 class="widget-title">',
		        'after_title' => '</h3>',
		    ));

		}
?>