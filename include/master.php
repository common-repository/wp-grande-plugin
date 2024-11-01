    <div class="main">
	<div class="firstDiv">
<h1>Master Tools option</h1>
<form action="" method="post" id="master_form">
<table class="widefat" style="width:100%">
<tr><td>1) <b>Google</b> Webmaster</td><td><input type="text" name="google_master" size="129">
<br/>Eg.< meta name="google-site-verification" content="Volxdfasfasd3i3e_wATasfdsSDb0uFqvNVhLk7ZVY"/></td></tr>
<tr><td>2) <b>Bing</b></td><td><input type="text" name="bing_master" size="129">
<br/>Eg.< meta name="msvalidate.01" content="ASBKDW71D43Z67AB2D39636C89B88A"/></td></tr>
<tr><td>3) <b>Yahoo</b>Site Explorer</td><td><input type="text" name="yahoo_master" size="129">
<br/>Eg.< meta name="y_key" content="98D5S31a48dd7fc"/></td></tr>
<tr><td>4) <b>Alexa</b>Bank</td><td><input type="text" name="alexa_master" size="129">
<br/>Eg.< meta name="alexaVerifyID" content="OKJ3RsasdfKHGST1uqa8zcBfrjtY"/></td></tr>
<tr><td>5) <b>BlogCatalog</b></td><td><input type="text" name="blog_master" size="129">
<br/>Eg.< meta name="blogcatalog" content="7DS9234212"/></td></tr>
<tr><td>6) <b>Facebook Insights</b></td><td><input type="text" name="facebook_master" size="129">
<br/>Eg.< meta property="fb:admins" content="573435354"/></td></tr>

</table>
<h1>Analytics options</h1>
<table class="widefat" style="width:100%">
<tr><td>1)<b> Google</b> Analytics</td>
<td><input type="text" name="google_analytics" size="66" value="<?php echo get_option('google_analytics');?>">
<br/>Eg. Tracking ID:<font color="red"><code>UA-8123456-1</code></font></td></tr>
<tr><td>2)<b> Quantcast</b> Analytics</td>
<td><input type="text" name="quantcast_analytics" size="66" value="<?php echo get_option('quantcast_analytics');?>">
<br/>Eg. qacct value. i.e. <font color="red"><code>p-a8SWEoiOWPo5Q</code></font></td></tr>
<tr><td>3)<b> Clicky</b> Analytics</td>
<td><input type="text" name="clicky_analytics" size="66" value="<?php echo get_option('clicky_analytics');?>">
<br/>Eg. Site ID: <font color="red"><code>324543</code></font></td></tr>
<tr><td>4)<b> Compete</b> Analytics</td>
<td><input type="text" name="compete_analytics" size="66" value="<?php echo get_option('compete_analytics');?>">
<br/>Eg. __compete_code = '<font color="red"><code>07a543238f9kdwjga0d280bd70534990a</code></font></td></tr>
<tr><td>5)<b> SiteMeter</b> Analytics</td>
<td><input type="text" name="sitemeter_analytics" size="66" value="<?php echo get_option('sitemeter_analytics');?>">
<br/>Eg. src="<font color="red"><code>http://s44.sitemeter.com/js/counter.js?site=s44AShah</code></font></td></tr>

</table>
<input type="submit" name="save_master" value="save">
</form>
</div>
 <?php include("donate.php");?>
<?php
if(isset($_POST['save_master']))
{
update_option('google_master',$_POST['google_master']);
update_option('bing_master',$_POST['bing_master']);
update_option('yahoo_master',$_POST['yahoo_master']);
update_option('alexa_master',$_POST['alexa_master']);
update_option('blog_master',$_POST['blog_master']);
update_option('facebook_master',$_POST['facebook_master']);
update_option('google_analytics',$_POST['google_analytics']);
update_option('quantcast_analytics',$_POST['quantcast_analytics']);
update_option('clicky_analytics',$_POST['clicky_analytics']);
update_option('compete_analytics',$_POST['compete_analytics']);
update_option('sitemeter_analytics',$_POST['sitemeter_analytics']);
echo '<script type="text/javascript">
                            jQuery(document).ready(function($) {
                           jQuery("#master_form").submit();                                   
                            });
                    </script> ';
}
?>