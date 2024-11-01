<?php /* 
        Plugin Name: Wp Grande Plugin
        Plugin URI: http://www.wpgrande.com/wp-grande-plugin/
        Description: Plugin for Managing dashboard,footer,admin bar,menus,screen options meta boxes,webmaster tools,xml sitemap,login page,social buttons
        Author: WP Grande Plugin
        Version: 1.1.0
        Author URI: http://www.wpgrande.com/ 
		License: GPLv2 or later
	*/  
	    error_reporting(0); 
		add_action('admin_menu', 'wp_grande');
		function wp_grande()
	{
	add_menu_page( 'Wp-Grande', 'Wp Grande', 'manage_options','Wp-Grande', 'dashboard_include' );
	add_submenu_page('Wp-Grande', 'Dashboard Setting', 'Dashboard Page', 'manage_options', 'Wp-Grande', 'dashboard_include');
	add_submenu_page('Wp-Grande', 'Admin Bar Setting', 'Admin Bar', 'manage_options', 'Wp-Adminbar', 'admin_bar_include');
	add_submenu_page('Wp-Grande', 'Admin Footer Setting', 'Admin Footer', 'manage_options', 'Wp_Footer', 'admin_footer_include');
	add_submenu_page('Wp-Grande', 'Admin Login Page Setting', 'Login Page', 'manage_options', 'Wp-Login', 'admin_login_include');
	add_submenu_page('Wp-Grande', 'Admin Menu Setting', 'Admin Menu', 'manage_options', 'Wp-Menu', 'admin_menu_include');
	add_submenu_page('Wp-Grande', 'Posts & page Metaboxes settings', 'Metaboxes', 'manage_options', 'Wp-metabox', 'admin_metabox_include');
	add_submenu_page('Wp-Grande', 'Social Buttons Setting', 'Social Buttons', 'manage_options', 'Wp-Social', 'admin_share_include');
	add_submenu_page('Wp-Grande', 'Webmaster tool', 'Webmaster tool', 'manage_options', 'Wp-Master', 'admin_master_include');
	add_submenu_page('Wp-Grande', 'sitemap', 'XML Sitemap', 'manage_options', 'Wp-Sitmap', 'admin_sitemap_include');
	add_submenu_page('Wp-Grande', 'Seo link manager & friendly images', 'SEO', 'manage_options', 'Wp-Seo', 'admin_seo_include');
	add_submenu_page('Wp-Grande', 'Contact Form', ' Contact Form', 'manage_options', 'Wp-contact_form', 'admin_contactform_include');
	}
	function dashboard_include()
	{
	include('include/dashboard.php');
	}
	function admin_bar_include()
	{
	include('include/adminbar.php');
	}
	function admin_footer_include()
	{
	include('include/footer.php');
	}
	function admin_login_include()
	{
	include('include/login.php');
	}
	function admin_menu_include()
	{
	include('include/menu.php');
	}
	function admin_post_include()
	{
	include('include/post.php');
	}
	function admin_metabox_include()
	{
	include('include/metabox.php');
	}
	function admin_share_include()
	{
	include('include/social.php');
	}
	function admin_master_include()
	{
	include('include/master.php');
	}
	function admin_sitemap_include()
	{
	include('include/sitemap.php');
	}
	function admin_seo_include()
	{
	include('include/seo.php');
	}
	function admin_contactform_include()
	{
	include('include/contact.php');
	}
	//Remove heading icon
	if(get_option('remove_heading_icon')=='true'){
	function remove_heading_icon() {
	echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                                   jQuery("#icon-index").css("background","none");                                    
                            });
                    </script>';

}
	add_action('admin_head', 'remove_heading_icon');
	
	}
	//Change Header text
	if(get_option('change_header_text')!=""){
	function change_header_text() {
    echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                                jQuery("#dashboard-widgets-wrap").parent().find("h2").text("'.get_option('change_header_text').'");                                   
                            });
                    </script>';
    }
	add_action('admin_head', 'change_header_text');
	}
//Change dashboard logo
if(get_option('change_dashboard_logo')!=""){
function my_custom_logo() {
echo '
<style type="text/css">
#icon-index { background-image: url('.get_option('change_dashboard_logo').'); }
</style>';
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                                    $("#icon-index").css("visibility","visible");                                    
                            });
                    </script>';

}
add_action('admin_head', 'my_custom_logo');
	
	}
//Hide Dashboard content logo
if(get_option('hide_content_logo')=="true"){
function hide_content_logo() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                                jQuery(" .wp-badge").css("display","none");                                   
                            });
                    </script>';

}
add_action('admin_head', 'hide_content_logo');
}
//Change dashboard content logo
if(get_option('change_dashboard_content_logo')!=""){
function my_custom_content_logo() {
echo '<style type="text/css">
.wp-badge { background-image: url('.get_option('change_dashboard_content_logo').') }
</style>';
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                                    $(".wp-badge").css("visibility","visible");                                    
                            });
                    </script>';

}
add_action('admin_head', 'my_custom_content_logo');
	
	}
