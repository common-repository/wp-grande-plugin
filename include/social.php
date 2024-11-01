 <div class="main">
	<div class="firstDiv">
<form method="post" action="" id="social">
<h2><span>Display Pages For Social Share Buttons</span></h2>
			<div class="inside">
				 <p>Select the pages where you wish the button panel to appear:</p>
				<table class="widefat" style="width:100%;">
				<tr><td><input type="checkbox" name="option_home" value="true" <?php checked( get_option('option_home'), 'true'); ?>></td>
				<td>Home</td></tr>
			    <tr><td><input type="checkbox" name="option_page" value="true" <?php checked( get_option('option_page'), 'true'); ?>></td>
				<td>Page</td></tr>
				<tr><td><input type="checkbox" name="option_post" value="true" <?php checked( get_option('option_post'), 'true'); ?>></td>
				<td>Post</td></tr>
				<tr><td><input type="checkbox" name="option_category" value="true" <?php checked( get_option('option_category'), 'true'); ?> ></td>
				<td>Category</td></tr>
				<tr><td><input type="checkbox" name="option_tag" value="true" <?php checked( get_option('option_tag'), 'true'); ?>></td>
				<td>Tag</td></tr>
				<tr><td><input type="checkbox" name="option_archive" value="true" <?php checked( get_option('option_archive'), 'true'); ?>></td>
				<td>Archive</td></tr>
				</table>
			</div>	
			<div>
			<h2><span>Social Share Buttons</span></h2>
			<table class="widefat" style="width:100%;">
			<th>Button Name</th><th>Type</th>
			<tr><td><input type="checkbox" name="twitter" value="true" <?php checked( get_option('twitter'), 'true'); ?>>
		    Twitter</td><td>
			<select name="option_twitter">
			<option value='horizontal' <?php selected( get_option('twitter_type'), 'horizontal'); ?> >Horizontal + Count</option>
			<option value='vertical' <?php selected( get_option('twitter_type'), 'vertical'); ?>>Vertical + Count</option>
			<option value='none' <?php selected( get_option('twitter_type'), 'none'); ?>  >Standard</option>
						</select></td></tr>
			<tr><td><input type="checkbox" name="facebook" value="true" <?php checked( get_option('facebook'), 'true'); ?>>
		    Facebook</td><td>
			<select name="option_facebook">
			<option value='standard' <?php selected( get_option('facebook_type'), 'standard'); ?> >Standard</option>
			<option value='button_count' <?php selected( get_option('facebook_type'), 'button_count'); ?>>Button Count</option>
			<option value='box_count' <?php selected( get_option('facebook_type'), 'box_count'); ?>  >Box Count</option>
						</select></td></tr>
						
			<tr><td><input type="checkbox" name="googleplus" value="true" <?php checked( get_option('googleplus'), 'true'); ?>>
		    Google Plus(+1)</td><td>
			<select name="option_googleplus">
			<option value='small' <?php selected(  get_option('googleplus_type'), 'small'); ?> >Small</option>
							
							<option value='medium' <?php selected(  get_option('googleplus_type'), 'medium'); ?> >Medium</option>
						
							<option value='standard' <?php selected(  get_option('googleplus_type'), 'standard'); ?> >Standard</option>
				
							<option value='tall' <?php selected(  get_option('googleplus_type'), 'tall'); ?> >Tall</option>
						</select>
						
			<select name="option_annotation">
			<option value='none' <?php selected(get_option('annotation_type'), 'none'); ?> >None</option>
			<option value='bubble' <?php selected(get_option('annotation_type'), 'bubble'); ?> >Bubble</option>
			<option value='inline' <?php selected(get_option('annotation_type'), 'inline'); ?> >Inline</option>
							
						</select></td></tr>
			<tr><td><input type="checkbox" name="linkedin" value="true" <?php checked( get_option('linkedin'), 'true'); ?>>
		    Linkedin</td><td>
			<select name="option_linkedin">
			<option value='right' <?php selected( get_option('linkedin_type'), 'right'); ?> >Horizontal</option>
			<option value='top' <?php selected( get_option('linkedin_type'), 'top'); ?> >Vertical</option>
			<option value='none' <?php selected( get_option('linkedin_type'), 'none'); ?>  >None</option>
						</select></td></tr>
			<!--<tr><td><input type="checkbox" name="stumbleupon" value="true" <?php checked( get_option('stumbleupon'), 'true'); ?>>
		    Stumbleupon</td><td>
			<select name="option_stumbleupon">
			<option value='1' <?php //selected( get_option('stumbleupon_type'), '1'); ?> >Horizontal + Count</option>
			<option value='2' <?php //selected(get_option('stumbleupon_type'), '2'); ?> >Medium + Count</option>
			<option value='3' <?php //selected( get_option('stumbleupon_type'), '3'); ?> >Small + Count</option>
			<option value='4' <?php //selected(get_option('stumbleupon_type'), '4'); ?> >Small</option>
		    <option value='5' <?php //selected(get_option('stumbleupon_type'), '5'); ?> >Vertical + Count</option>
			</select></td></tr>	
