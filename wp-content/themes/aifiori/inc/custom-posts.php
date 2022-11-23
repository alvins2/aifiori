<?php
/*
* Add New Post (menus)
*/
	add_action( 'init', 'fn_all_menus_init' );
	function fn_all_menus_init() {
			$labels = array(
				'name'               => _x( 'Menus', 'post type general name', 'aifiori' ),
				'singular_name'      => _x( 'Menu', 'post type singular name', 'aifiori' ),
				'menu_name'          => _x( 'Menus', 'admin menu', 'aifiori' ),
				'name_admin_bar'     => _x( 'Menu', 'add new on admin bar', 'aifiori' ),
				'add_new'            => _x( 'Add New', 'Menu', 'aifiori' ),
				'add_new_item'       => __( 'Add New Menu', 'aifiori' ),
				'new_item'           => __( 'New Menu', 'aifiori' ),
				'edit_item'          => __( 'Edit Menu', 'aifiori' ),
				'view_item'          => __( 'View Menu', 'aifiori' ),
				'all_items'          => __( 'All Menu', 'aifiori' ),
				'search_items'       => __( 'Search Menu', 'aifiori' ),
				'parent_item_colon'  => __( 'Parent Menu:', 'aifiori' ),
				'not_found'          => __( 'No Menu found.', 'aifiori' ),
				'not_found_in_trash' => __( 'No Menu found in Trash.', 'aifiori' )
			);
			$args = array(
				'labels'             => $labels,
		        'description'        => __( 'Description.', 'aifiori' ),
				'public'             => false,
				'publicly_queryable' => false,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'capability_type'    => 'post',
				'has_archive'        => false,
				'hierarchical'       => true,
				'menu_position'      => null,
				'menu_icon'           => 'dashicons-welcome-write-blog',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);
			register_post_type( 'menus', $args );
		}
?>