//Change welcome panel heading
if(get_option('change_welcome_panel_heading')!=""){ 
function change_welcome_panel_heading() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                              jQuery(".welcome-panel-content h3 ").html("'.get_option('change_welcome_panel_heading').'");                                   
                            });
                    </script>';
}
add_action('admin_head', 'change_welcome_panel_heading');
}
//Change welcome description
if(get_option('change_welcome_panel_description')!=""){ 
function change_welcome_panel_description() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                             jQuery(".about-description").html("'.get_option('change_welcome_panel_description').'");                                   
                            });
                    </script>';

}
add_action('admin_head', 'change_welcome_panel_description');
}
	//Hide welcome panel box
	if(get_option('hide_welcome_panel_boxes')=='true'){
function hide_welcome_panel_box() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                              jQuery(".welcome-panel-column-container").css("display","none");                                  
                            });
                    </script>';

}
add_action('admin_head', 'hide_welcome_panel_box');
}
	//Hide right now box
	 if(get_option('hide_right_now')=='true') {  
    function rw_remove_right_now() {
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); // right now
    }
	add_action('admin_init', 'rw_remove_right_now');
	}
	//Hide recent comments box
	 if(get_option('hide_recent_comments')=='true') {  
    function rw_remove_recent_comments() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // recent comments
    }
	add_action('admin_init', 'rw_remove_recent_comments');
	}
	//Hide incoming links box
	 if(get_option('hide_incoming_links')=='true') {  
    function rw_remove_incoming_links() {
   remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); // incoming links
   }
	add_action('admin_init', 'rw_remove_incoming_links');
	}
	//Hide plugins box
	 if(get_option('hide_plugins')=='true') {  
    function rw_remove_plugins() {
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); 
    }
	add_action('admin_init', 'rw_remove_plugins');
	}
	//Hide quickpress box
	if(get_option('hide_quickpress')=='true') {  
    function rw_remove_quickpress() {
     remove_meta_box('dashboard_quick_press', 'dashboard', 'normal'); 
       }
	add_action('admin_init', 'rw_remove_quickpress');
	}
	//Hide recent drafts box
	if(get_option('hide_recent_draft')=='true') {  
    function rw_remove_recent_draft() {
     remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal'); 
	 }
	add_action('admin_init', 'rw_remove_recent_draft');
	}
	//Hide wordpress blog box
	if(get_option('hide_wordpress_blog')=='true') {  
    function rw_remove_wordpress_blog() {
    remove_meta_box('dashboard_primary', 'dashboard', 'normal');
   }
	add_action('admin_init', 'rw_remove_wordpress_blog');
	}
	//Hide wordpress news box
	if(get_option('hide_wordpress_news')=='true') {  
    function rw_remove_wordpress_news() {
    
     remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
	 }
	add_action('admin_init', 'rw_remove_wordpress_news');
    }
    	if(get_option('hide_right_now')=='true'){
function hide_right_border() {

echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                             jQuery("#normal-sortables ").css("border","none");                                 
                            });
                    </script>';

}
add_action('admin_head', 'hide_right_border');
}
	if(get_option('hide_wordpress_news')=='true'){
function hide_wordpress_border() {

echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                            jQuery("#side-sortables ").css("border","none");                                
                            });
                    </script>';
					}
add_action('admin_head', 'hide_wordpress_border');
}
//Remove admin bar completely
if(get_option('remove_bar_completely')=='true'){
function hide_admin_bar()
{
echo '<script type="text/javascript">
 jQuery(document).ready(function($) {
                            jQuery("#wpadminbar").css("display","none");                                  
							jQuery("#adminmenuwrap").css("margin-top","-29px");   
                            });</script>';
}
add_action('admin_head', 'hide_admin_bar');
add_action('wp_head', 'hide_admin_bar');
}
//Hide wordpress logo in the admin bar
if(get_option('remove_logo_completely')=='true'){
function hide_wordpress_logo() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                            jQuery("#wp-admin-bar-wp-logo .ab-item .ab-icon ").css("background","none");                                  
                            });
                    </script>';
					}
add_action('admin_head', 'hide_wordpress_logo');
}
//Hide Screen options
if(get_option('remove_screen_options')=='true'){
function hide_screen_options() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                            jQuery("#screen-options-link-wrap").css("display","none");
                            });
                    </script>';
					}
add_action('admin_head', 'hide_screen_options');
}
//Hide Help options
if(get_option('remove_help_options')=='true'){
function hide_help_options() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#contextual-help-link-wrap").css("display","none");
                            });
                    </script>';
}
add_action('admin_head', 'hide_help_options');
}
//Hide footer completely
if(get_option('hide_footer_completely')=='true'){
function hide_footer() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                          jQuery("#footer").css("display","none");
                            });
                    </script>';
}
add_action('admin_head', 'hide_footer');
}
//Hide footer left
if(get_option('hide_footer_left')=='true'){
function hide_footer_left() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                         jQuery("#footer-left").css("display","none");
                            });
                    </script>';
					}
add_action('admin_head', 'hide_footer_left');
}
//Change footer text
if(get_option('change_footer_left')!=""){
function change_footer_left() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                            jQuery("#footer-left").html("'.get_option('change_footer_left').'");                                   
                            });
                    </script>';
}
add_action('admin_head', 'change_footer_left');
}
//hide error on activation of plugins
function hide_error() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                            jQuery("#message").css("display","none");
                            });
                    </script>';

}
add_action('admin_head', 'hide_error');
//Hide footer right version text
if(get_option('hide_version_text')=='true'){
function hide_footer_right() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                        jQuery("#footer-upgrade").css("display","none");
                            });
                    </script>';
}
add_action('admin_head', 'hide_footer_right');
}
//Change version text
if(get_option('change_version_text')!=""){ 
function change_footer_right() {
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#footer-upgrade").html("'.get_option('change_version_text').'");                                   
                            });
                    </script>';
}
add_action('admin_head', 'change_footer_right');
}
//Change login page logo
	if(get_option('change_login_logo')!="")
    {
	function custom_login_logo() {
    echo '<style type="text/css">
       .login h1 a { background-image:url('.get_option('change_login_logo').')}
    </style>';
}
add_action('login_head', 'custom_login_logo');
	}
	//Change hyperlink on login page logo
