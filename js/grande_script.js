var afterFormClickCreateJson = true;
var editingButtonNow = false;

function wpg_booleanToChecked(bool){
	if(bool == 'true'){	
		return 'checked="checked"';
	}else if(bool == 'checked'){	
		return 'checked="checked"';
	}
}

function wpg_hideShowSubmenus(index){
	
	var finish = false;
	var	found = false;
	jQuery('#wpg_edit_adminmenu td').each(function(){	
		if(jQuery('#wpg_edit_adminmenu td').index(jQuery(this)) >= index && (finish == false)){			
			if(jQuery(this).hasClass('wpg_admin_menu_child')){
				jQuery(this).parent().toggleClass('noclass');
				found = true;
			}
			if((jQuery('#wpg_edit_adminmenu td').index(jQuery(this)) > index) && jQuery(this).hasClass('wpg_admin_menu_parent')){			
				finish = true;
			}
		}
	});
	/*FOCUS*/
	if(!jQuery('#wpg_edit_adminmenu td').eq((index+2)).parent().hasClass('noclass') && (found == true)){
		jQuery('#wpg_edit_adminmenu td').eq((index+2)).find('a').trigger('focus');		
	};	
}

/*
	Makes admin edit page pretty grouping items and submenus, and adding fancy interactions
*/
function wpg_prettyEditMenuPage(){
	jQuery('#wpg_edit_adminmenu td').each(function(){
		if(jQuery(this).hasClass('wpg_admin_menu_child')){
			jQuery(this).parent().addClass('noclass');
		};
	});
	jQuery('#wpg_edit_adminmenu td').each(function(){
		if(jQuery(this).hasClass('wpg_admin_menu_parent')){
		jQuery(this).parent().css('background-color','#d8eAd8');
		jQuery(this).bind('click',function(evt){	
			if(evt.target.className == 'wpg_admin_menu_parent'){
				wpg_hideShowSubmenus(jQuery('#wpg_edit_adminmenu td').index(this));
			}			
		});
		};
	});
	jQuery('#wpg_edit_adminmenu td > a').bind('click',function(){	
		jQuery(this).parent().click();		
		//jQuery(this).parent().focus();
	});
};

function wpg_createEditMenuPage(checkboxes,textboxes){		
	 /*Create menu page in wpg settings*/	
	
	 //console.log(textboxes);
	var counter = 0;
	var TBlength = textboxes.length;
	if(textboxes==""){
		TBlength = 9999999;
	}
	
	var topElement="";
	jQuery('ul#adminmenu li').each(function(){  
		if(!jQuery(this).hasClass("wp-menu-separator") && !jQuery(this).hasClass("wp-menu-separator-last") && !jQuery(this).hasClass("ag-custom-button") && (counter < TBlength )){	
			
			//if subelement
			if(jQuery(this).parent().parent().hasClass('wp-submenu')){	
				subElement = jQuery(this).find('a').text();
				//console.log(jQuery(this));
				//console.log(subElement);
				var isHidden = "";
				var sub_item_text_value;
				if(textboxes ==""){	
					sub_item_text_value = subElement;
				}else{
					sub_item_text_value = textboxes[counter][1];
					isHidden = checkboxes[counter][1];
				}	
				jQuery('#wpg_edit_adminmenu').append("<tr><td class='wpg_admin_menu_child'><div style=\"float:left\"><a tabindex=\"-1\" href=\"javascript:void(0)\" style=\"font-weight:bold;\"title=\""+topElement+" submenu: "+subElement+"\"><span style=\"font-weight:normal\">submenu: </span>"+subElement+"</a></div><div style=\"float:right\"><input type=\"checkbox\" title=\"Remove "+topElement+" submenu: "+subElement+" from menu\" class=\""+subElement+"\" "+wpg_booleanToChecked(isHidden)+"  name=\"wpg_edit_adminmenu_item_sub_"+counter+"\" /></div></td><td class='wpg_admin_menu_child2' ><input type=\"text\" title=\"Rename submenu item "+subElement+" with this value\" class=\""+subElement+"\" size=\"47\" value=\""+sub_item_text_value+"\" name=\"wpg_edit_adminmenu_item_sub_"+counter+"\" /></td></tr>");
			}
			//if top element
			else{
				topElement = jQuery(this).children('a').clone().children().remove().end().text();		
				topElement = jQuery.trim(topElement);
				var top_item_text_value;
				var isHidden = "";
				if(textboxes ==""){	
					top_item_text_value = topElement;
				}else{
					top_item_text_value = textboxes[counter][1];
					isHidden = checkboxes[counter][1];					
				}	
				jQuery('#wpg_edit_adminmenu').append("<tr><td class='wpg_admin_menu_parent'><br /><a tabindex=\"0\" href=\"javascript:void(0)\" >" + topElement +"</a><div style=\"float:right\"><input title=\"Remove "+topElement+" from menu\" class=\""+jQuery(this).attr("id")+"\" type=\"checkbox\" "+wpg_booleanToChecked(isHidden)+" name=\"wpg_edit_adminmenu_item_top_"+counter+"\" /></div></td><td class='wpg_admin_menu_parent2' ><input title=\"Rename "+topElement+" with this value\" type=\"text\" class=\""+jQuery(this).attr("id")+"\" size=\"47\" value=\""+top_item_text_value+"\" name=\"wpg_edit_adminmenu_item_top_"+counter+"\" /></td></tr>");
			}			
		counter++;
		}		
	});
	 
	//console.log(checkboxes.replace('<-TOP->','')+"|"+textboxes.replace('<-TOP->',''));	  
	  wpg_prettyEditMenuPage();
}

