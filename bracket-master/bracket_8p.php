<?php

/**Get an specific row from the table wp_bracket_8player**/
function bracket_get_tournament_namerow($id) {
    global $wpdb;
    $the_tournament_name = $wpdb->get_results("SELECT * FROM " .$wpdb->prefix ."bracket_8player WHERE id='".$id."'");
    if(!empty($the_tournament_name[0])) {
        return $the_tournament_name[0];
    }
    return;
}

function bracket_8player_meta_box() {
    global $edit_tournament_name;
?>

<p>Input the team names and scores as you want them to appear in the final output bracket for the website.</p><br />

<p><strong>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Tournament Name:</strong> <input size="65px" type="text" name="bracket_8player" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->tournament_name;?>" /></p>
<br />
    <div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr">
	
	<?php 
	/** START - SEE WHICH RADIO BUTTONS SHOULD BE CHECKED**/
	$bracket_ro8player1_status = 'unchecked';
	$bracket_ro8player2_status = 'unchecked';
	$bracket_ro8player3_status = 'unchecked';
	$bracket_ro8player4_status = 'unchecked';
	$bracket_ro8player5_status = 'unchecked';
	$bracket_ro8player6_status = 'unchecked';
	$bracket_ro8player7_status = 'unchecked';
	$bracket_ro8player8_status = 'unchecked';
	$bracket_ro4player1_status = 'unchecked';
	$bracket_ro4player2_status = 'unchecked';
	$bracket_ro4player3_status = 'unchecked';
	$bracket_ro4player4_status = 'unchecked';
	$bracket_r3rd4thplayer1_status = 'unchecked';
	$bracket_r3rd4thplayer2_status = 'unchecked';
	$bracket_finalsplayer1_status = 'unchecked';
	$bracket_finalsplayer2_status = 'unchecked';
	
/**Round of 8**/	
	if ($edit_tournament_name->r1m1winner == $edit_tournament_name->ro8player1) { $bracket_ro8player1_status = 'checked';
	}
	else if ($edit_tournament_name->r1m1winner == $edit_tournament_name->ro8player2) { $bracket_ro8player2_status = 'checked';
	}
	
	if ($edit_tournament_name->r1m2winner == $edit_tournament_name->ro8player3) { $bracket_ro8player3_status = 'checked';
	}
	else if ($edit_tournament_name->r1m2winner == $edit_tournament_name->ro8player4) { $bracket_ro8player4_status = 'checked';
	}
	
	if ($edit_tournament_name->r1m3winner == $edit_tournament_name->ro8player5) { $bracket_ro8player5_status = 'checked';
	}
	else if ($edit_tournament_name->r1m3winner == $edit_tournament_name->ro8player6) { $bracket_ro8player6_status = 'checked';
	}
	
	if ($edit_tournament_name->r1m4winner == $edit_tournament_name->ro8player7) { $bracket_ro8player7_status = 'checked';
	}
	else if ($edit_tournament_name->r1m4winner == $edit_tournament_name->ro8player8) { $bracket_ro8player8_status = 'checked';
	}

/**Round of 4**/	
	if ($edit_tournament_name->r2m1winner == $edit_tournament_name->ro4player1) { $bracket_ro4player1_status = 'checked';
	}
	else if ($edit_tournament_name->r2m1winner == $edit_tournament_name->ro4player2) { $bracket_ro4player2_status = 'checked';
	}
	
	if ($edit_tournament_name->r2m2winner == $edit_tournament_name->ro4player3) { $bracket_ro4player3_status = 'checked';
	}
	else if ($edit_tournament_name->r2m2winner == $edit_tournament_name->ro4player4) { $bracket_ro4player4_status = 'checked';
	}

/**3rd / 4th Place**/	
	if ($edit_tournament_name->r3rd4thwinner == $edit_tournament_name->r3rd4thplayer1) { $bracket_r3rd4thplayer1_status = 'checked';
	}
	else if ($edit_tournament_name->r3rd4thwinner == $edit_tournament_name->r3rd4thplayer2) { $bracket_r3rd4thplayer2_status = 'checked';
	}
	
/**Finals**/
	if ($edit_tournament_name->finalswinner == $edit_tournament_name->finalsplayer1) { $bracket_finalsplayer1_status = 'checked';
	}
	else if ($edit_tournament_name->finalswinner == $edit_tournament_name->finalsplayer2) { $bracket_finalsplayer2_status = 'checked';
	}
	
	/** END - SEE WHICH RADIO BUTTONS SHOULD BE CHECKED**/
	
?>

<table border="0" cellpadding="0" cellspacing="0" style="margin:1em 2em 1em 1em;">
<tr>	
	<td width="4">&#160;</td>
	<td colspan="8" style="text-align: center; border:1px solid #aaa;" bgcolor="#FFCC00">Quarterfinals</td>
	<td colspan="2"></td>
	<td colspan="8" style="text-align: center; border:1px solid #aaa;" bgcolor="#66CCFF">Semifinals</td>
	<td colspan="2"></td>
	<td colspan="8" style="text-align: center; border:1px solid #aaa;" bgcolor="#CCFF66">Finals</td>
</tr>
<tr>
<td width="4">&#160;</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">&nbsp;</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Player</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Score</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Winner</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Race</td>
	<td colspan="3" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">Flag</td>
	<td colspan="2"></td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">&nbsp;</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Player</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Score</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Winner</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Race</td>
	<td colspan="3" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">Flag</td>
	<td colspan="2"></td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">&nbsp;</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Player</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Score</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Winner</td>
	<td style="text-align: center; border:1px solid #aaa;" bgcolor="#F2F2F2">Race</td>
	<td colspan="3" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">Flag</td>
</tr>
<tr>
	<td style="width: 1px;">&#160;</td>
	<td width="25" style="width: 25px;">&#160;</td>
	<td colspan="2" style="width: 125px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="6" style="width: 5px;">&#160;</td>
	<td width="5" style="width: 5px;">&#160;</td>
	<td width="25" style="width: 25px;">&#160;</td>
	<td colspan="2" style="width: 125px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="6" style="width: 5px;">&#160;</td>
	<td width="5" style="width: 5px;">&#160;</td>
	<td width="25" style="width: 25px;">&#160;</td>
	<td colspan="2" style="width: 125px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
	<td width="12" style="width: 12px;">&#160;</td>
</tr>
<tr>
<td style="height: 14px;">&#160;</td>
<td bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">1</td>
<td width="120" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro8player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1;?>" /></td>
<td width="17" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1score;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r1m1winner" id="ro8player1" checked="unchecked" <?php echo $bracket_ro8player1_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro8player1race" id="ro8player1race">
		<option <?php if ($edit_tournament_name->ro8player1race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player1race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player1race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player1race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">  
		<select name="bracket_ro8player1flag" id="ro8player1flag">
		<option <?php if ($edit_tournament_name->ro8player1flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Europe") { echo "selected"; } ?>>Europe</option>
		</select>
</td>
<td style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td rowspan="2" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">2</td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro8player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2;?>" /></td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2score;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r1m1winner" id="ro8player2" <?php echo $bracket_ro8player2_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro8player2race" id="ro8player2race">
		<option <?php if ($edit_tournament_name->ro8player2race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player2race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player2race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player2race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" rowspan="2" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_ro8player2flag" id="ro8player2flag">
		<option <?php if ($edit_tournament_name->ro8player2flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
<td rowspan="6" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td rowspan="2" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
<td rowspan="2" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">1</td>
<td width="119" rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro4player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1;?>" /></td>
<td width="14" rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro4player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1score;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r2m1winner" id="ro4player1" <?php echo $bracket_ro4player1_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro4player1race" id="ro4player1race">
		<option <?php if ($edit_tournament_name->roplayer1race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player1race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro4player1race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro4player1race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" rowspan="2" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_ro4player1flag" id="ro4player1flag">
		<option <?php if ($edit_tournament_name->ro4player1flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
<td rowspan="2" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td colspan="8" rowspan="2" style="text-align: center;"></td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td rowspan="2" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td rowspan="2" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">2</td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro4player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2;?>" /></td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro4player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2score;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r2m1winner" id="ro4player2" <?php echo $bracket_ro4player2_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">		
		<select name="bracket_ro4player2race" id="ro4player2race">
		<option <?php if ($edit_tournament_name->ro4player2race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player2race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro4player2race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro4player2race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" rowspan="2" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_ro4player2flag" id="ro4player2flag">
		<option <?php if ($edit_tournament_name->ro4player2flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
<td rowspan="10" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td rowspan="2" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">3</td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro8player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3;?>" /></td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3score;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r1m2winner" id="ro8player3" <?php echo $bracket_ro8player3_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro8player3race" id="ro8player3race">
		<option <?php if ($edit_tournament_name->ro8player3race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player3race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player3race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player3race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" rowspan="2" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_ro8player3flag" id="ro8player3flag">
		<option <?php if ($edit_tournament_name->ro8player3flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
</tr>
<tr>
<td style="height: 7px;"></td>
</tr>
<tr>
<td style="height: 14px;">&#160;</td>
<td bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">4</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro8player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4score;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r1m2winner" id="ro8player4" <?php echo $bracket_ro8player4_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro8player4race" id="ro8player4race">
		<option <?php if ($edit_tournament_name->ro8player4race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player4race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player4race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player4race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">	
	<select name="bracket_ro8player4flag" id="ro8player4flag">
		<option <?php if ($edit_tournament_name->ro8player4flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
<td style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="2" style="height: 14px;"></td>
<td colspan="17" rowspan="2">&#160;</td>
<td style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
<td bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">1</td>
<td width="118" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_finalsplayer1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1;?>" /></td>
<td width="11" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_finalsplayer1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1score;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_finalswinner" id="finalsplayer1" <?php echo $bracket_finalsplayer1_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_finalsplayer1race" id="finalsplayer1race">
		<option <?php if ($edit_tournament_name->finalsplayer1race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->finalsplayer1race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->finalsplayer1race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->finalsplayer1race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_finalsplayer1flag" id="finalsplayer1flag">
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
</tr>
<tr>
<td colspan="2" style="height: 14px;"></td>
<td style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>

<td bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">2</td>
<td bgcolor="" style="border:1px solid #aaa;"><input type="text" name="bracket_finalsplayer2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2;?>" /></td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_finalsplayer2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2score;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_finalswinner" id="finalsplayer2" <?php echo $bracket_finalsplayer2_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_finalsplayer2race" id="finalsplayer2race">
		<option <?php if ($edit_tournament_name->finalsplayer2race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->finalsplayer2race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->finalsplayer2race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->finalsplayer2race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_finalsplayer2flag" id="finalsplayer2flag">
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
</tr>
<tr>
<td style="height: 14px;">&#160;</td>
<td bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">5</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro8player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5score;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r1m3winner" id="ro8player5" <?php echo $bracket_ro8player5_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro8player5race" id="ro8player5race">
		<option <?php if ($edit_tournament_name->ro8player5race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player5race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player5race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player5race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">	
	<select name="bracket_ro8player5flag" id="ro8player5flag">
		<option <?php if ($edit_tournament_name->ro8player5flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
<td style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td rowspan="2" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">6</td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro8player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6;?>" /></td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6score;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r1m3winner" id="ro8player6" <?php echo $bracket_ro8player6_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro8player6race" id="ro8player6race">
		<option <?php if ($edit_tournament_name->ro8player6race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player6race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player6race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player6race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" rowspan="2" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_ro8player6flag" id="ro8player6flag">
		<option <?php if ($edit_tournament_name->ro8player6flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
<td rowspan="6" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td rowspan="2" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
<td rowspan="2" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">3</td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro4player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3;?>" /></td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro4player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3score;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r2m2winner" id="ro4player3" <?php echo $bracket_ro4player3_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro4player3race" id="ro4player3race">
		<option <?php if ($edit_tournament_name->ro4player3race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player3race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro4player3race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro4player3race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" rowspan="2" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_ro4player3flag" id="ro4player3flag">
		<option <?php if ($edit_tournament_name->ro4player3flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td colspan="8" rowspan="2" style="text-align: center;"></td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td rowspan="2" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td rowspan="2" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">4</td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro4player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4;?>" /></td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro4player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4score;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r2m2winner" id="ro4player4" <?php echo $bracket_ro4player4_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro4player4race" id="ro4player4race">
		<option <?php if ($edit_tournament_name->ro4player4race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player4race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro4player4race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro4player4race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" rowspan="2" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">	
	<select name="bracket_ro4player4flag" id="ro4player4flag">
		<option <?php if ($edit_tournament_name->ro4player4flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
<td rowspan="2" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td rowspan="2">&#160;</td>
<td colspan="8" rowspan="2" bordercolor="#4D4D4D" bgcolor="#996666" style="text-align: center; border:1px solid #aaa;">Bronze Medal Match</td>
</tr>
<tr>
<td style="height: 7px;"></td>
<td rowspan="2" bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">7</td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro8player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7;?>" /></td>
<td rowspan="2" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7score;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r1m4winner" id="ro8player7" <?php echo $bracket_ro8player7_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7;?>" /></td>
<td rowspan="2" style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro8player7race" id="ro8player7race">
		<option <?php if ($edit_tournament_name->ro8player7race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player7race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player7race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player7race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" rowspan="2" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_ro8player7flag" id="ro8player7flag">
		<option <?php if ($edit_tournament_name->ro8player7flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
</tr>
<tr>
<td style="height: 7px;"></td>
</tr>
<tr>
<td style="height: 14px;">&#160;</td>
<td bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">8</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_ro8player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8score;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r1m4winner" id="ro8player8" <?php echo $bracket_ro8player8_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_ro8player8race" id="ro8player8race">
		<option <?php if ($edit_tournament_name->ro8player8race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player8race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player8race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player8race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">
	<select name="bracket_ro8player8flag" id="ro8player8flag">
		<option <?php if ($edit_tournament_name->ro8player8flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
<td style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="11">&#160;</td>
<td bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">1</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_r3rd4thplayer1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_r3rd4thplayer1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1score;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r3rd4thwinner" id="r3rd4thplayer1" <?php echo $bracket_r3rd4thplayer1_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">		
		<select name="bracket_r3rd4thplayer1race" id="r3rd4thplayer1race">
		<option <?php if ($edit_tournament_name->r3rd4thplayer1race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">	
	<select name="bracket_r3rd4thplayer1flag" id="r3rd4thplayer1flag">
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
</tr>
<tr>
<td colspan="21">&#160;</td>
<td bgcolor="#F2F2F2" style="text-align: center; border:1px solid #aaa;">2</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" name="bracket_r3rd4thplayer2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_r3rd4thplayer2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2score;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9"><input type="radio" name="bracket_r3rd4thwinner" id="r3rd4thplayer2" <?php echo $bracket_r3rd4thplayer2_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2;?>" /></td>
<td style="text-align: center; border:1px solid #aaa; border-left: 0px;" bgcolor="#F9F9F9">
		<select name="bracket_r3rd4thplayer2race" id="r3rd4thplayer2race">
		<option <?php if ($edit_tournament_name->r3rd4thplayer2race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td colspan="3" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; border-left: 0px;">	
	<select name="bracket_r3rd4thplayer2flag" id="r3rd4thplayer2flag">
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Europe") { echo "selected"; } ?>>Europe</option>
	</select>
</td>
</tr>
</table>
<p>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<strong>Winner:</strong> <input size="28px" type="text" name="bracket_winner" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->winner;?>" />
		<select name="bracket_winnerrace" id="winnerrace">
		<option <?php if ($edit_tournament_name->winnerrace == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->winnerrace == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->winnerrace == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->winnerrace == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
			
			<select name="bracket_winnerflag" id="winnerflag">
		<option <?php if ($edit_tournament_name->winnerflag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->winnerflag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->winnerflag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->winnerflag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->winnerflag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->winnerflag == "Europe") { echo "selected"; } ?>>Europe</option>
			</select>
		</p>
<?php 
}

function bracket_action(){
	
    global $wpdb;
    
    /**Delete the data if the variable "delete" is set**/
    if(isset($_GET['delete'])) {
        $_GET['delete'] = absint($_GET['delete']);
        $wpdb->query("DELETE FROM " .$wpdb->prefix ."bracket_8player WHERE id='" .$_GET['delete']."'");
    }

    /**Process the changes in the custom table**/
    if(isset($_POST['bracket_add_tournament_8p']) and isset($_POST['bracket_8player']) and isset($_POST['bracket_ro8player1']) and isset($_POST['bracket_ro8player1score']) and isset($_POST['bracket_ro8player2']) and isset($_POST['bracket_ro8player2score']) and isset($_POST['bracket_ro8player3']) and isset($_POST['bracket_ro8player3score']) and isset($_POST['bracket_ro8player4']) and isset($_POST['bracket_ro8player4score']) and isset($_POST['bracket_ro8player5']) and isset($_POST['bracket_ro8player5score']) and isset($_POST['bracket_ro8player6']) and isset($_POST['bracket_ro8player6score']) and isset($_POST['bracket_ro8player7']) and isset($_POST['bracket_ro8player7score']) and isset($_POST['bracket_ro8player8']) and isset($_POST['bracket_ro8player8score']) and isset($_POST['bracket_ro4player1']) and isset($_POST['bracket_ro4player1score']) and isset($_POST['bracket_ro4player2']) and isset($_POST['bracket_ro4player2score']) and isset($_POST['bracket_ro4player3']) and isset($_POST['bracket_ro4player3score']) and isset($_POST['bracket_r3rd4thplayer1']) and isset($_POST['bracket_r3rd4thplayer1score']) and isset($_POST['bracket_r3rd4thplayer2']) and isset($_POST['bracket_r3rd4thplayer2score']) and isset($_POST['bracket_finalsplayer1']) and isset($_POST['bracket_finalsplayer1score']) and isset($_POST['bracket_finalsplayer2']) and isset($_POST['bracket_finalsplayer2score']) and isset($_POST['bracket_winner']) ) {    
    	
    	/**Add new row in the custom table**/
        $tournament_name = $_POST['bracket_8player'];
        $ro8player1 = $_POST['bracket_ro8player1'];
        $ro8player1score = $_POST['bracket_ro8player1score'];
        $ro8player2 = $_POST['bracket_ro8player2'];
		$ro8player2score = $_POST['bracket_ro8player2score'];
		$ro8player3 = $_POST['bracket_ro8player3'];
		$ro8player3score = $_POST['bracket_ro8player3score'];
		$ro8player4 = $_POST['bracket_ro8player4'];
		$ro8player4score = $_POST['bracket_ro8player4score'];
		$ro8player5 = $_POST['bracket_ro8player5'];
		$ro8player5score = $_POST['bracket_ro8player5score'];
		$ro8player6 = $_POST['bracket_ro8player6'];
		$ro8player6score = $_POST['bracket_ro8player6score'];
		$ro8player7 = $_POST['bracket_ro8player7'];
		$ro8player7score = $_POST['bracket_ro8player7score'];
		$ro8player8 = $_POST['bracket_ro8player8'];
		$ro8player8score = $_POST['bracket_ro8player8score'];		
		$ro4player1 = $_POST['bracket_ro4player1'];
        $ro4player1score = $_POST['bracket_ro4player1score'];
        $ro4player2 = $_POST['bracket_ro4player2'];
        $ro4player2score = $_POST['bracket_ro4player2score'];
		$ro4player3 = $_POST['bracket_ro4player3'];
		$ro4player3score = $_POST['bracket_ro4player3score'];
		$ro4player4 = $_POST['bracket_ro4player4'];
		$ro4player4score = $_POST['bracket_ro4player4score'];		
		$r3rd4thplayer1 = $_POST['bracket_r3rd4thplayer1'];
		$r3rd4thplayer1score = $_POST['bracket_r3rd4thplayer1score'];
		$r3rd4thplayer2 = $_POST['bracket_r3rd4thplayer2'];
		$r3rd4thplayer2score = $_POST['bracket_r3rd4thplayer2score'];
		$finalsplayer1 = $_POST['bracket_finalsplayer1'];
        $finalsplayer1score = $_POST['bracket_finalsplayer1score'];
        $finalsplayer2 = $_POST['bracket_finalsplayer2'];
        $finalsplayer2score = $_POST['bracket_finalsplayer2score'];
		$winner = $_POST['bracket_winner'];
		$r1m1winner = $_POST['bracket_r1m1winner'];
		$r1m2winner = $_POST['bracket_r1m2winner'];
		$r1m3winner = $_POST['bracket_r1m3winner'];
		$r1m4winner = $_POST['bracket_r1m4winner'];
		$r2m1winner = $_POST['bracket_r2m1winner'];
		$r2m2winner = $_POST['bracket_r2m2winner'];
		$r3rd4thwinner = $_POST['bracket_r3rd4thwinner'];		
		$finalswinner = $_POST['bracket_finalswinner'];
		$ro8player1race = $_POST['bracket_ro8player1race'];
		$ro8player2race = $_POST['bracket_ro8player2race'];
		$ro8player3race = $_POST['bracket_ro8player3race'];
		$ro8player4race = $_POST['bracket_ro8player4race'];
		$ro8player5race = $_POST['bracket_ro8player5race'];
		$ro8player6race = $_POST['bracket_ro8player6race'];
		$ro8player7race = $_POST['bracket_ro8player7race'];
		$ro8player8race = $_POST['bracket_ro8player8race'];
		$ro4player1race = $_POST['bracket_ro4player1race'];
		$ro4player2race = $_POST['bracket_ro4player2race'];
		$ro4player3race = $_POST['bracket_ro4player3race'];
		$ro4player4race = $_POST['bracket_ro4player4race'];
		$r3rd4thplayer1race = $_POST['bracket_r3rd4thplayer1race'];
		$r3rd4thplayer2race = $_POST['bracket_r3rd4thplayer2race'];
		$finalsplayer1race = $_POST['bracket_finalsplayer1race'];
		$finalsplayer2race = $_POST['bracket_finalsplayer2race'];
		$winnerrace = $_POST['bracket_winnerrace'];
		$ro8player1flag = $_POST['bracket_ro8player1flag'];
		$ro8player2flag = $_POST['bracket_ro8player2flag'];
		$ro8player3flag = $_POST['bracket_ro8player3flag'];
		$ro8player4flag = $_POST['bracket_ro8player4flag'];
		$ro8player5flag = $_POST['bracket_ro8player5flag'];
		$ro8player6flag = $_POST['bracket_ro8player6flag'];
		$ro8player7flag = $_POST['bracket_ro8player7flag'];
		$ro8player8flag = $_POST['bracket_ro8player8flag'];
		$ro4player1flag = $_POST['bracket_ro4player1flag'];
		$ro4player2flag = $_POST['bracket_ro4player2flag'];
		$ro4player3flag = $_POST['bracket_ro4player3flag'];
		$ro4player4flag = $_POST['bracket_ro4player4flag'];
		$r3rd4thplayer1flag = $_POST['bracket_r3rd4thplayer1flag'];
		$r3rd4thplayer2flag = $_POST['bracket_r3rd4thplayer2flag'];
		$finalsplayer1flag = $_POST['bracket_finalsplayer1flag'];
		$finalsplayer2flag = $_POST['bracket_finalsplayer2flag'];
		$winnerflag	= $_POST['bracket_winnerflag'];
		

		
        if(empty($_POST['bracket_8player_id'])) {
        	
            $wpdb->query("INSERT INTO " .$wpdb->prefix ."bracket_8player(
			tournament_name,
			ro8player1,
			ro8player1score,
			ro8player2,
			ro8player2score,
			ro8player3,
			ro8player3score,
			ro8player4,
			ro8player4score,
			ro8player5,
			ro8player5score,
			ro8player6,
			ro8player6score,
			ro8player7,
			ro8player7score,
			ro8player8,
			ro8player8score,
			ro4player1,
			ro4player1score,
			ro4player2,
			ro4player2score,
			ro4player3,
			ro4player3score,
			ro4player4,
			ro4player4score,
			r3rd4thplayer1,
			r3rd4thplayer1score,
			r3rd4thplayer2,
			r3rd4thplayer2score,
			finalsplayer1,
			finalsplayer1score,
			finalsplayer2,
			finalsplayer2score,
			winner,
			r1m1winner,
			r1m2winner,
			r1m3winner,
			r1m4winner,
			r2m1winner,
			r2m2winner,
			r3rd4thwinner,
			finalswinner,
			ro8player1race,
			ro8player2race,
			ro8player3race,
			ro8player4race,
			ro8player5race,
			ro8player6race,
			ro8player7race,
			ro8player8race,
			ro4player1race,
			ro4player2race,
			ro4player3race,
			ro4player4race,
			r3rd4thplayer1race,
			r3rd4thplayer2race,
			finalsplayer1race,
			finalsplayer2race,
			winnerrace,
			ro8player1flag,
			ro8player2flag,
			ro8player3flag,
			ro8player4flag,
			ro8player5flag,
			ro8player6flag,
			ro8player7flag,
			ro8player8flag,
			ro4player1flag,
			ro4player2flag,
			ro4player3flag,
			ro4player4flag,
			r3rd4thplayer1flag,
			r3rd4thplayer2flag,
			finalsplayer1flag,
			finalsplayer2flag,
			winnerflag
			) VALUES(
			'" .$tournament_name ."',
			'" .$ro8player1."',
			'" .$ro8player1score."',
			'" .$ro8player2 ."',
			'" .$ro8player2score ."',
			'" .$ro8player3 ."',
			'" .$ro8player3score ."',
			'" .$ro8player4."',
			'" .$ro8player4score."',
			'" .$ro8player5."',
			'" .$ro8player5score."',
			'" .$ro8player6."',
			'" .$ro8player6score."',
			'" .$ro8player7."',
			'" .$ro8player7score."',
			'" .$ro8player8."',
			'" .$ro8player8score."',
			'" .$ro4player1."',
			'" .$ro4player1score."',
			'" .$ro4player2 ."',
			'" .$ro4player2score ."',
			'" .$ro4player3 ."',
			'" .$ro4player3score ."',
			'" .$ro4player4."',
			'" .$ro4player4score."',
			'" .$r3rd4thplayer1."',
			'" .$r3rd4thplayer1score."',
			'" .$r3rd4thplayer2 ."',
			'" .$r3rd4thplayer2score ."',
			'" .$finalsplayer1."',
			'" .$finalsplayer1score."',
			'" .$finalsplayer2 ."',
			'" .$finalsplayer2score ."',
			'" .$winner."',
			'" .$r1m1winner ."',
			'" .$r1m2winner ."',
			'" .$r1m3winner ."',
			'" .$r1m4winner ."',
			'" .$r2m1winner ."',
			'" .$r2m2winner ."',
			'" .$r3rd4thwinner ."',
			'" .$finalswinner ."',
			'" .$ro8player1race ."',
			'" .$ro8player2race ."',
			'" .$ro8player3race ."',
			'" .$ro8player4race ."',
			'" .$ro8player5race ."',
			'" .$ro8player6race ."',
			'" .$ro8player7race ."',
			'" .$ro8player8race ."',
			'" .$ro4player1race ."',
			'" .$ro4player2race ."',
			'" .$ro4player3race ."',
			'" .$ro4player4race ."',
			'" .$r3rd4thplayer1race ."',
			'" .$r3rd4thplayer2race ."',
			'" .$finalsplayer1race ."',
			'" .$finalsplayer2race ."',
			'" .$winnerrace ."',
			'" .$ro8player1flag ."',
			'" .$ro8player2flag ."',
			'" .$ro8player3flag ."',
			'" .$ro8player4flag ."',
			'" .$ro8player5flag ."',
			'" .$ro8player6flag ."',
			'" .$ro8player7flag ."',
			'" .$ro8player8flag ."',
			'" .$ro4player1flag ."',
			'" .$ro4player2flag ."',
			'" .$ro4player3flag ."',
			'" .$ro4player4flag ."',
			'" .$r3rd4thplayer1flag ."',
			'" .$r3rd4thplayer2flag ."',
			'" .$finalsplayer1flag ."',
			'" .$finalsplayer2flag ."',
			'" .$winnerflag ."'
			)
			;");
     
		} else {
        /**Update the data**/
            $tournament_name_id = $_POST['bracket_8player_id'];
            $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_8player SET 
			tournament_name='" .$tournament_name ."',
			ro8player1='" .$ro8player1 ."',
			ro8player1score='" .$ro8player1score ."',
			ro8player2='" .$ro8player2 ."',
			ro8player2score='" .$ro8player2score ."',
			ro8player3='" .$ro8player3 ."',
			ro8player3score='" .$ro8player3score ."',
			ro8player4='" .$ro8player4 ."',
			ro8player4score='" .$ro8player4score ."',
			ro8player5='" .$ro8player5 ."',
			ro8player5score='" .$ro8player5score ."',
			ro8player6='" .$ro8player6 ."',
			ro8player6score='" .$ro8player6score ."',
			ro8player7='" .$ro8player7 ."',
			ro8player7score='" .$ro8player7score ."',
			ro8player8='" .$ro8player8 ."',
			ro8player8score='" .$ro8player8score ."',
			ro4player1='" .$ro4player1 ."',
			ro4player1score='" .$ro4player1score ."',
			ro4player2='" .$ro4player2 ."',
			ro4player2score='" .$ro4player2score ."',
			ro4player3='" .$ro4player3 ."',
			ro4player3score='" .$ro4player3score ."',
			ro4player4='" .$ro4player4 ."',
			ro4player4score='" .$ro4player4score ."',
			r3rd4thplayer1='" .$r3rd4thplayer1 ."',
			r3rd4thplayer1score='" .$r3rd4thplayer1score ."',
			r3rd4thplayer2='" .$r3rd4thplayer2 ."',
			r3rd4thplayer2score='" .$r3rd4thplayer2score ."',
			finalsplayer1='" .$finalsplayer1 ."',
			finalsplayer1score='" .$finalsplayer1score ."',
			finalsplayer2='" .$finalsplayer2 ."',
			finalsplayer2score='" .$finalsplayer2score ."',
			winner='" .$winner ."',
			r1m1winner='" .$r1m1winner ."',
			r1m2winner='" .$r1m2winner ."',
			r1m3winner='" .$r1m3winner ."',
			r1m4winner='" .$r1m4winner ."',
			r2m1winner='" .$r2m1winner ."',
			r2m2winner='" .$r2m2winner ."',
			r3rd4thwinner='" .$r3rd4thwinner ."',
			finalswinner='" .$finalswinner ."',
			ro8player1race='" .$ro8player1race ."',
			ro8player2race='" .$ro8player2race ."',
			ro8player3race='" .$ro8player3race ."',
			ro8player4race='" .$ro8player4race ."',
			ro8player5race='" .$ro8player5race ."',
			ro8player6race='" .$ro8player6race ."',
			ro8player7race='" .$ro8player7race ."',
			ro8player8race='" .$ro8player8race ."',
			ro4player1race='" .$ro4player1race ."',
			ro4player2race='" .$ro4player2race ."',
			ro4player3race='" .$ro4player3race ."',
			ro4player4race='" .$ro4player4race ."',
			r3rd4thplayer1race='" .$r3rd4thplayer1race ."',
			r3rd4thplayer2race='" .$r3rd4thplayer2race ."',
			finalsplayer1race='" .$finalsplayer1race ."',
			finalsplayer2race='" .$finalsplayer2race ."',
			winnerrace='" .$winnerrace ."',
			ro8player1flag='" .$ro8player1flag ."',
			ro8player2flag='" .$ro8player2flag ."',
			ro8player3flag='" .$ro8player3flag ."',
			ro8player4flag='" .$ro8player4flag ."',
			ro8player5flag='" .$ro8player5flag ."',
			ro8player6flag='" .$ro8player6flag ."',
			ro8player7flag='" .$ro8player7flag ."',
			ro8player8flag='" .$ro8player8flag ."',
			ro4player1flag='" .$ro4player1flag ."',
			ro4player2flag='" .$ro4player2flag ."',
			ro4player3flag='" .$ro4player3flag ."',
			ro4player4flag='" .$ro4player4flag ."',
			r3rd4thplayer1flag='" .$r3rd4thplayer1flag ."',
			r3rd4thplayer2flag='" .$r3rd4thplayer2flag ."',
			finalsplayer1flag='" .$finalsplayer1flag ."',
			finalsplayer2flag='" .$finalsplayer2flag ."',
			winnerflag='" .$winnerflag ."'
			WHERE id='" .$tournament_name_id ."'");
        }
		/**Auto-populate each round**/
					$wpdb->query("UPDATE " .$wpdb->prefix. "bracket_8player SET 
					ro4player1='" .$r1m1winner ."', 
					ro4player2='" .$r1m2winner ."', 
					ro4player3='" .$r1m3winner ."', 
					ro4player4='" .$r1m4winner ."', 
					finalsplayer1='" .$r2m1winner ."', 
					finalsplayer2='" .$r2m2winner ."', 
					winner='" .$finalswinner ."' 
					WHERE id='" .$tournament_name_id ."'");
		}  
	/**Auto-populate the 3rd / 4th place match using IF (not equal to) Statements**/	
	if ($ro4player1 != $r2m1winner) { $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_8player SET r3rd4thplayer1='" .$ro4player1 ."' WHERE id='" .$tournament_name_id ."'");
	}
	else if($ro4player2 != $r2m1winner) { $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_8player SET r3rd4thplayer1='" .$ro4player2 ."' WHERE id='" .$tournament_name_id ."'");
	}
	if ($ro4player3 != $r2m2winner) { $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_8player SET r3rd4thplayer2='" .$ro4player3 ."' WHERE id='" .$tournament_name_id ."'");
	}
	else if($ro4player4 != $r2m2winner) { $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_8player SET r3rd4thplayer2='" .$ro4player4 ."' WHERE id='" .$tournament_name_id ."'");
	}
}

function bracket_add_tournament_8p(){
    $tournament_name_id =0;
    if($_GET['id']) $tournament_name_id = $_GET['id'];

    /**Get an specific row from the table wp_bracket_8player**/
    global $edit_tournament_name;
    if ($tournament_name_id) $edit_tournament_name = bracket_get_tournament_namerow($tournament_name_id);   

    /**create meta box**/
    add_meta_box('bracket-meta', __('Tournament Information'), 'bracket_8player_meta_box', 'bracket', 'normal', 'core' );
?>

    <!--Display the form to add a new row-->
    <div class="wrap">
      <div id="faq-wrapper">
        <form method="post" action="?page=bracket-plugin-8p&amp;id=<?php echo $tournament_name_id?>&amp;edit=true">
          <h2>
          <?php if( $tournament_name_id == 0 ) {
                $tf_title = __('Add Tournament');
          }else {
                $tf_title = __('Update Tournament');
          }
          echo $tf_title;
          ?>
          </h2>
          <div id="poststuff" class="metabox-holder">
            <?php do_meta_boxes('bracket', 'normal','low'); ?>
          </div>
          <input type="hidden" name="bracket_8player_id" value="<?php echo $tournament_name_id?>" />
          <input type="submit" value="<?php echo $tf_title;?>" name="bracket_add_tournament_8p" id="bracket_add_tournament_8p" class="button-secondary">
        </form>
      </div>
    </div>
<?php
}

function bracket_manage_tournament_8p(){
?>
<div class="wrap">
  <div class="icon32" id="icon-edit"><br></div>
  <h2><?php _e('8 Player Bracket Plugin Options') ?></h2>
  
  <br />
  <br />
  
  To add an 8 player bracket to a post, enter the following shortcode: <strong>[8pbracket=ID]</strong> (replace ID with the Tournament ID number listed below for your tournament). <br /><br />
  <form method="post" action="?page=bracket-plugin-8p&amp;id=<?php echo $tournament_name_id ?>&amp;edit=true" id="bracket_form_action">
    <p>
        <select name="bracket_action">
            <option value="actions"><?php _e('Actions')?></option>
            <option value="delete"><?php _e('Delete')?></option>
      </select>
      <input type="submit" name="bracket_form_action_changes" class="button-secondary" value="<?php _e('Apply')?>" />
        <input type="button" class="button-secondary" value="<?php _e('Add a new Tournament')?>" onclick="window.location='?page=bracket-plugin-8p&amp;edit=true'" />
    </p>
    <table class="widefat page fixed" cellpadding="0">
      <thead>
        <tr>
        <th id="cb" class="manage-column column-cb check-column" style="" scope="col"> 
          <input type="checkbox"/>
        </th>
          <th class="manage-column"><?php _e('Tournament Name')?></th>
		  <th class="manage-column"><?php _e('Tournament ID')?></th>
 
        </tr>
      </thead>
      <tfoot>
        <tr>
        <th id="cb" class="manage-column column-cb check-column" style="" scope="col">
          <input type="checkbox"/>
        </th>
          <th class="manage-column"><?php _e('Tournament Name')?></th>
		  <th class="manage-column"><?php _e('Tournament ID')?></th>
          
        </tr>
      </tfoot>
      <tbody>
        <?php
          $table = bracket_get_tournament_8p();
          if($table){
           $i=0;
           foreach($table as $tournament_name) { 
               $i++;
        ?>
      <tr class="<?php echo (ceil($i/2) == ($i/2)) ? "" : "alternate"; ?>">
        <th class="check-column" scope="row">
          <input type="checkbox" value="<?php echo $tournament_name->id?>" name="bracket_id[]" />
        </th>
          <td>
          <strong><?php echo $tournament_name->tournament_name?></strong>
          <div class="row-actions-visible">
          <span class="edit"><a href="?page=bracket-plugin-8p&amp;id=<?php echo $tournament_name->id?>&amp;edit=true">Edit</a> | </span>
          <span class="delete"><a href="?page=bracket-plugin-8p&amp;delete=<?php echo $tournament_name->id?>" onclick="return confirm('Are you sure you want to delete this Tournament?');">Delete</a></span>
          </div>
          </td>
          <td><?php echo $tournament_name->id?></td>

        </tr>
        <?php
           }
        }
        else{   
      ?>
        <tr><td colspan="4"><?php _e('There is no data.')?></td></tr>   
        <?php
      }
        ?>   
      </tbody>
    </table>
    <p>
        <select name="bracket_action-2">
            <option value="actions"><?php _e('Actions')?></option>
            <option value="delete"><?php _e('Delete')?></option>
        </select>
        <input type="submit" name="bracket_form_action_changes-2" class="button-secondary" value="<?php _e('Apply')?>" />
        <input type="button" class="button-secondary" value="<?php _e('Add a new Tournament')?>" onclick="window.location='?page=bracket-plugin-8p&amp;edit=true'" />
    </p>

  </form>
</div>

<?php
}

?>