if(get_option('change_hyperlink')!=''){
function change_login_page_url( $url ) {
    $link_url=get_option('change_hyperlink');
    return $link_url;
}
add_filter( 'login_headerurl', 'change_login_page_url' );
}
//Hide login page logo
if(get_option('hide_login_logo')=='true'){
function hide_login_logo() {
echo '<style type="text/css">
       .login h1 a { background-image:url('.get_option('hide_login_logo').')}
    </style>';
	}
add_action('login_head', 'hide_login_logo');
}
//menu page
$wpg = new wpg();
class wpg{
	private $colorizer="";	
	private $active_plugin;
	private $wpg_version;
	public function __construct()
	{	
	add_action('admin_init', array(&$this,'wpg_register_settings'));
	add_action('admin_head', array(&$this,'wpg_print_admin_css'));	
	}
function wpg_get_includes() {
		?>			
<link rel="stylesheet" type="text/css" href="<?php echo trailingslashit(plugins_url(basename(dirname(__FILE__)))); ?>css/grande_style.css" />
<script type="text/javascript" src="<?php echo trailingslashit(plugins_url(basename(dirname(__FILE__)))); ?>js/grande_script.js"></script>	
<?php
	}
	function wpg_register_settings() {	
		register_setting( 'wpg-options-group', 'wpg_admin_menu_turnonoff' );	
		register_setting( 'wpg-options-group', 'wpg_admin_menu_wpg_button_only' );	
	    register_setting( 'wpg-options-group', 'wpg_edit_adminmenu_json' );
		register_setting( 'wpg-options-group', 'wpg_add_adminmenu_json' );	
		}
function wpg_create_admin_button($name,$arr) {
		$class="";
		$href = $arr["value"];
		$target =$arr["target"];
		if($name == 'AG Custom Admin'){
			$class="wpg_button_only";
			$target = "_self";
			$href = $arr;
		}
		$button ="";
		$button .= '<li id="menu-'.$name.'" class="ag-custom-button menu-top menu-top-first '.$class.' menu-top-last">';
			/*<div class="wp-menu-image">
				<a href="edit-comments.php"><br></a>
			</div>*/
			$button .= '<div class="wp-menu-toggle" style="display: none;"><br></div>';
			$button .=  '<a tabindex="1" target="'.$target.'" class="menu-top menu-top-last" href="'.$href.'">'.$name.'<a>';
		$button .=  '</li>';
		return $button;		
	}	
	function wpg_decode($code){
		$code = str_replace("{","",$code);
		$code = str_replace("}","",$code);
		$elements = explode(", ",$code);
		return $elements;
	}
	function wpg_jsonMenuArray($json,$type){
		$arr = explode("|",$json);
		$elements = "";
		$array ="";
		$first = true;
		//print_r($json);
		if($type == "colorizer"){
			$elements = json_decode($arr[0],true);
			if($elements !=""){
				return $elements;
			}
		}else if($type == "buttons"){
			$elements = json_decode($arr[0],true);
			if($elements !=""){
				foreach($elements as $k => $v){		
					$array.=$this->wpg_create_admin_button($k,$v);			
				}	
			}
		}else if($type == "buttonsJq"){
			$elements = json_decode($arr[0],true);
			if($elements !=""){
				foreach($elements as $k => $v){	
					$array.='<tr><td colspan="2"><button target="'.$v["target"].'" title="'.$v["value"].'" type="button">'.$k.'</button>&nbsp;(<a style="cursor:pointer" class="button_edit">edit</a>)&nbsp;(<a style="cursor:pointer" class="button_remove">remove</a>)</td><td></td></tr>';							
				}	
			}
		}else{
			//$elements = json_decode($arr[$type],true);			
			$elements = $this->wpg_decode($arr[$type]);
			if($elements !=""){
				foreach($elements as $element){
					if(!$first){
						$array .=",";
					}
					$parts = explode(" : ",$element);
					$array.="[".$parts[0].", ".$parts[1]."]";					
					$first=false;
				}	
			}	
		}
			return $array;			
	}
	function get_wp_version(){
		global $wp_version;
		$array = explode('-', $wp_version);		
		$version = $array[0];		
		return $version;
	}
	function wpg_print_admin_css()
	{
		$this->wpg_get_includes();
		get_currentuserinfo() ;
		global $user_level;
		$wpversion = $this->get_wp_version();
		?>	
<script type="text/javascript">
jQuery(document).ready(function() {	
try
  {  	
<?php	$checkboxes = $this->wpg_jsonMenuArray(get_option('wpg_edit_adminmenu_json'),'0');	?>
var checkboxes = <?php echo "[".$checkboxes."]"; ?>;

<?php	$textboxes = $this->wpg_jsonMenuArray(get_option('wpg_edit_adminmenu_json'),'1');	?>
var textboxes = <?php echo "[".$textboxes."]"; ?>;

<?php	$buttons = $this->wpg_jsonMenuArray(get_option('wpg_add_adminmenu_json'),'buttons');	?>
var buttons = '<?php echo $buttons; ?>';	
<?php	$buttonsJq = $this->wpg_jsonMenuArray(get_option('wpg_add_adminmenu_json'),'buttonsJq');	?>
					var buttonsJq = '<?php echo $buttonsJq; ?>';				
<?php if($wpversion >=3.2 ){ ?>
						wpg_createEditMenuPageV32(checkboxes,textboxes);
					<?php }else{ ?>
						wpg_createEditMenuPage(checkboxes,textboxes);
					<?php } ?>
<?php if(get_option('wpg_admin_menu_wpg_button_only') == true){ ?>											
								jQuery('#adminmenu > li').each(function(){
									if(!jQuery(this).hasClass('wpg_button_only')){
										jQuery(this).addClass('noclass');
									}
								});
							 <?php } ?>				
							<?php /*EDIT MENU ITEMS*/?>
							<?php if(get_option('wpg_edit_adminmenu_json')!=""){ 											
							?>			
							var checkboxes_counter = 0;
							var createwpgbutton = false;
							//console.log(checkboxes);							
							//console.log(textboxes);
							<?php //loop through original menu and hide and change elements according to user setttngs ?>																		
                            var topmenuitem;
							jQuery('ul#adminmenu > li').each(function(){											
							if(!jQuery(this).hasClass("wp-menu-separator") && !jQuery(this).hasClass("wp-menu-separator-last")){
												//alert(checkboxes[checkboxes_counter]);
							topmenuitem = jQuery(this).attr('id');
							
																
							var matchFound = false;
							var subMenus = "";
							for(i=0; i< checkboxes.length ; i++){
							
							if(checkboxes[i][0].indexOf("<-TOP->") >=0){ //if it is top item													
														if(checkboxes[i][0].indexOf(topmenuitem) >0){//if found match in menu, with top item in array															
															matchFound = true;
  															
															
															if(checkboxes[i][0]=='<-TOP->menu-posts'){	
															
															jQuery('#menu-posts').find('a').eq(1).html(textboxes[3][1]);
															if((checkboxes[i][1] == "true") || (checkboxes[i][1] == "checked")){
																				jQuery(this).addClass('noclass');
																			}
																			i++;
																			var selector = '#' + topmenuitem + ' ul li';
															//console.log(i+" "+checkboxes);													
																while((i<checkboxes.length) && (checkboxes[i][0].indexOf("<-TOP->") < 0)){															
																	jQuery(selector).each(function(){ //loop through all submenus																	
																		if(checkboxes[i][0] == jQuery(this).text()){
																			if((checkboxes[i][1] == "true") || (checkboxes[i][1] == "checked")){
																				jQuery(this).addClass('noclass');
																			}
																			jQuery(this).find('a').text(textboxes[i][1]);																			
																		}
																	});
																	i++;
																}
															break;
															
															}
															else
															jQuery(this).find('a').eq(1).html(textboxes[i][1]);
															if((checkboxes[i][1] == "true") || (checkboxes[i][1] == "checked")){
																jQuery(this).addClass('noclass');
															}
															
															i++;
															var selector = '#' + topmenuitem + ' ul li';
															//console.log(i+" "+checkboxes);													
																while((i<checkboxes.length) && (checkboxes[i][0].indexOf("<-TOP->") < 0)){															
																	jQuery(selector).each(function(){ //loop through all submenus																	
																		if(checkboxes[i][0] == jQuery(this).text()){
																			if((checkboxes[i][1] == "true") || (checkboxes[i][1] == "checked")){
																				jQuery(this).addClass('noclass');
																			}
																			jQuery(this).find('a').text(textboxes[i][1]);																			
																		}
																	});
																	i++;
																}						
														};
													}else{
														//i++;
													}												
												}
												}
										});								
									<?php
							 } ?>
							}finally{
	jQuery('html').css('visibility','visible');	
	
 }  
 });
</script>
<?php 	
	}
	}
