 <div class="main">
	<div class="firstDiv">
	  <h2 class="heading-custom">Login Page Settings</h2>
	  <form action='' method="post" id="login_form">
	  <table class="widefat" style="width:100%;">
	 
	  <tr><td><label for="change_login_logo" title="change login page logo">Change WordPress Login Page Logo<label></td>
	 
	 <td><input type="text"  id="change_login_logo" size="42" name="change_login_logo" value="<?php echo get_option('change_login_logo');?>">
	 <input type="button" class="upload_button" value="upload" rel="change_login_logo"></td></tr>
	  <tr><td><label for="change_login_logo" title="change hyperlink on login image">Change Hyperlink on WordPress Login Logo<label></td>
	 
	 <td><input type="text" size="42" name="change_hyperlink" value="<?php echo get_option('change_hyperlink');?>"></td></tr>
	  <tr><td><label for="hide_login_logo" title="Hide Logo on login page">Hide WordPress Login Page Logo</label></td>
	<td><input type="checkbox" name="hide_login_logo" value="true" <?php if(get_option('hide_login_logo')=='true'){?>checked="checked" <?php }?>></td></tr>
	  <tr><td><input type="submit" name="save_login" value="save"></td></tr>
	  </table>
	  </form>
	  </div>
	  <?php include("donate.php");?>
	  <?php
	  if(isset($_POST['save_login']))
{
update_option('change_blog_text',$_POST['change_blog_text']);
update_option('change_login_logo',$_POST['change_login_logo']);
update_option('change_hyperlink',$_POST['change_hyperlink']);
update_option('hide_login_logo',$_POST['hide_login_logo']);
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#login_form").submit();                                   
                            });
                    </script>';
echo '<div id="message" class="updated fade"><p><strong> Settings saved.</strong></p></div>';
}
?>
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
	