function wpg_createEditMenuPageV32(checkboxes,textboxes){		
	 /*Create menu page in wpg settings*/	
	
	var counter = 0;
	var TBlength = textboxes.length;
	if(textboxes==""){
		TBlength = 9999999;
	}
	
	var topElement="";
	jQuery('ul#adminmenu li').each(function(){  
		if(!jQuery(this).hasClass("wp-menu-separator") && !jQuery(this).hasClass("wp-menu-separator-last") && !jQuery(this).hasClass("ag-custom-button") && (jQuery(this).attr('id') !="collapse-menu") && (counter < TBlength )){	
			
			//if subelement
			if(jQuery(this).parent().parent().parent().hasClass('wp-submenu')){	
				subElement = jQuery(this).find('a').text();
				//console.log(jQuery(this));
				//console.log(subElement);
				var isHidden = "";
				var sub_item_text_value;
				if(textboxes ==""){	
					sub_item_text_value = subElement;
				}else{
					sub_item_text_value = textboxes[counter][1];
					isHidden = checkboxes[counter][1];					
				}	
				jQuery('#wpg_edit_adminmenu').append("<tr><td class='wpg_admin_menu_child'><div style=\"float:left\"><a tabindex=\"-1\" href=\"javascript:void(0)\" style=\"font-weight:bold;\"title=\""+topElement+" submenu: "+subElement+"\"><span style=\"font-weight:normal\">submenu: </span>"+subElement+"</a></div><div style=\"float:right\"><input type=\"checkbox\" title=\"Remove "+topElement+" submenu: "+subElement+" from menu\" class=\""+subElement+"\" "+wpg_booleanToChecked(isHidden)+"  name=\"wpg_edit_adminmenu_item_sub_"+counter+"\" /></div></td><td class='wpg_admin_menu_child2' ><input type=\"text\" title=\"Rename submenu item "+subElement+" with this value\" class=\""+subElement+"\" size=\"47\" value=\""+sub_item_text_value+"\" name=\"wpg_edit_adminmenu_item_sub_"+counter+"\" /></td></tr>");
			}
			//if top element
			else{
				topElement = jQuery(this).children('a').clone().children().remove().end().text();		
				topElement = jQuery.trim(topElement);
				var top_item_text_value;
				var isHidden = "";
				if(textboxes ==""){	
					top_item_text_value = topElement;
				}else{
					top_item_text_value = textboxes[counter][1];
					isHidden = checkboxes[counter][1];
				}	
				jQuery('#wpg_edit_adminmenu').append("<tr><td class='wpg_admin_menu_parent'><br /><a tabindex=\"0\" href=\"javascript:void(0)\" >" + topElement +"</a><div style=\"float:right\"><input title=\"Remove "+topElement+" from menu\" class=\""+jQuery(this).attr("id")+"\" type=\"checkbox\" "+wpg_booleanToChecked(isHidden)+" name=\"wpg_edit_adminmenu_item_top_"+counter+"\" /></div></td><td class='wpg_admin_menu_parent2' ><input title=\"Rename "+topElement+" with this value\" type=\"text\" class=\""+jQuery(this).attr("id")+"\" size=\"47\" value=\""+top_item_text_value+"\" name=\"wpg_edit_adminmenu_item_top_"+counter+"\" /></td></tr>");
			}			
		counter++;
		}else if(jQuery(this).attr('id') =="collapse-menu"){
			jQuery(this).remove();
		}
	});
	 
	//console.log(checkboxes.replace('<-TOP->','')+"|"+textboxes.replace('<-TOP->',''));	  
	  wpg_prettyEditMenuPage();
}