//change post
if(get_option('new_post_name')!="")
{
add_filter(  'gettext',  'change_post'  );
add_filter(  'ngettext',  'change_post'  );

function change_post( $translated ) {
  $translated = str_ireplace(  'Posts', get_option('new_post_name'),  $translated );  // ireplace is PHP5 only
  return $translated;
}

}
if(get_option('hide-post')){
function check_post() {
$hide=get_option('hide-post');
foreach($hide as $h){
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#post-'.$h.'").attr("checked","checked");                                   
                            });
                    </script>';
					}

}
add_action('admin_head', 'check_post');
}
if(get_option('hide-page')){
function check_page() {
$hide=get_option('hide-page');
foreach($hide as $h){
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#page-'.$h.'").attr("checked","checked");                                   
                            });
                    </script>';
					}

}
add_action('admin_head', 'check_page');
}
function removeBox(){
$hide=get_option('hide-post');
$hidePage=get_option('hide-page');
if($hide){
foreach ($hide as $box )
foreach (array('normal', 'advanced', 'side') as $context)
 remove_meta_box($box, 'post', $context);
 }
 if($hidePage){
	foreach ($hidePage as $box2 )
				foreach (array('normal', 'advanced', 'side') as $context)
				remove_meta_box($box2, 'page', $context);
		}	
		
		}
