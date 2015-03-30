<?php
if ( ! defined( 'ABSPATH' ) ) { echo 'dont try to play with my code'; exit; } // Exit if accessed directly
function array_divide($array, $segmentCount) {
	$dataCount = count($array);
	if ($dataCount == 0) return false;
	$segmentLimit = ceil($dataCount / $segmentCount);
	$outputArray = array();
	while($dataCount > $segmentLimit) {
		$outputArray[] = array_splice($array,0,$segmentLimit);
		$dataCount = count($array);
	}
	if($dataCount > 0) $outputArray[] = $array;
	return $outputArray;
}
function game_rules_update_process(){
	global $wpdb;	
	if ($_POST) {
		extract($_POST);
		$number = count($team);
		if ($number % 2 == 0) {
			if ($action=='update_rules'){
				
				//echo $updateleaguename;
				
				$getCompId = $wpdb->get_row("SELECT * FROM wp_terms WHERE name = '$updateleaguename'");
				
				$getLeagueCompId = $getCompId->term_id;
				$getLeagueCompName = $getCompId->name;
							
				/////////////// Add Events
				$numRp=0;
				$getDevideNumber = array_divide($team,$team_pools);
				$countArr = count($getDevideNumber);
				for ($arr=0; $arr<$countArr; $arr++) {	
					$getcountArr[] = count($getDevideNumber[$arr]);
				
				}
					if (count(array_unique($getcountArr)) === 1) {
						
						for ($xbr=0; $xbr<count($getcountArr); $xbr++) {						
						
						$ids = $getDevideNumber[$xbr];	

						
						$getTermTx = get_the_terms( $ids[$xbr], 'sp_venue' );
						
						
						$combinations = array();
						//$ids = array_unique($ids); // remove duplicates
						$num_ids = count($ids);
						
						$each_team_match = $play_x_games;
						
						for($x=0; $x<$each_team_match; $x++) {
							$sr=1;
							
							for ($i = 0; $i < $num_ids; $i++)
							{
							
							for ($j = $i+1; $j < $num_ids; $j++)
							{
								shuffle($ids);
						
								$combinations = array($ids[$i], $ids[$j]);
						
								shuffle($combinations);
								
								
								
								
								$vendueId = $getTermTx[$numRp]->term_id;
								
								
								
								
								
								
								//echo  $combinations[0] .' vs '.$combinations[1].'</b><br>'; sp_event
								$startDate = time();
									
								$dateTime = date('Y-m-d H:i:s', strtotime('+1 day', $startDate));
			
										$my_post = array(
												'post_title'    => get_the_title($combinations[0]) .' vs '.get_the_title($combinations[1]),
												'post_content'  => get_the_title($combinations[0]) .' vs '.get_the_title($combinations[1]),
												'post_type'   	=> 'sp_event',
												'post_status'   => $eventstatus,
												'post_date'   	=> $dateTime,
												'post_date_gmt' => $dateTime,
												'post_author'   => 1
											);
										
											wp_insert_post( $my_post );
											$post_id = $wpdb->insert_id;
											add_post_meta($post_id, 'sp_season', $season);
											add_post_meta($post_id, 'sp_league', $league);
											add_post_meta($post_id, 'sp_team', $combinations[0]);
											add_post_meta($post_id, 'sp_team', $combinations[1]);
											add_post_meta($post_id, 'sp_format', 'league');
						
											$addleage = $wpdb->query("insert into wp_term_relationships set object_id = '$post_id', term_taxonomy_id = '$getLeagueCompId'  ");
											$addseason = $wpdb->query("insert into wp_term_relationships set object_id = '$post_id', term_taxonomy_id = '$season'  ");
											$addseason = $wpdb->query("insert into wp_term_relationships set object_id = '$post_id', term_taxonomy_id = '$vendueId'  ");
																	
								}
							}
						
							}
						
						
						}
					
						
						foreach ($_POST as $key=>$val){
							//update_option('_'.$key,);
							if ($key!='action' and $key!='submit'){
								update_option('_'.$key,$val);
							}
						}
						
						
						
						//////////////// create playoff
						
						$startDate = time();
						$dateTime = date('Y-m-d H:i:s', strtotime('+1 day', $startDate));
						
						//playoffRounds
						$my_post = array(
								'post_title'    => $getLeagueCompName.' Playoff',
								'post_content'  => $getLeagueCompName.' Playoff',
								'post_type'   	=> 'sp_tournament',
								'post_status'   => $eventstatus,
								'post_date'   	=> $dateTime,
								'post_date_gmt' => $dateTime,
								'post_author'   => 1
						);
						wp_insert_post( $my_post );
						$post_id = $wpdb->insert_id;
						
						add_post_meta($post_id, 'sp_rounds', $playoffRounds);
						if ($playoffRounds==2) {
						
							$roundLebels = 'a:2:{i:0;s:10:"Semi Final";i:1;s:5:"Final";}';
							
						add_post_meta($post_id, 'sp_labels', $roundLebels);
						add_post_meta($post_id, 'sp_events', 'a:3:{i:0;s:1:"0";i:1;s:1:"0";i:2;s:1:"0";}');
						
						} else if ($playoffRounds==3) {
						
						$roundLebels = 'a:3:{i:0;s:7:"Quarter";i:1;s:10:"Semi Final";i:2;s:5:"Final";}';
						add_post_meta($post_id, 'sp_labels', $roundLebels);
						add_post_meta($post_id, 'sp_events', 'a:7:{i:0;s:1:"0";i:1;s:1:"0";i:2;s:1:"0";i:3;s:1:"0";i:4;s:1:"0";i:5;s:1:"0";i:6;s:1:"0";}');
						
						}
						
						//////////////// end create playoff
						
						
						
						
						$success = array (
								'success' => '1',
								'error' => '0'
						);
						// Redirect for displaying message
						$new_url .= add_query_arg ( $success, get_permalink () );
						wp_redirect ( $new_url, 303 );
						
					} else {
						
						$error = array (
								'success' => '0',
								'error' => '3',
						);
						// Redirect for displaying message
						$new_url .= add_query_arg ( $error, get_permalink () );
						wp_redirect ( $new_url, 303 );
						
					}
				 
							
				
				
				
				////////////// Add Events End
				
				
				
				
				
			}
		
		} else {
			
			$error = array (
					'success' => '0',
					'error' => '2',
			);
			// Redirect for displaying message
			$new_url .= add_query_arg ( $error, get_permalink () );
			wp_redirect ( $new_url, 303 );
			
			
			
		}
	}
}
add_action('init','game_rules_update_process');
?>
<?php function player_game_rules(){ global $wpdb; ?>
<div class="wrap">
	<h2>Define Game Rules</h2>
	<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>"
		id="player_game_rules_form">
		<table class="form-table" width="100%" style="margin-top: 10px;">
<?php if ($_GET ['success']) {
			?>
			<tr valign="top">
				<td colspan="2" style="font-weight: bold; color: #090; padding: 10px; border: #0C0 1px solid; font-size: 16px;">New rules has been saved</td>
			</tr>
<?php  } ?>
<?php if ($_GET ['error']==1) {
			// Display error message
			?>
			<tr valign="top">
				<td colspan="2" style="font-weight: bold; color: red; padding: 10px; border: red 1px solid; font-size: 16px;"><?php echo $error['message']; ?></td>
			</tr>
<?php  } ?>
<?php if ($_GET ['error']==2) {
			// Display error message
			?>
			<tr valign="top">
				<td colspan="2" style="font-weight: bold; color: red; padding: 10px; border: red 1px solid; font-size: 16px;">Please select teams in even number</td>
			</tr>
<?php  } ?>
<?php if ($_GET ['error']==3) {
			// Display error message
			?>
			<tr valign="top">
				<td colspan="2" style="font-weight: bold; color: red; padding: 10px; border: red 1px solid; font-size: 16px;">Cannot create seperate POOLs for given number teams</td>
			</tr>
<?php  } ?>
<tr valign="top">
				<th scope="row" style="width: 50%"><label for="blogname">Select Season for Defining Game Rules</label></th>
				<td>	
		<?php $getAllSeason = $wpdb->get_results("SELECT * FROM wp_term_taxonomy JOIN wp_terms ON wp_term_taxonomy.term_id = wp_terms.term_id WHERE taxonomy = 'sp_season'"); 
				$getRev = array_reverse($getAllSeason); ?>				
				<select name="season" onchange="window.location='admin.php?page=wp_game_rules&seasonid='+this.value">
				<option value="">Select Season</option>
				<?php foreach ($getRev as $seasonKey=>$seasonVal) { ?>
					<option <?php if ($_GET['seasonid']==$seasonVal->term_id) echo 'selected'; ?> value="<?php echo $seasonVal->term_id; ?>"><?php echo $seasonVal->name; ?></option>
					<?php } ?>
				</select>
				</td>			
			</tr>
<?php if ($_GET['seasonid']!='') { ?>	
			<tr valign="top">
				<th scope="row" style="width: 50%"><label for="blogname">Select League for Defining Game Rules</label></th>
				<td>
				<?php
				$seasonId = $_GET['seasonid'];
				$getAllSeason = $wpdb->get_results("SELECT * FROM wp_posts JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID JOIN wp_term_taxonomy ON wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id WHERE wp_term_taxonomy.taxonomy = 'sp_season'  AND wp_posts.post_type = 'sp_table' AND wp_term_relationships.term_taxonomy_id = '$seasonId'");
				$getRev = array_reverse($getAllSeason);
				?>
				<select name="league" id="league" onchange="window.location='admin.php?page=wp_game_rules&seasonid=<?php echo $_GET['seasonid']; ?>&leagueid='+this.value">
				<option value="">Select Season</option>
				<?php foreach ($getRev as $seasonKey=>$seasonVal) { ?>
					<option <?php if ($_GET['leagueid']==$seasonVal->ID) echo 'selected'; ?> value="<?php echo $seasonVal->ID; ?>" label="<?php echo $seasonVal->post_title; ?>"><?php echo $seasonVal->post_title; ?></option>
					<?php } ?>
				</select>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row" style="width: 50%"><label for="blogname">Select Teams</label></th>
				<td>
				<?php
				$leagueId = $_GET['leagueid'];
				$getAllTeams = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE wp_postmeta.meta_key = 'sp_team' AND wp_postmeta.post_id = '$leagueId' ");
				
				$getRev = $getAllTeams; 
				
				//echo '<pre>';
			//	print_r($getRev); name
				//$getTermTx = get_the_terms( $getRev[1]->meta_value, 'sp_venue' );
				//echo $getTermTx[0]->name;
				?>
				<select multiple name="team[]">
				
				
				<?php foreach ($getRev as $seasonKey=>$seasonVal) { 
				if ($seasonVal->meta_value!='0') {
					?>
				
					<option selected value="<?php echo $seasonVal->meta_value; ?>"><?php echo get_the_title($seasonVal->meta_value); ?></option>
					
					<?php } ?>
					<?php } ?>
					
				</select>
				</td>
			</tr>
			
<?php } if ($_GET['seasonid']!='' and $_GET['leagueid']!='') { ?>
			<tr valign="top">
				<th scope="row" style="width: 50%"><label for="blogname">Each team will play at least</label></th>
				<td><input type="text" value="<?php echo get_option('_play_x_games'); ?>"  name="play_x_games" id="play_x_games" /> games</td>
			</tr>
			
			<tr valign="top">
				<th scope="row" style="width: 50%"><label for="blogname">How many POOLs do you want to create for teams</label></th>
				<td><input type="text" value="<?php echo get_option('_team_pools'); ?>"  name="team_pools" id="team_pools" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><label for="blogname">Each team will play no more than</label></th>
				<td><input type="text" value="<?php echo get_option('_nomore_x_games'); ?>"  name="nomore_x_games" id="nomore_x_games" /> games</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="blogname">Each team will have at least</label></th>
				<td><input type="text" value="<?php echo get_option('_team_x_dheaders'); ?>"  name="team_x_dheaders" id="team_x_dheaders" /> double-headers (two games in one day)</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="blogname">Each team have no more than</label></th>
				<td><input type="text" value="<?php echo get_option('_nomore_x_headers'); ?>"  name="nomore_x_headers" id="nomore_x_headers" /> double-headers</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="blogname">Each team will play the same opponent no more than</label></th>
				<td><input type="text" value="<?php echo get_option('_opponent_x_times'); ?>"  name="opponent_x_times" id="opponent_x_times" /> times</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="blogname">Each team will play other teams from a different sub-division no more than</label></th>
				<td><input type="text" value="<?php echo get_option('_subdivision_x_times'); ?>"  name="subdivision_x_times" id="subdivision_x_times" /> times</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="blogname">Each team will play other teams from a different division no more than</label></th>
				<td><input type="text" value="<?php echo get_option('_division_x_times'); ?>"  name="division_x_times" id="division_x_times" /> times</td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="blogname">The number of teams that qualify for the playoffs from each optional sub-division is</label></th>
				<td><input type="text" value="<?php echo get_option('_subdivision_qualify_playoff'); ?>"  name="subdivision_qualify_playoff" id="subdivision_qualify_playoff" /> </td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="blogname">The number of teams that qualify for the playoffs from each division is</label></th>
				<td><input type="text" value="<?php echo get_option('_division_qualify_playoff'); ?>"  name="division_qualify_playoff" id="division_qualify_playoff" /> </td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="blogname">How much rounds will be played in PlayOff (3 = Quarter, Semi Final, Final) (2 = Semi Final, Final)</label></th>
				<td><input type="text" value="2"  name="playoffRounds" id="playoffRounds" /> </td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="blogname">Select event status</label></th>
				<td>
				<select name="eventstatus" >
					<option value="draft">Draft</option>
					<option value="publish">Publish</option>
				</select>
				</td>
			</tr>
			
		<?php  } ?>	
		</table>
		<p class="submit">
		<input type="hidden" name="action" value="update_rules" />
		<input type="hidden" name="updateleaguename" id="updateleaguename" value="" />
		<?php if ($_GET['seasonid']!='' and $_GET['leagueid']!='') { ?>
		
		<input type="submit" name="submit" id="processbtn" class="button button-primary" value="Create Schedule" /> <span id="messageWait" style="color:green; display:none; font-size:16px;">Please wait while we are processing your request...</span></p>
		
		<?php } ?>
	</form>
	<script>

//jQuery('#processbtn').on(click(function()) {
//});


jQuery( "#processbtn" ).on( "click", function() {
 jQuery('#messageWait').fadeIn();
});

//messageWait

		var getName = jQuery("#league option:selected").text();
		//alert(getName);
		jQuery("#updateleaguename").val(getName);
	
	
	</script>
	
</div>
<?php } ?>
<?php 
// Display menu in admin left baar
add_action ( 'admin_menu', 'wp_player_rules' );
function wp_player_rules() {
	$menu_icon = 'https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-game-controller-b-20.png';
	
	add_menu_page ( 'Auto Schedule', 'Auto Schedule', 'manage_options', 'wp_game_rules', 'player_game_rules',$menu_icon );
	//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
?>
<?php add_option('_team_pools','0', false); ?>
<?php add_option('_play_x_games','0', false); ?>
<?php add_option('_nomore_x_games','0', false); ?>
<?php add_option('_team_x_dheaders','0', false); ?>
<?php add_option('_nomore_x_headers','0', false); ?>
<?php add_option('_opponent_x_times','0', false); ?>
<?php add_option('_subdivision_x_times','0', false); ?>
<?php add_option('_division_x_times','0', false); ?>
<?php add_option('_subdivision_qualify_playoff','0', false); ?>
<?php add_option('_division_qualify_playoff','0', false); ?>
<?php add_option('_opt_team','0', false); ?>
<?php add_option('_game_time','0', false); ?>
<?php } ?>