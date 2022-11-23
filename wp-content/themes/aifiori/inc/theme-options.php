<?php
add_action( 'admin_menu', 'fn_ci_add_menu' );
 
/*
 * The Admin menu page
 */
function fn_ci_add_menu(){
   if($_POST['btn_theme_options'] && $_POST['btn_theme_options'] == 'Save'){
  $theme_settings = $_POST;
  unset($theme_settings['btn_theme_options']);
  foreach($theme_settings as $tKey=>$theme_setting){
    $theme_settings[$tKey]= stripslashes($theme_setting);
  }
  update_option('ci_theme_options', $theme_settings);
  wp_redirect('?page=theme-options');   
    exit;
   }  
     
   $ci_settings_page = add_theme_page(__('Theme Options'), __('Theme Options'), 'manage_options', 'theme-options', 'fn_ci_theme_options');          
}

function fn_ci_theme_options(){
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('theme-options', get_template_directory_uri() . '/assets/css/theme-options.css');
  
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap-theme.min.js', array('jquery'));
  wp_enqueue_script( 'theme-options-js', get_template_directory_uri() . '/assets/js/theme-options.js', array('jquery'));
  wp_enqueue_script( 'icheck-js', get_template_directory_uri() . '/assets/js/icheck.min.js', array('jquery'));
  
  wp_enqueue_script('thickbox');
    wp_enqueue_style('thickbox');
 
    wp_enqueue_script('media-upload');
    wp_enqueue_script('wptuts-upload');
  
  include('option-items.php');
  include('option-functions.php');
  
  
?>


      <div class="block-flat">  
        <div class="header">              
            <h3>Theme Options</h3>
        </div>
        <div class="option-content">
          <form action="" method="post">
            <ul class="nav nav-tabs">
              <?php echo fn_get_theme_options_tabs();?> 
            </ul>
            <div class="tab-content">
              <?php echo fn_get_theme_options_tabs_content();?>
            </div>
           </form>   
        </div>
      </div>   
   
<?php 
}
?>