add_action( 'do_meta_boxes' , 'removeBox' );
//adding social icon to post page only
function post_social_buttons_below($content) {
    if((is_single() && get_option('option_post')=='true')||(is_home() && get_option('option_home')=='true')||(is_page() && get_option('option_page')=='true')||(is_category() && get_option('option_category')=='true')||(is_tag() && get_option('option_tag')=='true')||(is_archive() && get_option('option_archive')=='true')){
	global $post;
    $permalink = get_permalink($post->ID);
    $title = is_front_page()?get_bloginfo(url):get_the_title();
 $content ='<div class="emergencyn" style="float:right;">';

if(get_option('twitter')=='true'){
$content.='<div class="sbutton" id="tw" style="bottom: 490px; border: 0px none; position: fixed; left: 44px; z-index: 100000;">
<a href="http://twitter.com/share" class="twitter-share-button" data-url="'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"].'"  data-count="'.get_option('twitter_type').'" data-via="canyon">Tweet</a>	
	</div>';
	}
if(get_option('facebook')=='true')
{
$content.='
<div class="sbutton" id="fb" style="bottom: 433px; border: 0px none; position: fixed; left: 44px; z-index: 100000;">
<fb:like layout="'.get_option('facebook_type').'" href="'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"].'"></fb:like>
</div>';
}
if(get_option('googleplus')=='true')
{
$content.='
<div class="sbutton" id="gp" style="bottom: 368px; border: 0px none; position: fixed; left: 44px; z-index: 100000;">
<g:plusone size="'.get_option('googleplus_type').'" annotation="'.get_option('annotation_type').'"></g:plusone>
</div>';
}
if(get_option('linkedin')=='true')
{
$content.='
<div class="sbutton" id="ld" style="bottom:303px; border: 0px none; position: fixed; left: 44px; z-index: 100000;">
<script type="in/share" data-url="'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"].'" data-counter="'.get_option('linkedin_type').'"></script>
</div>';
}

if(get_option('delicious')=='true')
{
$content.='<div class="sbutton" id="dl" style="bottom:245px; border: 0px none; position: fixed; left: 44px; z-index: 100000;">
<a class="delicious-button"  href="http://delicious.com/save">
   <!-- {
      url:"'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"].'"
      ,title:"'.$title.'"
      ,button:"'.get_option('delicious_type').'"
   } -->
    Delicious
</a></div>';
}
if(get_option('reddit')=='true')
{
$size=get_option('reddit_type');
switch($size){
			case 'horizontal':
			$src = "http://www.reddit.com/static/button/button1.js";
			break;
			case 'none':
			$src = "http://www.reddit.com/buttonlite.js?i=2";
			break;
			default:
			$src = "http://www.reddit.com/static/button/button2.js";
			break;
		}
$content.='<div class="sbutton" id="rd" style="bottom:165px; border: 0px none; position: fixed; left: 44px; z-index: 100000;">
<script type="text/javascript">
							  reddit_url = "'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"].'";
							  reddit_title = "'.$title.'";
							  reddit_newwindow="1"
							  </script><script type="text/javascript" src="'.$src.'"></script>
							</div>';
}
if(get_option('sphinn')=='true')
{
$content.='<div class="sbutton" id="sp" style="bottom:95px; border: 0px none; position: fixed; left: 44px; z-index: 100000;">
 <script type="text/javascript" src="http://sphinn.com/evb/buttons.php?b='.get_option('sphinn_type').'"></script>
 </div>';
}
$content.='</div>';
 
	}
	$content .= $post->post_content;
	return $content;
}
add_filter('the_content', 'post_social_buttons_below');

function add_social_js() {
       echo '<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
	   echo '<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>';
	echo '<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>';
echo '<style>.emergencyn{padding:10px 17px 0 0; float:right;}</style>';
echo '<script type="text/javascript" src="http://platform.linkedin.com/in.js"></script>';
echo '<script src="http://widgets.digg.com/buttons.js" type="text/javascript"></script> ';	
echo '<script type="text/javascript">
(function() {
var s = document.createElement("SCRIPT"), s1 = document.getElementsByTagName("SCRIPT")[0];
s.type = "text/javascript";
s.async = true;
s.src = "http://widgets.digg.com/buttons.js";
s1.parentNode.insertBefore(s, s1);
})();
</script>
';
echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>';
echo '<script type="text/javascript" src="http://delicious-button.googlecode.com/files/jquery.delicious-button-1.0.min.js"></script>';
echo '<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>';
echo '<script type="text/javascript" src="http://static.bufferapp.com/js/button.js"></script>';
}

add_filter( "wp_head", "add_social_js" );
//google webmaster


