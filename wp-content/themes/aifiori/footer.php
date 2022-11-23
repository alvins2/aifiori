<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aaifiori
 */
 global $theme_options;
?>
	<footer class="site-footer" role="contentinfo">
		<div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer_logos">
                            <?php if($theme_options['footer-logo-title'] != ''){?>
                                <h5 class="titleh4"><?php echo $theme_options['footer-logo-title'];?></h5>
                            <?php }?>

                            <?php if($theme_options['footer-logo-one'] != ''){?>
                                <a href="<?php echo $theme_options['footer-logo-link-one']?>">
                                    <img class="img-fluid" src="<?php echo $theme_options['footer-logo-one']?>" alt="image"/>
                                </a>
                            <?php }?>

                            <?php if($theme_options['footer-logo-two'] != ''){?>
                                <a href="<?php echo $theme_options['footer-logo-link-two']?>">
                                    <img class="img-fluid" src="<?php echo $theme_options['footer-logo-two']?>" alt="image"/>
                                </a>
                            <?php }?>

                            <?php if($theme_options['footer-logo-three'] != ''){?>
                                <a href="<?php echo $theme_options['footer-logo-link-three']?>">
                                    <img class="img-fluid" src="<?php echo $theme_options['footer-logo-three']?>" alt="image"/>
                                </a>
                            <?php }?>

                        </div>
                    </div>
<!--                     <div class="col-md-6">
                        <div class="footer_menus">
                            <?php if($theme_options['footer-menu-title'] != ''){?>
                            <h5 class="titleh4"><?php echo $theme_options['footer-menu-title'];?></h5>
                            <?php }?>
                             <div class="footer-menu">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'footer',
                                        'depth' => 2,
                                        'menu_class' => 'list-unstyled',
                                        
                                    ) );
                                ?>
                            </div> 
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer_bottom ">
            <div class="container">
            	<div class="row">
                    <div class="col-md-12">
                        <?php if($theme_options['copy-right-text'] != ''){?>
                        <div class="copy-right">
                        	<p><?php echo $theme_options['copy-right-text'];?></p>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <!-- <div class="site_credits">
                <a href="https://www.altagency.co.uk/"><span><?php echo __('ALT Agency | ' , 'aifiori');  ?></span><?php echo __('Website Design Birmingham' , 'aifiori');  ?></a>
            </div> -->
        </div>
    </footer>
<?php wp_footer(); ?>

</body>
</html>