<tr><td><input type="checkbox" name="digg" value="true" <?php checked( get_option('digg'), 'true'); ?>>
		    Digg</td><td>
			<select name="option_digg">
			<option value='DiggMedium' <?php//selected( get_option('digg_type'), 'DiggMedium'); ?> >Medium</option>
			<option value='DiggCompact' <?php //selected( get_option('digg_type'), 'DiggCompact'); ?> >Compact</option>
			<option value='DiggIcon' <?php //selected( get_option('digg_type'), 'DiggIcon'); ?> >Icon</option>
			</select></td></tr>	-->	


<tr><td><input type="checkbox" name="delicious" value="true" <?php checked( get_option('delicious'), 'true'); ?>>
		    Delicious</td><td>
			<select name="option_delicious">
			<option value='wide' <?php selected(get_option('delicious_type'), 'wide'); ?> >Horizontal</option>
			<option value='tall' <?php selected( get_option('delicious_type'), 'tall'); ?> >Vertical</option>
			</select></td></tr>

<tr><td><input type="checkbox" name="reddit" value="true" <?php checked( get_option('reddit'), 'true'); ?>>
		    Reddit</td><td>
			<select name="option_reddit">
			<option value='horizontal' <?php selected( get_option('reddit_type'), 'horizontal'); ?> >Horizontal</option>
			<option value='vertical' <?php selected(  get_option('reddit_type'), 'vertical'); ?> >Vertical</option>
			<option value='none' <?php selected( get_option('reddit_type'), 'none'); ?> >No Count</option>
			</select></td></tr>	
<tr><td><input type="checkbox" name="sphinn" value="true" <?php checked( get_option('sphinn'), 'true'); ?>>
		    Sphinn</td><td>
			<select name="option_sphinn">
			<option value='lg' <?php selected( get_option('sphinn_type'), 'lg'); ?> >Large</option>
			<option value='small' <?php selected(  get_option('sphinn_type'), 'small'); ?> >Small</option>
			
			</select></td></tr>	

</td></tr>			
<!--<tr><td><input type="checkbox" name="pinit" value="true" <?php //checked( get_option('pinit'), 'true'); ?>>
		    Pinit</td><td>
			<select name="option_pinit">
			<option value='horizontal' <?php //selected( get_option('pinit_type'), 'horizontal'); ?> >Horizontal</option>
			<option value='vertical' <?php //selected( get_option('pinit_type'), 'vertical'); ?> >Vertical</option>
			<option value='none' <?php //selected(get_option('pinit_type'), 'none'); ?> >No Count</option>
			</select></td></tr>	
<tr><td><input type="checkbox" name="buffer" value="true" <?php checked( get_option('buffer'), 'true'); ?>>
		    Buffer</td><td>
			<select name="option_buffer">
			<option value='horizontal' <?php //selected( get_option('buffer_type'), 'horizontal'); ?> >Horizontal</option>
			<option value='vertical' <?php //selected( get_option('buffer_type'), 'vertical'); ?> >Vertical</option>
			<option value='none' <?php //selected(get_option('buffer_type'), 'none'); ?> >No Count</option>
			</select></td></tr>	-->			
			<tr><td><input type="submit" name="save_social" value="save"></td></tr>
			</table>
			</div>
			</form>
			</div>
			<?php include("donate.php");?>
			<?php if(isset($_POST['save_social']))
			{
			update_option('twitter',$_POST['twitter']);
			update_option('twitter_type',$_POST['option_twitter']);
			update_option('facebook',$_POST['facebook']);
			update_option('facebook_type',$_POST['option_facebook']);
			update_option('googleplus',$_POST['googleplus']);
			update_option('googleplus_type',$_POST['option_googleplus']);
		    update_option('annotation_type',$_POST['option_annotation']);
			update_option('linkedin',$_POST['linkedin']);
			update_option('linkedin_type',$_POST['option_linkedin']);
			/*update_option('stumbleupon',$_POST['stumbleupon']);
			update_option('stumbleupon_type',$_POST['option_stumbleupon']);
			update_option('digg',$_POST['digg']);
			update_option('digg_type',$_POST['option_digg']);*/
			update_option('delicious',$_POST['delicious']);
			update_option('delicious_type',$_POST['option_delicious']);
			/*update_option('pinit',$_POST['pinit']);
			update_option('pinit_type',$_POST['option_pinit']);
			update_option('buffer',$_POST['buffer']);
			update_option('buffer_type',$_POST['option_pinit']);*/
			update_option('reddit',$_POST['reddit']);
			update_option('reddit_type',$_POST['option_reddit']);
			update_option('sphinn',$_POST['sphinn']);
			update_option('sphinn_type',$_POST['option_sphinn']);
			update_option('option_post',$_POST['option_post']);
			update_option('option_home',$_POST['option_home']);
			update_option('option_page',$_POST['option_page']);
			update_option('option_category',$_POST['option_category']);
			update_option('option_tag',$_POST['option_tag']);
			update_option('option_archive',$_POST['option_archive']);
			echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#social").submit();                                   
                            });
                    </script>';}
			?>