function add_master(){
if(get_option('google_master')!="")
echo stripslashes(get_option('google_master'));
if(get_option('bing_master')!="")
echo stripslashes(get_option('bing_master'));
if(get_option('yahoo_master')!="")
echo stripslashes(get_option('yahoo_master'));
if(get_option('alexa_master')!="")
echo stripslashes(get_option('alexa_master'));
if(get_option('blog_master')!="")
echo stripslashes(get_option('blog_master'));
if(get_option('facebook_master')!="")
echo stripslashes(get_option('facebook_master'));
}
add_action('wp_head','add_master');
function add_analytics()
{
if(get_option('google_analytics')!="")
{
echo '<script type="text/javascript">'."\n";
echo 'var _gaq = _gaq || [];'."\n";
echo '_gaq.push([\'_setAccount\', \'' . get_option('google_analytics') . '\']);'."\n";
echo '_gaq.push([\'_trackPageview\']);'."\n";
echo '_gaq.push([\'_trackPageLoadTime\']);'."\n";
echo '(function() {'."\n";
echo 'var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;'."\n";
echo 'ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';'."\n";
echo 'var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);'."\n";
echo ' })();'."\n";
echo '</script>'."\n";
}
if(get_option('quantcast_analytics')!="")
{
echo '<script type="text/javascript">'."\n";
echo '_qoptions={qacct:"' . get_option('quantcast_analytics') . '"};'."\n";
echo '</script>'."\n";
echo '<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>'."\n";
}
if(get_option('clicky_analytics')!="")
{
echo '<script src="http://static.getclicky.com/js" type="text/javascript"></script>'."\n";
echo '<script type="text/javascript">clicky.init('.get_option('clicky_analytics').');</script>'."\n";
}
if(get_option('compete_analytics')!="")
{
echo '<script type="text/javascript">'."\n";
echo '__compete_code = \'' .get_option('compete_analytics') . '\';'."\n";
echo '(function () { var s = document.createElement(\'script\'),d = document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0],t = \'https:\' == document.location.protocol ? \'https://c.compete.com/bootstrap/\' : \'http://c.compete.com/bootstrap/\'; s.src = t + __compete_code + \'/bootstrap.js\'; s.type = \'text/javascript\'; s.async = \'async\'; if (d) { d.appendChild(s); }}());'."\n";
echo '</script>'."\n";
}
if(get_option('sitemeter_analytics')!="")
{
echo '<script type="text/javascript" src="'.get_option('sitemeter_analytics').'"></script>'."\n";
}
}
add_action('wp_head','add_analytics');
function calling($text)
{
$strpos_fnc = get_option('casesens') ? 'strpos' : 'stripos';
$arrignorepost=array();
$arrignorepost=explode(',',get_option('ignorepost'));
if(get_option('lpost')!="")
{
$query=mysql_query("select * from wp_posts where post_type='post' AND post_status='publish'");
while($row=mysql_fetch_array($query)){
if ($strpos_fnc($text, $row['post_title']) !== false) {
if(in_array($row['post_title'],$arrignorepost)!=1 && in_array(strtolower($row['post_title']),$arrignorepost)!=1){
	$new_string = preg_replace("/[^a-zA-Z0-9\s]/", "", $row['post_title']);	
$name = preg_quote($new_string, '/');
$reg=get_option('casesens') ? '/(?!(?:[^<\[]+[>\]]|[^>\]]+<\/a>))\b($name)\b/msU' : '/(?!(?:[^<\[]+[>\]]|[^>\]]+<\/a>))\b($name)\b/imsU';					
$text = " $text ";
					$regexp=str_replace('$name', $name, $reg);
					$replace='<a title="$1" href="'.$row["guid"].'">$1</a>';
					$text = preg_replace($regexp, $replace, $text);
}
}
 }
}
if(get_option('lpage')!="")
{
$query=mysql_query("select * from wp_posts where post_type='page' AND post_status='publish'");
while($row=mysql_fetch_array($query)){
if ($strpos_fnc($text, $row['post_title']) !== false) {
if(in_array($row['post_title'],$arrignorepost)!=1 && in_array(strtolower($row['post_title']),$arrignorepost)!=1){

	$new_string = preg_replace("/[^a-zA-Z0-9\s]/", "", $row['post_title']);	
$name = preg_quote($new_string, '/');
$reg=get_option('casesens') ? '/(?!(?:[^<\[]+[>\]]|[^>\]]+<\/a>))\b($name)\b/msU' : '/(?!(?:[^<\[]+[>\]]|[^>\]]+<\/a>))\b($name)\b/imsU';					
$text = " $text ";
					$regexp=str_replace('$name', $name, $reg);
					$replace='<a title="$1" href="'.$row["guid"].'">$1</a>';

					$text = preg_replace($regexp, $replace, $text);

					}
					}
 }
}
if(get_option('lcat')!="")
{
$minusage=get_option('minusage');
$query=mysql_query("SELECT wp_terms.term_id, wp_terms.name
FROM wp_terms
LEFT JOIN wp_term_taxonomy
ON wp_terms.term_id=wp_term_taxonomy.term_id WHERE wp_term_taxonomy.taxonomy = 'category ' AND  wp_term_taxonomy.count>='".$minusage."'
 "
);

while($row=mysql_fetch_array($query)){
if ($strpos_fnc($text, $row['name']) !== false) {
	$new_string = preg_replace("/[^a-zA-Z0-9\s]/", "", $row['name']);	
$name = preg_quote($new_string, '/');
$category_id = get_cat_ID( $row['name'] );
$reg=get_option('casesens') ? '/(?!(?:[^<\[]+[>\]]|[^>\]]+<\/a>))\b($name)\b/msU' : '/(?!(?:[^<\[]+[>\]]|[^>\]]+<\/a>))\b($name)\b/imsU';					
$text = " $text ";
					$regexp=str_replace('$name', $name, $reg);
					$replace='<a title="$1" href="'.get_category_link($category_id).'">$1</a>';
					$text = preg_replace($regexp, $replace, $text);
}
 }
}
if(get_option('ltag')!="")
{
$minusage=get_option('minusage');
$query=mysql_query("SELECT wp_terms.term_id, wp_terms.name
FROM wp_terms
LEFT JOIN wp_term_taxonomy
ON wp_terms.term_id=wp_term_taxonomy.term_id WHERE wp_term_taxonomy.taxonomy = 'post_tag' AND  wp_term_taxonomy.count>='".$minusage."'
 "
);

while($row=mysql_fetch_array($query)){
if ($strpos_fnc($text, $row['name']) !== false) {
	$new_string = preg_replace("/[^a-zA-Z0-9\s]/", "", $row['name']);	
$name = preg_quote($new_string, '/');

$reg=get_option('casesens') ? '/(?!(?:[^<\[]+[>\]]|[^>\]]+<\/a>))\b($name)\b/msU' : '/(?!(?:[^<\[]+[>\]]|[^>\]]+<\/a>))\b($name)\b/imsU';					
$text = " $text ";
					$regexp=str_replace('$name', $name, $reg);
					$replace='<a title="$1" href="'.get_tag_link($row['term_id']).'">$1</a>';
					$text = preg_replace($regexp, $replace, $text);
}
 }
}
return $text;
}
function link_to_post($text)
{
global $post;
if ($post->post_type=='post' && get_option('post')!=""  || $post->post_type=='page' && get_option('page')!="")
{
if(get_option('onlysingle')!="")
{
if(is_single() || is_page()){
$text=calling($text);
}
}
else
{
$text=calling($text);
}
}
return $text;
}
function link_to_comment($text)
{
if(get_option('comment')!=""){
$text=calling($text);
}
return $text;
}
add_filter('the_content', 'link_to_post');
add_filter('comment_text', 'link_to_comment');
function seo_images($text){
if(get_option('alt')!="" || get_option('title')!=""){
$query=mysql_query("select * from wp_posts where  post_status='publish'");
while($row=mysql_fetch_array($query)){
preg_match_all("/\< *[img][^\>]*[.]*\>/i", $row['post_content'], $matches);
foreach($matches[0] as $match){
$subject=$match;
$doc = new DOMDocument;
$doc->loadHTML($subject);
$imgs = $doc->getElementsByTagName('img');
$alt=get_option('alt');

switch($alt)
{
case '%title':
$alt_val=$row['post_title'];
break;
case '%category':
$val=array();
foreach(get_the_category() as $cat){
if(in_array($cat->cat_name,$val)==false)
array_push($val,$cat->cat_name);
}
if($val!="")
$alt_val=implode(' ',$val);
break;
case '%tags':
$val=array();
if(get_the_tags()!=""){
foreach(get_the_tags() as $tag){
if(in_array($tag->name,$val)==false)
array_push($val,$tag->name);
}
}
if($val!="")
$alt_val=implode(' ',$val);
break;
case '%name':
$alt_val=basename($imgs->item(0)->getAttribute('src'),'.jpg');
break;
default:
$alt_val=$alt;
}
$title=get_option('title');
switch($title)
{
case '%title':
$title_val=$row['post_title'];
break;
case '%category':
$val=array();
foreach(get_the_category() as $cat){
if(in_array($cat->cat_name,$val)==false)
array_push($val,$cat->cat_name);
}
if($val!="")
$title_val=implode(' ',$val);
break;
case '%tags':
$val=array();
if(get_the_tags()!=""){
foreach(get_the_tags() as $tag){
if(in_array($tag->name,$val)==false)
array_push($val,$tag->name);
}
}
if($val!="")
$title_val=implode(' ',$val);
break;
case '%name':
$title_val=basename($imgs->item(0)->getAttribute('src'),'.jpg');
break;
default:
$title_val=$title;
}
if($imgs->item(0)->getAttribute('title')=="" && $imgs->item(0)->getAttribute('alt')=="")
$text=str_replace($match,'<img class="'.$imgs->item(0)->getAttribute('class').'" width="'.$imgs->item(0)->getAttribute('width').'"  height="'.$imgs->item(0)->getAttribute('height').'" src="'.$imgs->item(0)->getAttribute('src').'" title="'.$title_val.'" alt="'.$alt_val.'">',$text);
if($imgs->item(0)->getAttribute('title')!="" && $imgs->item(0)->getAttribute('alt')!="")
{
if(get_option('replace_alt')=="true" && get_option('replace_title')!="true")
{ 
$text=str_replace($match,'<img class="'.$imgs->item(0)->getAttribute('class').'" width="'.$imgs->item(0)->getAttribute('width').'"  height="'.$imgs->item(0)->getAttribute('height').'" src="'.$imgs->item(0)->getAttribute('src').'" title="'.$imgs->item(0)->getAttribute('title').'" alt="'.$alt_val.'">',$text);
}
if(get_option('replace_title')=="true" && get_option('replace_alt')!="true")
{
$text=str_replace($match,'<img class="'.$imgs->item(0)->getAttribute('class').'" width="'.$imgs->item(0)->getAttribute('width').'"  height="'.$imgs->item(0)->getAttribute('height').'" src="'.$imgs->item(0)->getAttribute('src').'" title="'.$title_val.'" alt="'.$imgs->item(0)->getAttribute('alt').'">',$text);
}
if((get_option('replace_alt')=="true") && (get_option('replace_title')=="true"))
{
$text=str_replace($match,'<img class="'.$imgs->item(0)->getAttribute('class').'" width="'.$imgs->item(0)->getAttribute('width').'"  height="'.$imgs->item(0)->getAttribute('height').'" src="'.$imgs->item(0)->getAttribute('src').'" title="'.$title_val.'" alt="'.$alt_val.'">',$text);
}
}
if($imgs->item(0)->getAttribute('title')=="" && $imgs->item(0)->getAttribute('alt')!="" && get_option('replace_alt')=="true")
$text=str_replace($match,'<img class="'.$imgs->item(0)->getAttribute('class').'" width="'.$imgs->item(0)->getAttribute('width').'"  height="'.$imgs->item(0)->getAttribute('height').'" src="'.$imgs->item(0)->getAttribute('src').'" title="'.$title_val.'" alt="'.$alt_val.'">',$text);
if($imgs->item(0)->getAttribute('title')=="" && $imgs->item(0)->getAttribute('alt')!="" &&  get_option('replace_alt')!="true")
$text=str_replace($match,'<img class="'.$imgs->item(0)->getAttribute('class').'" width="'.$imgs->item(0)->getAttribute('width').'"  height="'.$imgs->item(0)->getAttribute('height').'" src="'.$imgs->item(0)->getAttribute('src').'" title="'.$title_val.'" alt="'.$imgs->item(0)->getAttribute('alt').'">',$text);
if($imgs->item(0)->getAttribute('alt')=="" && $imgs->item(0)->getAttribute('title')!="" && get_option('replace_title')=='true')
$text=str_replace($match,'<img class="'.$imgs->item(0)->getAttribute('class').'" width="'.$imgs->item(0)->getAttribute('width').'"  height="'.$imgs->item(0)->getAttribute('height').'" src="'.$imgs->item(0)->getAttribute('src').'" title="'.$title_val.'" alt="'.$alt_val.'">',$text);
if($imgs->item(0)->getAttribute('alt')=="" && $imgs->item(0)->getAttribute('title')!="" && get_option('replace_title')!='true')
$text=str_replace($match,'<img class="'.$imgs->item(0)->getAttribute('class').'" width="'.$imgs->item(0)->getAttribute('width').'"  height="'.$imgs->item(0)->getAttribute('height').'" src="'.$imgs->item(0)->getAttribute('src').'" title="'.$imgs->item(0)->getAttribute('title').'" alt="'.$alt_val.'">',$text);
}
}
}
return $text;
}
add_filter('the_content', 'seo_images');
function ContactForm() {

$content='<form action="" method="post">

<p><label for="name">Your Name (required)</label><br/>

<input type="text" name="urname" size="40" value="'.$_POST['urname'].'"><label id="error1" style="display:none;border:1px solid red;">Please Fill Required field.</label></p>

<p><label for="email" >Your Email (required)</label><br/>

<input type="text" name="uremail" size="40" value="'.$_POST['uremail'].'"><label id="error2" style="display:none;border:1px solid red;">Please Fill Required field.</label>
<label id="error3" style="display:none;border:1px solid red;">Email format is invalid.</label></p>

<p><label for="subject">Subject</label><br/>

<input type="text" name="subject" size="40"></p>

<p><label for="message">Your Message</label><br/>

<textarea rows="10" cols="40" name="message"></textarea></p>

<p><input type="submit" name="send" value="send"></p>

<p id="success" style="display:none;border:solid 2px  #398F14;">
Your Message was sent successfully.Thanks.</p>
<p id="mailf" style="display:none;border:solid 2px  #398F14;">
Failed to send your message. Please try later or contact the administrator by another method..</p>
<p id="failure" style="display:none;border:solid 2px  #F7E700;">
Validation Error Occurs.Please fill Required fields.</p>

</form>';

return $content;

}

