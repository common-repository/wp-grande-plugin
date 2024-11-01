<div class="main">
	<div class="firstDiv">
      <h2 class="heading-custom">Admin Bar Settings</h2>
	 <form action='' method="post" id="adminbar_form">
	 <table class="widefat" style="width:100%;">
	  <tr><td><label title="Remove admin tool bar">Hide Admin bar Completely</label></td>
	  <td><input type="checkbox" name="remove_bar_completely" value="true" <?php if(get_option('remove_bar_completely')=='true'){ ?>checked="checked"<?php }?>></td></tr>
	 
	  
	  <tr><td><label title="Remove Wordpress logo">Hide wordpress logo</label></td>
	  <td><input type="checkbox" name="remove_logo_completely" value="true" <?php if(get_option('remove_logo_completely')=='true'){?>checked="checked"<?php }?>></td></tr>
	  <tr><td><label title="Remove screen options">Hide "Screen" Options</label></td>
	  <td><input type="checkbox" name="remove_screen_options" value="true" <?php if(get_option('remove_screen_options')=='true'){?>checked="checked"<?php }?>></td></tr>
	  <tr><td><label title="Remove help options">Hide "Help" Options</label></td>
	  <td><input type="checkbox" name="remove_help_options" value="true" <?php if(get_option('remove_help_options')=='true'){?>checked="checked"<?php }?>></td></tr>
	  
	  <tr><td><input type="submit" name="save_admin" value="Save"></td></tr>
	  </table>
	  </form>
      </div>
	  <?php include("donate.php");?>
    <?php
	if(isset($_POST['save_admin']))
{
update_option('remove_bar_completely',$_POST['remove_bar_completely']);
update_option('remove_logo_completely',$_POST['remove_logo_completely']);
update_option('remove_screen_options',$_POST['remove_screen_options']);
update_option('remove_help_options',$_POST['remove_help_options']);
echo  '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#adminbar_form").submit();                                   
                            });
                    </script>';
echo '<div id="message" class="updated fade"><p><strong> Settings saved.</strong></p></div>';
}
	?>