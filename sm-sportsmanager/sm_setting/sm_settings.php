<?php wp_nonce_field( 'sm_settings', 'smsettings_nonce' ); ?>
<?php 
wp_enqueue_style('thickbox'); // call to media files in wp
wp_enqueue_script('thickbox');
wp_enqueue_script( 'media-upload');
?>
<div class="wrap" id="optionsframework-wrap">
<div id="optionsframework">
<div class="optionsframework-header"><h1 class="rwmb-label"><?php _e('SportsManager Settings'); ?></h1></div>
<form action="" method="post">
		<table class="form-table">
			<tr valign="top">
        		<th scope="row"><?php _e('Site logo'); ?></th>
        		<td><input id="_logo_image1" class="text_field file_field" type="text" name="logo_image" value="<?php echo $get_setting['logo_image']; ?>" />
   						 <input class="button upload-button upload_image_button"  type="button" value="Upload" /></td>
        	</tr>
        	<tr valign="top">
        		<th scope="row"><?php _e('Sitename'); ?></th>
        		<td><input type="text" name="sitename" value="<?php echo $get_setting['sitename']; ?>" id="sitename" /></td>
        	</tr>
        	<tr valign="top">
        		<th scope="row"><?php _e('Timezone'); ?></th>
        		<td>
        			<select name="time_zone" id="time_zone">
        				<option value="0">Select Timezone</option>
        				<?php foreach ($timezones as $key=>$val){ ?>
        				<option <?php if ($get_setting['time_zone']==$key) echo 'selected'; ?> value="<?php echo $key; ?>"><?php echo $val; ?></option>
        				<?php } ?>
        			</select>
        		</td>
        	</tr>
        	<tr valign="top">
        		<th scope="row"><?php _e('Sport'); ?></th>
        		<td>
        			<select name="prosports_sport" id="prosports_sport" class="chosen-select ">
		                    		                    			<optgroup label="Sports">
                    								                        		<option value="football" selected="selected">American Football</option>
			                        					                        	<option value="footy">Australian Rules Football</option>
			                        					                        	<option value="baseball">Baseball</option>
			                        					                        	<option value="basketball">Basketball</option>
			                        					                        	<option value="cricket">Cricket</option>
			                        					                        	<option value="darts">Darts</option>
			                        					                        	<option value="floorball">Floorball</option>
			                        					                        	<option value="handball">Handball</option>
			                        					                        	<option value="ice-hockey">Ice Hockey</option>
			                        					                        	<option value="netball">Netball</option>
			                        					                        	<option value="rugby-league">Rugby League</option>
			                        					                        	<option value="rugby-union">Rugby Union</option>
			                        					                        	<option value="snooker">Snooker</option>
			                        					                        	<option value="soccer">Soccer (Association Football)</option>
			                        					                        	<option value="squash">Squash</option>
			                        					                        	<option value="table-tennis">Table Tennis</option>
			                        					                        	<option value="tennis">Tennis</option>
			                        					                        	<option value="volleyball">Volleyball</option>
			                        					                        	<option value="water-polo">Water Polo</option>
				                        					            </optgroup>
				                  		                    			<optgroup label="Esports">
                                                                                    <option value="dota2">Dota 2</option>
				                        					                        <option value="lol">League of Legends</option>
				                        					            </optgroup>
				                  		                    			<optgroup label="Other">
	                    								                        	<option value="custom">Custom</option>
				                        					            </optgroup>
				                  								</select>
        		</td>
        	</tr>
        	<tr valign="top">
        		<th scope="row"><?php _e('Player frontend register'); ?></th>
        		<td>
        		
        			<select name="player_register" id="player_register">
        				<option value="0">Select</option>
        				<option <?php if ($get_setting['player_register']=='yes') echo 'selected'; ?> value="yes">Enable</option>
        				<option <?php if ($get_setting['player_register']=='no') echo 'selected'; ?> value="no">Disable</option>
        			</select>
        		</td>
        	</tr>
        	<tr valign="top">
        		<th scope="row"><?php _e('Team logos'); ?></th>
        		
        		<td><input type="checkbox"  <?php if ($get_setting['team_logo']=='on') echo 'checked'; ?> name="team_logo" id="team_logo" /> Display team logos</td>
        	</tr>
        	
        	<tr valign="top">
        		<th scope="row"><?php _e('Select elemination'); ?></th>
        		<td>
        		
        			<select name="playoff_elemination" id="playoff_elemination">
        				<option  value="0">Select</option>
        				<option <?php if ($get_setting['playoff_elemination']=='single') echo 'selected'; ?> value="single">Single Elemination</option>
        				<option <?php if ($get_setting['playoff_elemination']=='double') echo 'selected'; ?> value="double">Double Elemination</option>
        			</select><br>
        			Currently single and double elemination are available 
        		</td>
        	</tr>
        	
        	<tr valign="top">
        		<th scope="row"><?php _e('Display player picture'); ?></th>
        		<td><input type="checkbox"  <?php if ($get_setting['player_picture']=='on') echo 'checked'; ?> name="player_picture" id="player_picture" /> Display player image on roaster</td>
        	</tr>
        	<tr valign="top">
        		<th scope="row"><?php _e('Custom CSS'); ?></th>
        		<td><textarea name="custom_css" id="custom_css" placeholder="Add css without style tag"  rows="10"><?php echo $get_setting['custom_css']; ?></textarea></td>
        	</tr>		
        </table>

<div class="optionsframework-footer"><div class="leftmove">&copy 2015 - Bir-Al-Sabia Technologies</div>  <input class="button-primary vpanel_save vpanel_help" type="submit" value="Update Setting" />
<div class="clear"></div>

</div>
</form>
</div>
</div>