add_shortcode('ContactForm', 'ContactForm');

function success()
{

echo '<script type="text/javascript">

                            jQuery(document).ready(function(jQuery) {

                                   jQuery("#success").css("display","block");                                    

                            });

                    </script>';
				}

if(isset($_POST['send']))

{

$to =get_option('admin_email');

$subject = $_POST['subject'];

$message = $_POST['message'];

$headers = 'From: '.$_POST['uremail'];
 if($_POST['urname']!="" && $_POST['uremail']!="" && eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['uremail']))
$q=mail($to, $subject, $message,$headers);

if($q)

{
add_action('wp_head','success');
}

else
{

remove_action('wp_head','success');
}

function failure()
{
if($_POST['urname']=="" && $_POST['uremail']=="" ){
echo '<script type="text/javascript">

                            jQuery(document).ready(function(jQuery) {

                                   jQuery("#error1").css("display","block"); 
jQuery("#error2").css("display","block");                                    
  jQuery("#failure").css("display","block"); 
                            });

                    </script>';
}
if($_POST['urname']=="" && $_POST['uremail']!="" )
{
echo '<script type="text/javascript">

                            jQuery(document).ready(function(jQuery) {

                                   jQuery("#error1").css("display","block"); 
                                    jQuery("#failure").css("display","block");  

                            });

                    </script>';
}
if($_POST['urname']!="" && $_POST['uremail']=="" )
{
echo '<script type="text/javascript">

                            jQuery(document).ready(function(jQuery) {

                                   jQuery("#error2").css("display","block"); 
                                    jQuery("#failure").css("display","block");  

                            });

                    </script>';
}
if($_POST['urname']!="" && $_POST['uremail']!="" && !eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['uremail']) )
{

echo '<script type="text/javascript">

                            jQuery(document).ready(function(jQuery) {

                                   jQuery("#error3").css("display","block"); 
                                  jQuery("#failure").css("display","block");    

                            });

                    </script>';
					
}
if($_POST['urname']!="" && $_POST['uremail']!="" && eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['uremail']) && !($q))
{

echo '<script type="text/javascript">

                            jQuery(document).ready(function(jQuery) {

                                   
                                  jQuery("#mailf").css("display","block");    

                            });

                    </script>';
					
}

}

if($_POST['uremail']=="" && $_POST['urname']=="")
{
add_action('wp_head','failure');
}
else if($_POST['uremail']!="" && $_POST['urname']=="")
{
add_action('wp_head','failure');
}
else if($_POST['uremail']=="" && $_POST['urname']!="")
{
add_action('wp_head','failure');
}
else if($_POST['uremail']!="" && $_POST['urname']!="" && !eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['uremail']))
{
add_action('wp_head','failure');
}
else if($_POST['urname']!="" && $_POST['uremail']!="" && eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['uremail']) && !($q))
{

add_action('wp_head','failure');
					
}
else
{
remove_action('wp_head','failure');
}
}

?>