jQuery(document).ready(function(){	
	jQuery('#wpg_form').submit(function(){
		
		/*Serialize checkboxes*/
		var array = "{";
		var firstElement = true;
		var topMarker = "";
		jQuery('#wpg_edit_adminmenu :checkbox').each(function(){		
				if(firstElement != true){
					array += ", ";				
				}
				topMarker = "";
				if(jQuery(this).parent().parent().hasClass('wpg_admin_menu_parent')){
					topMarker="<-TOP->"; 
				}
				array += "\"" + topMarker + jQuery(this).attr('class') + "\" : ";
				array += "\"" + jQuery(this).attr('checked') + "\"";
				firstElement = false;			
		});
		array += "}|";
		
		/*Serialize textboxes*/
		array += "{";
		firstElement = true;
		jQuery('#wpg_edit_adminmenu :text').each(function(){		
				if(firstElement != true){
					array += ", ";				
				}
				topMarker = "";
				if(jQuery(this).parent().hasClass('wpg_admin_menu_parent2')){
					topMarker="<-TOP->";
				}
				array += "\"" + topMarker  + jQuery(this).attr('class') + "\" : ";
				array += "\"" + jQuery(this).val() + "\"";
				firstElement = false;			
		});
		array += "}";
		
		if(afterFormClickCreateJson == true){
			jQuery('#wpg_edit_adminmenu_json').val(array);		
		}else{
			jQuery('#wpg_edit_adminmenu_json').val('');						
		}
		//console.log(array);
		//serialize buttons
		array = "{";
		var element = 0;
		jQuery('#wpg_add_adminmenu :button').each(function(){
			//console.log(jQuery(this).html()+jQuery(this).attr('title'));
				if(element > 0){
					if(element > 1){
						array += ", ";				
					}
					array += "\"" + jQuery(this).html() + "\" : {";
					array += " \"value\" : ";
					array += "\"" + jQuery(this).attr('title') + "\"";
					array += ", \"target\" : ";
					array += "\"" + jQuery(this).attr('target') + "\"}";					
				}
				element++;
		});
		array += "}";	
		if(element == 1){array="";}
		jQuery('#wpg_add_adminmenu_json').val(array);		
		
		/*Serialize colors*/
		var array = "{";
		var firstElement = true;
		var topMarker = "";
		jQuery('input.color_picker').each(function(){	
				if(firstElement != true){
					array += ", ";				
				}			
				array += "\"" + jQuery(this).attr('id') + "\" : ";
				array += "\"" + jQuery(this).val() + "\"";
				firstElement = false;			
		});
		array += "}";
		jQuery('#wpg_colorizer_json').val(array);
		
		return true;
	});
});