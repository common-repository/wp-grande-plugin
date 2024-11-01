 <div class="main">
	<div class="firstDiv">
<form  method="post"  action=""  id="smartlink">
<h1>SEO Link Manager</h1>
<p>SEO Link Manager can automatically link keywords and phrases in your posts and comments with corresponding posts,<br/> pages, categories and tags on your blog..</p>
<h3>Internal links</h3>
<p>SEO Link Manager can process your posts, pages and comments in search for keywords to automatically interlink.</p>
<input type="checkbox" name="post" value="true" <?php checked(get_option('post'),'true');?>>  <label for="post"> Posts</label><br/><br/>


<input type="checkbox" name="page" value="true" <?php checked(get_option('page'),'true');?>> 
<label for="page"> Pages</label><br/><br/>

<input type="checkbox" name="comment" value="true"  <?php checked(get_option('comment'),'true');?>>
<label for="comment"> Comments</label>
<h3>Target</h3>
<p>The targets SEO Link Manager should consider. The match will be based on post/page title or category/tag name, case insensitive.</p>
<input type="checkbox" name="lpost" value="true" <?php checked(get_option('lpost'),'true');?>>  <label for="lpost"> Posts</label><br/>
<input type="checkbox" name="lpage" value="true" <?php checked(get_option('lpage'),'true');?>><label for="lpage"> Pages</label><br/>
<input type="checkbox" name="lcat" value="true" <?php checked(get_option('lcat'),'true');?>><label for="lcat"> Categories</label><br/>
<input type="checkbox" name="ltag" value="true" <?php checked(get_option('ltag'),'true');?>><label for="ltag"> Tag</label><br/>
<br>
Link tags and categories that have been used at least
<input type="text" value="<?php if(get_option('minusage')!="") echo get_option('minusage'); else echo 1;?>" size="2" name="minusage" >
times. 
<h3>Settings</h3>
<input type="checkbox" name="onlysingle" value="true" <?php checked(get_option('onlysingle'),'true');?>> Process only single posts and pages <br><br>
<input type="checkbox" name="casesens" value="true" <?php checked(get_option('casesens'),'true');?>><label>Case Sensitive Matching</label><br/>
<h3>Ignore Post and pages</h3>
<p>You may wish to exclude automatic linking on certain posts or pages.Enter post or page title Seperate them by comma.</p>
<input type="text" value="<?php if(get_option('ignorepost')!="") echo get_option('ignorepost'); else echo 'contact';?>" name="ignorepost" size="90"><br/><br/>
<h1>SEO Image Optimizer</h1>
<p>SEO Image Optimizer automatically adds alt and title attributes to all your images in all your posts specified by parameters below.
 </p>You can enter any text in the field Below.<br/>
 <ul>
<li>%title - replaces post title</li>
<li>%name - replaces image file name (without extension)</li>
<li>%category - replaces post category</li>
<li>%tags - replaces post tags</li>
								</ul>
<h3>Image Options</h3>
<label for="ALT">ALT Attribute      <input type="text" name="alt" value="<?php if(get_option('alt')!=="") echo get_option('alt'); else echo '%title';?>"><br/>
<label for="Title">Title Attribute <input type="text" name="title" value="<?php if(get_option('title')!=="") echo get_option('title'); else echo '%tags';?>"><br/>
<input type="checkbox" name="replace_alt" value="true" <?php checked(get_option('replace_alt'),'true');?>> <label for="replace_alt">Replace default image Alt tag</label><br/>
<input type="checkbox" name="replace_title" value="true" <?php checked(get_option('replace_title'),'true');?>> <label for="replace_title">Replace default image Title tag</label><br/>
<input type="submit" name="save_link" value="save">
			</form>
			</div>
			<?php include("donate.php");?>
			<?php
	if(isset($_POST['save_link']))
	{
	update_option('post',$_POST['post']);
	
	update_option('page',$_POST['page']);
	
	update_option('comment',$_POST['comment']);
	update_option('lpost',$_POST['lpost']);
	update_option('lpage',$_POST['lpage']);
	update_option('lcat',$_POST['lcat']);
	update_option('ltag',$_POST['ltag']);
	update_option('casesens',$_POST['casesens']);
	update_option('minusage',$_POST['minusage']);
	update_option('onlysingle',$_POST['onlysingle']);
	update_option('ignorepost',$_POST['ignorepost']);
	update_option('alt',$_POST['alt']);
	update_option('title',$_POST['title']);
	update_option('replace_alt',$_POST['replace_alt']);
	update_option('replace_title',$_POST['replace_title']);
	echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#smartlink").submit();                                   
                            });
                    </script>';}
					?>	