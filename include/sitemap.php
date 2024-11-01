 <div class="main">
	<div class="firstDiv">
<h1>XML Sitemap Generator</h1>
<form action="" method="post" id="sitemap_form">
<h3>Sitemap Content</h3>
<input type="checkbox" name="sitemap_home" value="true" <?php checked(get_option('sitemap_home'),'true');?>> Include  Homepage<br/>
<input type="checkbox" name="sitemap_page" value="true" <?php checked(get_option('sitemap_page'),'true');?>> Include  Page<br/>
<input type="checkbox" name="sitemap_post" value="true" <?php checked(get_option('sitemap_post'),'true');?>> Include  Post<br/>
<input type="checkbox" name="sitemap_category" value="true" <?php checked(get_option('sitemap_category'),'true');?>> Include  Categories<br/>
<input type="checkbox" name="sitemap_archive" value="true" <?php checked(get_option('sitemap_archive'),'true');?>> Include  Archives<br/>
<input type="checkbox" name="sitemap_author" value="true" <?php checked(get_option('sitemap_author'),'true');?>> Include  author Pages<br/>
<input type="checkbox" name="sitemap_tag" value="true" <?php checked(get_option('sitemap_tag'),'true');?>> Include  Tag Pages<br/>
<h3>Change Frequencies</h3>
<select name="change_frequency_home">
<option value="Always" <?php selected(get_option('change_frequency_home'),'Always')?>>Always</option>
<option value="Hourly" <?php selected(get_option('change_frequency_home'),'Hourly')?> >Hourly</option>
<option value="Daily" <?php selected(get_option('change_frequency_home'),'Daily')?>>Daily</option>
<option value="Weekly" <?php selected(get_option('change_frequency_home'),'Weekly')?>>Weekly</option>
<option value="Monthly" <?php selected(get_option('change_frequency_home'),'Monthly')?>>Monthly</option>
<option value="Yearly" <?php selected(get_option('change_frequency_home'),'Yearly')?>>Yearly</option>
<option value="Never" <?php selected(get_option('change_frequency_home'),'Never')?>>Never</option>
</select>Homepage<br/>
<select name="change_frequency_page">
<option value="Always" <?php selected(get_option('change_frequency_page'),'Always')?>>Always</option>
<option value="Hourly" <?php selected(get_option('change_frequency_page'),'Hourly')?>>Hourly</option>
<option value="Daily" <?php selected(get_option('change_frequency_page'),'Daily')?>>Daily</option>
<option value="Weekly" <?php selected(get_option('change_frequency_page'),'Weekly')?>>Weekly</option>
<option value="Monthly" <?php selected(get_option('change_frequency_page'),'Monthly')?>>Monthly</option>
<option value="Yearly" <?php selected(get_option('change_frequency_page'),'Yearly')?>>Yearly</option>
<option value="Never" <?php selected(get_option('change_frequency_page'),'Never')?>>Never</option>
</select>Page<br/>
<select name="change_frequency_post">
<option value="Always" <?php selected(get_option('change_frequency_post'),'Always')?>>Always</option>
<option value="Hourly" <?php selected(get_option('change_frequency_post'),'Hourly')?>>Hourly</option>
<option value="Daily" <?php selected(get_option('change_frequency_post'),'Daily')?>>Daily</option>
<option value="Weekly" <?php selected(get_option('change_frequency_post'),'Weekly')?>>Weekly</option>
<option value="Monthly" <?php selected(get_option('change_frequency_post'),'Monthly')?>>Monthly</option>
<option value="Yearly" <?php selected(get_option('change_frequency_post'),'Yearly')?>>Yearly</option>
<option value="Never" <?php selected(get_option('change_frequency_post'),'Never')?>>Never</option>
</select>Post<br/>
<select name="change_frequency_category">
<option value="Always" <?php selected(get_option('change_frequency_category'),'Always')?>>Always</option>
<option value="Hourly" <?php selected(get_option('change_frequency_category'),'Hourly')?>>Hourly</option>
<option value="Daily" <?php selected(get_option('change_frequency_category'),'Daily')?>>Daily</option>
<option value="Weekly" <?php selected(get_option('change_frequency_category'),'Weekly')?>>Weekly</option>
<option value="Monthly" <?php selected(get_option('change_frequency_category'),'Monthly')?>>Monthly</option>
<option value="Yearly" <?php selected(get_option('change_frequency_category'),'Yearly')?>>Yearly</option>
<option value="Never" <?php selected(get_option('change_frequency_category'),'Never')?>>Never</option>
</select>Categories<br/>
<select name="change_frequency_archive">
<option value="Always" <?php selected(get_option('change_frequency_archive'),'Always')?>>Always</option>
<option value="Hourly" <?php selected(get_option('change_frequency_archive'),'Hourly')?>>Hourly</option>
<option  value="Daily" <?php selected(get_option('change_frequency_archive'),'Daily')?>>Daily</option>
<option value="Weekly" <?php selected(get_option('change_frequency_archive'),'Weekly')?>>Weekly</option>
<option value="Monthly" <?php selected(get_option('change_frequency_archive'),'Monthly')?>>Monthly</option>
<option value="Yearly" <?php selected(get_option('change_frequency_archive'),'Yearly')?>>Yearly</option>
<option value="Never" <?php selected(get_option('change_frequency_archive'),'Never')?>>Never</option>
</select>Archive<br/>
<select name="change_frequency_author">
<option value="Always" <?php selected(get_option('change_frequency_author'),'Always')?>>Always</option>
<option value="Hourly" <?php selected(get_option('change_frequency_author'),'Hourly')?>>Hourly</option>
<option value="Daily" <?php selected(get_option('change_frequency_author'),'Daily')?>>Daily</option>
<option value="Weekly" <?php selected(get_option('change_frequency_author'),'Weekly')?>>Weekly</option>
<option value="Monthly" <?php selected(get_option('change_frequency_author'),'Monthly')?>>Monthly</option>
<option value="Yearly" <?php selected(get_option('change_frequency_author'),'Yearly')?>>Yearly</option>
<option value="Never" <?php selected(get_option('change_frequency_author'),'Never')?> >Never</option>
</select>Author<br/>
<select name="change_frequency_tag">
<option value="Always" <?php selected(get_option('change_frequency_tag'),'Always')?>>Always</option>
<option value="Hourly" <?php selected(get_option('change_frequency_tag'),'Hourly')?>>Hourly</option>
<option value="Daily" <?php selected(get_option('change_frequency_tag'),'Daily')?>>Daily</option>
<option value="Weekly" <?php selected(get_option('change_frequency_tag'),'Weekly')?>>Weekly</option>
<option value="Monthly" <?php selected(get_option('change_frequency_tag'),'Monthly')?>>Monthly</option>
<option value="Yearly" <?php selected(get_option('change_frequency_tag'),'Yearly')?>>Yearly</option>
<option value="Never" <?php selected(get_option('change_frequency_tag'),'Never')?>>Never</option>
</select>Tag
<h3>Priorities</h3>
<select name="priorities_home">
<option value="0.0" <?php selected(get_option('priorities_home'),'0.0');?>>0.0</option>
<option value="0.1" <?php selected(get_option('priorities_home'),'0.1');?>>0.1</option>
<option value="0.2" <?php selected(get_option('priorities_home'),'0.2');?>>0.2</option>
<option value="0.3" <?php selected(get_option('priorities_home'),'0.3');?>>0.3</option>
<option value="0.4" <?php selected(get_option('priorities_home'),'0.4');?>>0.4</option>
<option value="0.5" <?php selected(get_option('priorities_home'),'0.5');?>>0.5</option>
<option value="0.6" <?php selected(get_option('priorities_home'),'0.6');?>>0.6</option>
<option value="0.7" <?php selected(get_option('priorities_home'),'0.7');?>>0.7</option>
<option value="0.8" <?php selected(get_option('priorities_home'),'0.8');?>>0.8</option>
<option value="0.9" <?php selected(get_option('priorities_home'),'0.9');?>>0.9</option>
<option value="1.0" <?php selected(get_option('priorities_home'),'1.0');?>>1.0</option>
</select> Homepage<br/>
<select name="priorities_page">
<option value="0.0" <?php selected(get_option('priorities_page'),'0.0');?>>0.0</option>
<option value="0.1" <?php selected(get_option('priorities_page'),'0.1');?>>0.1</option>
<option value="0.2" <?php selected(get_option('priorities_page'),'0.2');?>>0.2</option>
<option value="0.3" <?php selected(get_option('priorities_page'),'0.3');?>>0.3</option>
<option value="0.4" <?php selected(get_option('priorities_page'),'0.4');?>>0.4</option>
<option value="0.5" <?php selected(get_option('priorities_page'),'0.5');?>>0.5</option>
<option value="0.6" <?php selected(get_option('priorities_page'),'0.6');?>>0.6</option>
<option value="0.7" <?php selected(get_option('priorities_page'),'0.7');?>>0.7</option>
<option value="0.8" <?php selected(get_option('priorities_page'),'0.8');?>>0.8</option>
<option value="0.9" <?php selected(get_option('priorities_page'),'0.9');?>>0.9</option>
<option value="1.0" <?php selected(get_option('priorities_page'),'1.0');?>>1.0</option>
</select> Page<br/>
<select name="priorities_post">
<option value="0.0" <?php selected(get_option('priorities_post'),'0.0');?>>0.0</option>
<option value="0.1" <?php selected(get_option('priorities_post'),'0.1');?>>0.1</option>
<option value="0.2" <?php selected(get_option('priorities_post'),'0.2');?>>0.2</option>
<option value="0.3" <?php selected(get_option('priorities_post'),'0.3');?>>0.3</option>
<option value="0.4" <?php selected(get_option('priorities_post'),'0.4');?>>0.4</option>
<option value="0.5" <?php selected(get_option('priorities_post'),'0.5');?>>0.5</option>
<option value="0.6" <?php selected(get_option('priorities_post'),'0.6');?>>0.6</option>
<option value="0.7" <?php selected(get_option('priorities_post'),'0.7');?>>0.7</option>
<option value="0.8" <?php selected(get_option('priorities_post'),'0.8');?>>0.8</option>
<option value="0.9" <?php selected(get_option('priorities_post'),'0.9');?>>0.9</option>
<option value="1.0" <?php selected(get_option('priorities_post'),'1.0');?>>1.0</option>
</select> Post<br/>
<select name="priorities_category">
<option value="0.0" <?php selected(get_option('priorities_category'),'0.0');?>>0.0</option>
<option value="0.1" <?php selected(get_option('priorities_category'),'0.1');?>>0.1</option>
<option value="0.2" <?php selected(get_option('priorities_category'),'0.2');?>>0.2</option>
<option value="0.3" <?php selected(get_option('priorities_category'),'0.3');?>>0.3</option>
<option value="0.4" <?php selected(get_option('priorities_category'),'0.4');?>>0.4</option>
<option value="0.5" <?php selected(get_option('priorities_category'),'0.5');?>>0.5</option>
<option value="0.6" <?php selected(get_option('priorities_category'),'0.6');?>>0.6</option>
<option value="0.7" <?php selected(get_option('priorities_category'),'0.7');?>>0.7</option>
<option value="0.8" <?php selected(get_option('priorities_category'),'0.8');?>>0.8</option>
<option value="0.9" <?php selected(get_option('priorities_category'),'0.9');?>>0.9</option>
<option value="1.0" <?php selected(get_option('priorities_category'),'1.0');?>>1.0</option>
</select> Categories<br/>
<select name="priorities_archive">
<option value="0.0" <?php selected(get_option('priorities_archive'),'0.0');?>>0.0</option>
<option value="0.1" <?php selected(get_option('priorities_archive'),'0.1');?>>0.1</option>
<option value="0.2" <?php selected(get_option('priorities_archive'),'0.2');?>>0.2</option>
<option value="0.3" <?php selected(get_option('priorities_archive'),'0.3');?>>0.3</option>
<option value="0.4" <?php selected(get_option('priorities_archive'),'0.4');?>>0.4</option>
<option value="0.5" <?php selected(get_option('priorities_archive'),'0.5');?>>0.5</option>
<option value="0.6" <?php selected(get_option('priorities_archive'),'0.6');?>>0.6</option>
<option value="0.7" <?php selected(get_option('priorities_archive'),'0.7');?>>0.7</option>
<option value="0.8" <?php selected(get_option('priorities_archive'),'0.8');?>>0.8</option>
<option value="0.9" <?php selected(get_option('priorities_archive'),'0.9');?>>0.9</option>
<option value="1.0" <?php selected(get_option('priorities_archive'),'1.0');?>>1.0</option>
</select> Archive<br/>
<select name="priorities_author">
<option value="0.0" <?php selected(get_option('priorities_author'),'0.0');?>>0.0</option>
<option value="0.1" <?php selected(get_option('priorities_author'),'0.1');?>>0.1</option>
<option value="0.2" <?php selected(get_option('priorities_author'),'0.2');?>>0.2</option>
<option value="0.3" <?php selected(get_option('priorities_author'),'0.3');?>>0.3</option>
<option value="0.4" <?php selected(get_option('priorities_author'),'0.4');?>>0.4</option>
<option value="0.5" <?php selected(get_option('priorities_author'),'0.5');?>>0.5</option>
<option value="0.6" <?php selected(get_option('priorities_author'),'0.6');?>>0.6</option>
<option value="0.7" <?php selected(get_option('priorities_author'),'0.7');?>>0.7</option>
<option value="0.8" <?php selected(get_option('priorities_author'),'0.8');?>>0.8</option>
<option value="0.9" <?php selected(get_option('priorities_author'),'0.9');?>>0.9</option>
<option value="1.0" <?php selected(get_option('priorities_author'),'1.0');?>>1.0</option>
</select> Author<br/>
<select name="priorities_tag">
<option value="0.0" <?php selected(get_option('priorities_tag'),'0.0');?>>0.0</option>
<option value="0.1" <?php selected(get_option('priorities_tag'),'0.1');?>>0.1</option>
<option value="0.2" <?php selected(get_option('priorities_tag'),'0.2');?>>0.2</option>
<option value="0.3" <?php selected(get_option('priorities_tag'),'0.3');?>>0.3</option>
<option value="0.4" <?php selected(get_option('priorities_tag'),'0.4');?>>0.4</option>
<option value="0.5" <?php selected(get_option('priorities_tag'),'0.5');?>>0.5</option>
<option value="0.6" <?php selected(get_option('priorities_tag'),'0.6');?>>0.6</option>
<option value="0.7" <?php selected(get_option('priorities_tag'),'0.7');?>>0.7</option>
<option value="0.8" <?php selected(get_option('priorities_tag'),'0.8');?>>0.8</option>
<option value="0.9" <?php selected(get_option('priorities_tag'),'0.9');?>>0.9</option>
<option value="1.0" <?php selected(get_option('priorities_tag'),'1.0');?>>1.0</option>
</select> Tag<br/>
<input type="submit" name="save_sitemap" value="save">
<input type="submit" name="create_xml" value="create sitemap">
To View Sitemap Click link <a href="<?php echo get_option('home');?>/sitemap.xml" target="_blank"><?php echo get_option('home');?>/sitemap.xml</a>
</form>
</div>
<?php include("donate.php");?>
<?php
if(isset($_POST['save_sitemap']))
{
update_option('sitemap_home',$_POST['sitemap_home']);
update_option('sitemap_page',$_POST['sitemap_page']);
update_option('sitemap_post',$_POST['sitemap_post']);
update_option('sitemap_category',$_POST['sitemap_category']);
update_option('sitemap_archive',$_POST['sitemap_archive']);
update_option('sitemap_author',$_POST['sitemap_author']);
update_option('sitemap_tag',$_POST['sitemap_tag']);
update_option('change_frequency_home',$_POST['change_frequency_home']);
update_option('priorities_home',$_POST['priorities_home']);
update_option('change_frequency_page',$_POST['change_frequency_page']);
update_option('priorities_page',$_POST['priorities_page']);
update_option('change_frequency_post',$_POST['change_frequency_post']);
update_option('priorities_post',$_POST['priorities_post']);
update_option('change_frequency_category',$_POST['change_frequency_category']);
update_option('priorities_category',$_POST['priorities_category']);
update_option('change_frequency_archive',$_POST['change_frequency_archive']);
update_option('priorities_archive',$_POST['priorities_archive']);
update_option('change_frequency_author',$_POST['change_frequency_author']);
update_option('priorities_author',$_POST['priorities_author']);
update_option('change_frequency_tag',$_POST['change_frequency_tag']);
update_option('priorities_tag',$_POST['priorities_tag']);

echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#sitemap_form").submit();                                   
                            });
                    </script>';
}
?>
<?php
if(isset($_POST['create_xml'])){
       $xmlBeg = "<?xml version='1.0' encoding='ISO-8859-1'?>"; 
	   $xmlstyle='<?xml-stylesheet type="text/xsl" href="'.plugins_url().'/wp-grande-plugin/css/sitemap-style.xsl"?>';

        $rootELementStart = "<urlset>";

        $rootElementEnd = "</urlset>";

        $xml_document=  $xmlBeg; 
		$xml_document=  $xmlstyle; 

        $xml_document .=  $rootELementStart;
        if(get_option('sitemap_home')){
        $xml_document .=  "<url>";
		$xml_document .=  "<loc>";
		$xml_document .= get_option('home');
		$xml_document .=  "</loc>";
		$xml_document .=  "<lastmod>";
		$xml_document .=   get_the_modified_date('Y-m-d',get_option('home'));
		$xml_document .=  "</lastmod>";
		$xml_document .=  "<changefreq>";
		$xml_document .=  get_option('change_frequency_home');
		$xml_document .=  "</changefreq>";
		$xml_document .=  "<priority>";
		$xml_document .=  get_option('priorities_home');
		$xml_document .=  "</priority>";
		$xml_document .=  "</url>";
		}
		if(get_option('sitemap_page')){
		 global $post;
		 query_posts('post_type=page');
		 while (have_posts()) :the_post();
        $xml_document .=  "<url>";
		$xml_document .=  "<loc>";
		$xml_document .= get_permalink($post->ID);
		$xml_document .=  "</loc>";
		$xml_document .=  "<lastmod>";
		$xml_document .=   get_the_modified_date('Y-m-d h:i:s');
		$xml_document .=  "</lastmod>";
		$xml_document .=  "<changefreq>";
		$xml_document .=  get_option('change_frequency_page');
		$xml_document .=  "</changefreq>";
		$xml_document .=  "<priority>";
		$xml_document .=  get_option('priorities_page');
		$xml_document .=  "</priority>";
		$xml_document .=  "</url>";
		endwhile;
		}
         if(get_option('sitemap_post')){
		 global $post;
		 query_posts('post_type=post');
		 while (have_posts()) :the_post();
        $xml_document .=  "<url>";
		$xml_document .=  "<loc>";
		$xml_document .= get_permalink($post->ID);
		$xml_document .=  "</loc>";
		$xml_document .=  "<lastmod>";
		$xml_document .=   get_the_modified_date('Y-m-d h:i:s');
		$xml_document .=  "</lastmod>";
		$xml_document .=  "<changefreq>";
		$xml_document .=  get_option('change_frequency_post');
		$xml_document .=  "</changefreq>";
		$xml_document .=  "<priority>";
		$xml_document .=  get_option('priorities_post');
		$xml_document .=  "</priority>";
		$xml_document .=  "</url>";
		endwhile;
		}
		
		 if(get_option('sitemap_category')){
		 foreach((get_categories()) as $category){
        $xml_document .=  "<url>";
		$xml_document .=  "<loc>";
		$xml_document .= get_category_link(get_cat_id($category->cat_name)) ;
		$xml_document .=  "</loc>";
		$xml_document .=  "<lastmod>";
		$xml_document .=   get_the_modified_date('Y-m-d h:i:s');
		$xml_document .=  "</lastmod>";
		$xml_document .=  "<changefreq>";
		$xml_document .=  get_option('change_frequency_category');
		$xml_document .=  "</changefreq>";
		$xml_document .=  "<priority>";
		$xml_document .=  get_option('priorities_category');
		$xml_document .=  "</priority>";
		$xml_document .=  "</url>";
		}
		}
		
			
		 if(get_option('sitemap_archive')){
		$sql=mysql_query("select * from wp_posts where post_type='post' && post_status='publish'");
		 while($row=mysql_fetch_array($sql))
		 {
		 $arr=explode(' ',$row['post_date']);
		 $arr2=explode('-',$arr[0]);
		$xml_document .=  "<url>";
		$xml_document .=  "<loc>";
		$xml_document .= get_month_link($arr2[0],$arr2[1]); 
		$xml_document .=  "</loc>";
		$xml_document .=  "<lastmod>";
		$xml_document .=   get_the_modified_date('Y-m-d h:i:s');
		$xml_document .=  "</lastmod>";
		$xml_document .=  "<changefreq>";
		$xml_document .=  get_option('change_frequency_archive');
		$xml_document .=  "</changefreq>";
		$xml_document .=  "<priority>";
		$xml_document .=  get_option('priorities_archive');
		$xml_document .=  "</priority>";
		$xml_document .=  "</url>";
		}
		}
		if(get_option('sitemap_author')){
		$sql=mysql_query("select * from wp_users");
		 while($row=mysql_fetch_array($sql))
		 {
		 
		$xml_document .=  "<url>";
		$xml_document .=  "<loc>";
		$xml_document .= get_author_posts_url($row['ID']); 
		$xml_document .=  "</loc>";
		$xml_document .=  "<lastmod>";
		$xml_document .=   get_the_modified_date('Y-m-d h:i:s');
		$xml_document .=  "</lastmod>";
		$xml_document .=  "<changefreq>";
		$xml_document .=  get_option('change_frequency_author');
		$xml_document .=  "</changefreq>";
		$xml_document .=  "<priority>";
		$xml_document .=  get_option('priorities_author');
		$xml_document .=  "</priority>";
		$xml_document .=  "</url>";
		}
		}
		if(get_option('sitemap_tag')){
		query_posts('post_type=post');
while(have_posts()):the_post();
$posttag=get_the_tags();
if($posttag){
foreach($posttag as $tag)
{
  	$xml_document .=  "<url>";
		$xml_document .=  "<loc>";
		$xml_document .= get_tag_link($tag->term_id); 
		$xml_document .=  "</loc>";
		$xml_document .=  "<lastmod>";
		$xml_document .=   get_the_modified_date('Y-m-d h:i:s');
		$xml_document .=  "</lastmod>";
		$xml_document .=  "<changefreq>";
		$xml_document .=  get_option('change_frequency_tag');
		$xml_document .=  "</changefreq>";
		$xml_document .=  "<priority>";
		$xml_document .=  get_option('priorities_tag');
		$xml_document .=  "</priority>";
		$xml_document .=  "</url>";
		
		}
		}endwhile;
}
        $xml_document .=  $rootElementEnd;

        $path_dir = ABSPATH."/";

        $path_dir .= "sitemap.xml";

/* Data in Variables ready to be written to an XML file */

$fp = fopen($path_dir,'w');

            $write = fwrite($fp,$xml_document);
}
?>