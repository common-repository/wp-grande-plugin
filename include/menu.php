	     <div class="main">
	<div class="firstDiv">
			<form method="post" id="wpg_form" action="options.php">
				<?php settings_fields( 'wpg-options-group' ); ?>
			<div id="section_admin_menu" class="wpg_section">
			<h2>Admin Menu Settings Page</h2>
				
							<table class="form-table" width="500px">	
							<tr>
								<td colspan="2">
								
									<table id="wpg_edit_adminmenu">									
										<tr style="background-color:#999;">
											<td width="300px"><div style="float:left;color:#fff;"><h3>Item</h3></div><div style="float:right;color:#fff;"><h3>Remove?</h3></div></td><td width="300px" style="color:#fff;" ><h3>Rename Menu Items</h3>													
											</td>
										</tr>
									</table>
									<input type="hidden" size="47" id="wpg_edit_adminmenu_json" name="wpg_edit_adminmenu_json" value="<?php echo htmlspecialchars(get_option('wpg_edit_adminmenu_json')); ?>" />
								</td>
								<td></td>
							</tr>
							</table>
							
				
				<input type="submit" value="save" />
				

			
			</form>
			<br/>
			<h2>Reference From-AG Custom Admin Plugin</h2>
			</div>
					
	  </div>
	<?php include("donate.php");?>
	  