     <div class="main">
	<div class="firstDiv">
     <h2 class="heading-custom">Admin Footer Settings Page</h2>
     <form method="post" action="" id="adminfooter_form">
   <table class="widefat" style="width:100%;">
<tr><td><label for="hide_footer_completely" title="Remove footer completely">Hide Footer Completely</label></td><td><input type="checkbox" name="hide_footer_completely" value="true" <?php if(get_option('hide_footer_completely')=='true'){?>checked="checked"<?php }?>></td></tr>
<tr><td><label for="hide_footer_left" title="Remove footer text only">Hide Footer Text</label></td><td><input type="checkbox" name="hide_footer_left" value="true" <?php if(get_option('hide_footer_left')=='true'){?>checked="checked"<?php }?>></td></tr>
<tr><td><label for="change_footer_left" title="Change footer text">Change Footer Text</label></td><td><textarea rows="5" name="change_footer_left" cols="40"><?php echo get_option('change_footer_left');?></textarea></td></tr>
<tr><td><label for="hide_version_text" title="Remove version text">Hide Version Text</label></td><td><input type="checkbox" name="hide_version_text" value="true" <?php if(get_option('hide_version_text')=='true'){?>checked="checked"<?php }?> ></td></tr>
<tr><td><label for="change_version_text" title="change version text">Change Version Text</label></td><td><textarea rows="5" name="change_version_text" cols="40"><?php echo get_option('change_version_text');?></textarea></td></tr>
<tr><td><input type="submit" name="save_footer" value="Save"></td></tr> 
</table>
</form>
	  
	  
	  </div>
	  <?php include("donate.php");?>
	  <?php
	  if(isset($_POST['save_footer']))
{

update_option('hide_footer_completely',$_POST['hide_footer_completely']);
update_option('hide_footer_left',$_POST['hide_footer_left']);
update_option('change_footer_left',$_POST['change_footer_left']);
update_option('hide_version_text',$_POST['hide_version_text']);
update_option('change_version_text',$_POST['change_version_text']);
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#adminfooter_form").submit();                                   
                            });
                    </script>';
echo '<div id="message" class="updated fade"><p><strong> Settings saved.</strong></p></div>';
}
	  ?>