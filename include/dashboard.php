    <div class="main">
	<div class="firstDiv">
     <h2 class="heading-custom">Dashboard Settings Page</h2>
	 <form action="" method="post" id="dashboard_form">
	 <table class="widefat" style="width:100%;">
	 <tr><td><label for="remove_heading_icon" title="Remove dashboard heading icon">Hide Dashboard heading icon<label></td>
	 <td><input type="checkbox" name="remove_heading_icon" value="true" <?php if(get_option('remove_heading_icon')=='true'){?>checked="checked"<?php }?>></td></tr>
	 <tr><td><label for="change_heading_text" title="Rename dashboard heading text">Rename Dashboard Heading Text<label></td>
	 
	 <td><input type="text"  size="42" name="change_header_text" value="<?php echo get_option('change_header_text');?>"></td></tr>
	
	  <tr><td><label for="change_dashboard_logo" title="Change dashboard logo">Change Dashboard Logo<label></td>
	 
	 <td><input type="text"  size="42" id="change_dashboard_logo" name="change_dashboard_logo" value="<?php echo get_option('change_dashboard_logo');?>">
	 <input type="button" class="upload_button" value="upload" rel="change_dashboard_logo"></td></tr>
	<tr><td><label for="hide_content_logo" title="Remove dashboard content logo">Hide Dashboard Content Logo</label></td>
	<td><input type="checkbox" name="hide_content_logo" value="true" <?php if(get_option('hide_content_logo')=='true'){?>checked="checked" <?php }?>></td></tr>
    <tr><td><label for="change_dashboard_content_logo" title="change dashboard content logo">Change Dashboard Content Logo<label></td>
	 
	 <td><input type="text"  size="42" id="change_dashboard_content_logo" name="change_dashboard_content_logo" value="<?php echo get_option('change_dashboard_content_logo');?>">
	<input type="button" class="upload_button" value="upload" rel="change_dashboard_content_logo"></td></tr>
   <tr><td><label for="change_welcome_panel_heading" title="change welcome panel heading">Change Welcome Panel Heading</label></td>
   <td><input type="text"  size="42" name="change_welcome_panel_heading" value="<?php echo get_option('change_welcome_panel_heading');?>"></td></tr>
	<tr><td><label for="change_welcome_panel_description" title="Change welcome panel description">Change Welcome Panel description</label></td>
   <td><textarea name="change_welcome_panel_description" rows="5" cols="40"><?php echo get_option('change_welcome_panel_description');?></textarea></td></tr>
	<tr><td><label for="hide_welcome_panel_boxes" title="Remove three boxes of dashboard">Hide Boxes</label></td>
	<td><input type="checkbox" name="hide_welcome_panel_boxes" value="true" <?php if(get_option('hide_welcome_panel_boxes')=='true'){?>checked="checked" <?php }?>></td></tr>	
	<tr><td><label for="hide_right_now" title="Remove right now widget">Hide "Right Now" Widget</label></td>
	<td><input type="checkbox" name="hide_right_now" value="true" <?php if(get_option('hide_right_now')=='true'){?>checked="checked"><?php }?></td></tr>
	<tr><td><label for="hide_recent_comments" title="Remove recent comments widget">Hide "Recent Comments" Widget</label></td>
	<td><input type="checkbox" name="hide_recent_comments" value="true" <?php if(get_option('hide_recent_comments')=='true'){?>checked="checked"><?php }?></td></tr>
	<tr><td><label for="hide_incoming_links" title="Remove incoming link widget">Hide "Incomings Links" Widget</label></td>
	<td><input type="checkbox" name="hide_incoming_links" value="true" <?php if(get_option('hide_incoming_links')=='true'){?>checked="checked"><?php }?></td></tr>
	<tr><td><label for="hide_plugins" title="Remove plugins widget">Hide "Plugins" Widget</label></td>
	<td><input type="checkbox" name="hide_plugins" value="true" <?php if(get_option('hide_plugins')=='true'){?>checked="checked"><?php }?></td></tr>
		<tr><td><label for="hide_quickpress" title="Remove quickpress widget">Hide "Quickpress" Widget</label></td>
	<td><input type="checkbox" name="hide_quickpress" value="true" <?php if(get_option('hide_quickpress')=='true'){?>checked="checked"><?php }?></td></tr>
	<tr><td><label for="hide_recent_draft" title="Remove recent drafts widget">Hide "Recent Drafts" Widget</label></td>
	<td><input type="checkbox" name="hide_recent_draft" value="true" <?php if(get_option('hide_recent_draft')=='true'){?>checked="checked"><?php }?></td></tr>
	<tr><td><label for="hide_wordpress_blog" title="Remove wordpress blog widget">Hide "Wordpress Blog" Widget</label></td>
	<td><input type="checkbox" name="hide_wordpress_blog" value="true" <?php if(get_option('hide_wordpress_blog')=='true'){?>checked="checked"><?php }?></td></tr>
	<tr><td><label for="hide_wordpress_news" title="Remove other wordpress news widget">Hide "Other Wordpress News" Widget</label></td>
	<td><input type="checkbox" name="hide_wordpress_news" value="true" <?php if(get_option('hide_wordpress_news')=='true'){?>checked="checked"><?php }?></td></tr>
	<tr><td><input type="submit" name="save_dashboard" value="save"></td></tr>
	 </table>
	 </form>
      </div>
	<?php include("donate.php");?>
	  
      <?php
	  if(isset($_POST['save_dashboard']))
	{
update_option('remove_heading_icon',$_POST['remove_heading_icon']);
update_option('change_header_text',$_POST['change_header_text']);
update_option('change_dashboard_logo',$_POST['change_dashboard_logo']);
update_option('hide_content_logo',$_POST['hide_content_logo']);
update_option('change_dashboard_content_logo',$_POST['change_dashboard_content_logo']);
update_option('hide_welcome_panel_boxes',$_POST['hide_welcome_panel_boxes']);
update_option('change_welcome_panel_heading',$_POST['change_welcome_panel_heading']);
update_option('change_welcome_panel_description',$_POST['change_welcome_panel_description']);
update_option('hide_right_now',$_POST['hide_right_now']);
update_option('hide_recent_comments',$_POST['hide_recent_comments']);
update_option('hide_incoming_links',$_POST['hide_incoming_links']);
update_option('hide_plugins',$_POST['hide_plugins']);
update_option('hide_quickpress',$_POST['hide_quickpress']);
update_option('hide_recent_draft',$_POST['hide_recent_draft']);
update_option('hide_wordpress_blog',$_POST['hide_wordpress_blog']);
update_option('hide_wordpress_news',$_POST['hide_wordpress_news']);
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#dashboard_form").submit();                                   
                            });
                    </script>';
echo '<div id="message" class="updated fade"><p><strong> Settings saved.</strong></p></div>';
}?>
<?php
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_enqueue_script('my-upload');
wp_enqueue_style('thickbox');	
?>
	<script type="text/javascript">
 jQuery(document).ready(function() {
 
jQuery('.upload_button').click(function() {
formfield = jQuery(this).attr('rel');
tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
return false;
});
 
window.send_to_editor = function(html) {
imgurl = jQuery('img',html).attr('src');
jQuery('#'+formfield).val(imgurl);
tb_remove();
}
 
});
</script>  
	