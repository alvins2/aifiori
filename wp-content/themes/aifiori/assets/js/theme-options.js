jQuery(document).ready(function ($) {
	  var media_element_id='';
	  if(jQuery().iCheck){
        jQuery('.icheck').iCheck({
          checkboxClass: 'icheckbox_square-blue checkbox',
          radioClass: 'iradio_square-blue'
        });
      }
	  
	  jQuery('a.remove_image').click(function(){
	  	var data_id = jQuery(this).attr('data-id');
		jQuery('#'+data_id+'_image img.img-thumbnail').remove();
		jQuery('#'+data_id).val('');
		jQuery(this).hide();
		
	  });
	  
	  jQuery('.image_upload_button').click(function() {
        tb_show('Upload Image', 'media-upload.php?referer=wptuts-settings&type=image&TB_iframe=true&post_id=0', false);
		media_element_id = jQuery(this).prev().attr('id');
        return false;
		
      });
	   
	  window.send_to_editor = function(html) {
		var image_url = $(html).attr('src');
		jQuery('#'+media_element_id).val(image_url);
		jQuery('#'+media_element_id+'_image').html('<img src="'+image_url+'" class="img-thumbnail">');
		console.log(media_element_id);
		tb_remove();
	  	
	  } 
	  
	  jQuery(".nav-tabs > li > a").click(function(){
	  	
		jQuery(".nav-tabs > li > a").removeClass('active');
		jQuery(this).addClass('active');
		setTimeout(function(){
		jQuery(".nav-tabs > li").removeClass('active');
		}, 200);	
	  });	
});