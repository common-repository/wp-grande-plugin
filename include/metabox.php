<?php
global $wp_meta_boxes;
$postboxes = array(
		array('postexcerpt','Excerpt'),		
		array('trackbacksdiv','Send Trackbacks'),  	
		array('commentstatusdiv','Discussion'),	
		array('commentsdiv','Comments'),
		array('slugdiv','Slug'),			
		array('postcustom','Custom Fields'),	
		array('tagsdiv-post_tag','Tags'),
		array('categorydiv','Categories'),
		array('authordiv','Author'),
		array('submitdiv','Publish'),
		array('revisionsdiv','Revisions'),
		array('postimagediv','Featured Image'),
		array('formatdiv','Format')
	);
	if ($wp_meta_boxes['post']) {
			foreach($wp_meta_boxes['post'] as $context)
				foreach($context as $priority)
					foreach($priority as $box)
						array_push($postboxes,array($box['id'],$box['title']));
		}
		$pageboxes = array(
		array('pageparentdiv','Attributes'),
		array('postcustom','Custom Fields'),
		array('commentstatusdiv','Discussion'),
		array('commentsdiv','Comments'),
		array('slugdiv','Slug'),
		array('authordiv','Author'),
		array('submitdiv','Publish'),
		array('revisionsdiv','Revisions'),
		array('postimagediv','Featured Image')
	);
	if ($wp_meta_boxes['page']) {
			foreach($wp_meta_boxes['page'] as $context)
				foreach($context as $priority)
					foreach($priority as $box)
						array_push($pageboxes,array($box['id'],$box['title']));
		}
		?>
		 <div class="main">
	<div class="firstDiv"><h1>Hide "Screen Options" Metaboxes from Posts</h1>
		<form action="" method="post" id="meta">
		<table class="widefat" style="width:100%;">
		<th>MetaBoxName</th><th>Remove?</th><?php
		foreach($postboxes as $p)
		{
		if($p[1]!=""){
		?>
		<tr><td><?php echo $p[1];?></td>
		<td><input type="checkbox" name="post-<?php echo $p[0]; ?>" id="post-<?php echo $p[0]; ?>" value="<?php echo $p[0]; ?>"></td></tr>
		<?php
		
		}
		}?>
		</table>
		<h1>Hide "Screen Options" Metaboxes from Page</h1>
		<table class="widefat" style="width:100%;">
		<th>MetaBoxName</th><th>Remove?</th><?php
		foreach($pageboxes as $q)
		{
		if($q[1]!="")
		{?>
		<tr><td><?php echo $q[1];?></td>
		<td><input type="checkbox" name="page-<?php echo $q[0]; ?>" id="page-<?php echo $q[0]; ?>" value="<?php echo $q[0]; ?>"></td></tr>
		<?php
		
		}
		}?>
		<tr><td><input type="submit" name="save_metabox" value="save"></td></tr>
		</table>
		
		</form>
        <?php
		if(isset($_POST['save_metabox']))
		{
		$arr=array();
		$arr2=array();
		foreach($postboxes as $p){
		if($_POST["post-".$p[0]]!="")
		array_push($arr,$_POST["post-".$p[0]]);
		update_option('hide-post',$arr);
		echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#meta").submit();                                   
                            });
                    </script>';
		}
		foreach($pageboxes as $q){
		if($_POST["page-".$q[0]]!="")
		array_push($arr2,$_POST["page-".$q[0]]);
		update_option('hide-page',$arr2);
		echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#meta").submit();                                   
                            });
                    </script>';
		}
		}
		?>
		</div>
	<?php include("donate.php");?>