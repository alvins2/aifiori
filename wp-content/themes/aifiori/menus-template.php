<?php /* Template Name: Menus Template*/
	global $theme_options;
	get_header();
 ?>
<div class="main-container">
	<div class="container">
        <div class="titleHeader">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
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
</div>
<?php get_footer(); ?>