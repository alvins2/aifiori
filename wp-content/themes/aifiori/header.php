<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aaifiori
 */
global $theme_options;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
    <script>
    var aifiori_ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js" integrity="sha512-YYiD5ZhmJ0GCdJvx6Xe6HzHqHvMpJEPomXwPbsgcpMFPW+mQEeVBU6l9n+2Y+naq+CLbujk91vHyN18q6/RSYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body <?php body_class(); ?>>
<?php
    $loop_count = 0;
    if (has_post_thumbnail()) {
        $loop_count =1;
    }
?>
<header id="header" <?php echo $loop_count == 1 ? 'class="top_header"' : 'class="top_header no_banner"'; ?>>
    <div class="header-container">
		<div class="header-address">
			<div class="promotext">
				<?php if($theme_options['header-address'] != ''){?>
					<p><?php echo $theme_options['header-address'];?><a href="<?php echo $theme_options['instalink']; ?>" target="_blank">
					<i class="fa-brands fa-instagram" aria-hidden="true"></i> 
                    
                </a></p>
				<?php }?>  
			</div>
			<div class="promolink">
				<p><?php echo _e(""); ?><a href="<?php echo $theme_options['text'];?>"><?php echo $theme_options['text'];?></a></p>
			</div>
		</div>
		<div class="hedcontainer container">
			<div id="main_navbar" class="header-menu">
				<nav class="navbar navbar-expand-md navbar-dark">
					<?php if($theme_options['header-logo'] != ''){?>
						<a class="navbar-brand desktoplogo" href="<?php echo site_url()?>" title="<?php echo bloginfo('name')?>">
							<img src="<?php echo $theme_options['header-logo']?>" alt="<?php echo bloginfo('name')?>"/>
						</a>
						<?php }?>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon menu-bar"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon close-menu"></span>
						</button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'depth' => 2,
							'container' => false,
							'menu_class' => 'navbar-nav mr-auto',
						) );
						?>
						<?php if($theme_options['header-logo'] != ''){?>
						<a class="navbar-brand-mobile menuopenlogo" href="<?php echo site_url()?>" title="<?php echo bloginfo('name')?>">
							<img src="<?php echo $theme_options['header-logo']?>" alt="<?php echo bloginfo('name')?>"/>
						</a>
						<?php }?>
						
					</div>
				</nav>
			</div>
		</div>
    </div>
    <div class="page-banner">
        <?php
        if (has_post_thumbnail()) {
	        the_post_thumbnail('full', array('class' => 'img-fluid'));
	    }else{
            echo '<img class="img-fluid mainbanner" src="'.get_template_directory_uri().'/assets/images/no-page-banner.jpg" alt="Image">';
        }
        ?>
		<div class="logomobile">
		<?php if($theme_options['header-logo'] != ''){?>
						<a class="navbar-brand-mobile" href="<?php echo site_url()?>" title="<?php echo bloginfo('name')?>">
							<img src="<?php echo $theme_options['header-logo']?>" alt="<?php echo bloginfo('name')?>"/>
						</a>
						<?php }?>
		</div>
    </div>
</header>
