<?php
function fn_get_theme_options_tabs(){
	global $option_items;
	
	$tab_html='';
	$active_class ='active';
	foreach($option_items as $oKey=>$option_item){
		if($option_item['type'] == 'section'){
			$tab_html .='<li><a class="'.$active_class.'" href="#section-'.$option_item['name'].'" data-toggle="tab">'.$option_item['title'].'</a></li>';
			$active_class ='';
		}	
	}
	return $tab_html;
}

function fn_get_theme_options_tabs_content(){
	global $option_items;
	
	$tab_html='';
	$active_class ='active';
	foreach($option_items as $oKey=>$option_item){
		if($option_item['type'] == 'section'){
			$tab_html .='<div class="tab-pane cont '.$active_class.'" id="section-'.$option_item['name'].'">
							   <div class="block-flat">	
							   <div class="header">	
							   	<h5>'.$option_item['title'].' Settings</h5>
							   </div>
							   '.fn_get_theme_options_fields(($oKey+1)).'
							   <div class="form-group">
									<button class="btn btn-primary" name="btn_theme_options" value="Save">Save</button>
							   </div>
							   </div>
						  </div>';
			$active_class ='';
		}	
	}
	return $tab_html;
}

function fn_get_theme_options_fields($start_index){
	global $option_items, $theme_options;
	$field_html='';
	
	for($oIndex=$start_index; $oIndex <  count($option_items); $oIndex++){
		$field_info = $option_items[$oIndex];
		if($field_info['type'] == 'section') break;
			
			$field_value = $theme_options[$field_info['name']];
			
			if($field_info['type'] == 'text'){	
			$tab_html .='<div class="form-group">
              				<label>'.$field_info['title'].'</label> 
							<input class="form-control" type="text" name="'.$field_info['name'].'" value="'.$field_value.'">
							<p>'.$field_info['desc'].'</p><hr/>
            			 </div>';
			
			}elseif($field_info['type'] == 'textarea'){	
			
			$tab_html .='<div class="form-group">
              				<label>'.$field_info['title'].'</label> 
							<textarea class="form-control" name="'.$field_info['name'].'">'.esc_attr($field_value).'</textarea>
							<p>'.$field_info['desc'].'</p><hr/>
            			 </div>';	
			}elseif($field_info['type'] == 'checkbox'){	
			
			$tab_html .='<div class="form-group">
              				<label>'.$field_info['title'].'</label>
							<div class="form-items">'; 
							if($field_info['values'] && !empty($field_info['values'])){
								
								foreach($field_info['values'] as $value){
									$checked = '';
									if(in_array($value, $field_value)) $checked = 'checked';
									$tab_html .=' <label class="checkbox-inline"> <input type="checkbox" name="'.$field_info['name'].'[]" class="icheck" value="'.$value.'" '.$checked.'> '.$value.'</label>';	
								}
							}		
							
				$tab_html .='</div>
							 <p>'.$field_info['desc'].'</p><hr/>
            			 </div>';	
			}elseif($field_info['type'] == 'radio'){	
			
			$tab_html .='<div class="form-group">
              				<label>'.$field_info['title'].'</label>
							<div class="form-items">'; 
							if($field_info['values'] && !empty($field_info['values'])){
								foreach($field_info['values'] as $value){
									$checked = '';
									if($value == $field_value) $checked = 'checked';
									$tab_html .=' <label class="radio-inline"> <input type="radio" name="'.$field_info['name'].'" class="icheck" value="'.$value.'" '.$checked.'> '.$value.'</label>';	
								}
							}		
							
				$tab_html .='</div>
							 <p>'.$field_info['desc'].'</p><hr/>
            			 </div>';	
			}elseif($field_info['type'] == 'image'){	
			
			$tab_html .='<div class="form-group">
              				<label>'.$field_info['title'].'</label>';
					$tab_html .='<div class="row"><div class="form-group col-md-2 logo_up" id="'.$field_info['name'].'_image">';
					if($field_value !=''){
						$tab_html .='<img src="'.$field_value.'" class="img-thumbnail">';
						$tab_html .='<a href="javascript:;" class="remove_image" data-id="'.$field_info['name'].'"><span class="dashicons dashicons-trash"></span></a>';
						
					}
					$tab_html .='</div></div>';		
					$tab_html .='<input class="form-control" type="hidden" id="'.$field_info['name'].'" name="'.$field_info['name'].'" value="'.$field_value.'">';				
					$tab_html .='<button type="button" name="'.$field_info['name'].'" class="image_upload_button btn btn-primary">Upload</button>';		
			$tab_html .='<p>'.$field_info['desc'].'</p><hr/>
            			 </div>';	
			}
			
			
	}
	return $tab_html;
	
}