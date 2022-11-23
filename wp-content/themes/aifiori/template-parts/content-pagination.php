<?php
/**
 * Template part for displaying pagination.
 *
 * @link https://codex.wordpress.org/Function_Reference/the_posts_pagination
 *
 * @package Aaifiori
 */

the_posts_pagination( 
	array(
		'mid_size' 	=> 2,
		'prev_text' => __( '&laquo; Previous', 'aifiori' ),
		'next_text' => __( 'Next &raquo;', 'aifiori' ),
	) 
);