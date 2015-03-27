<?php
/**Get an specific row from the table wp_bracket_16player**/

function bracket_16p_get_tournament_namerow($id) {
    global $wpdb;
    $the_tournament_16p = $wpdb->get_results("SELECT * FROM " .$wpdb->prefix ."bracket_16player WHERE id='".$id."'");
    if(!empty($the_tournament_16p[0])) {
        return $the_tournament_16p[0];
    }
    return;
}

function bracket_16player_meta_box() {
    global $edit_tournament_name;
?>

<p>Input the team names and scores as you want them to appear in the final output bracket for the website.</p><br />

    <p>Tournament Name: <input size="67px" type="text" name="tournament_name_16p" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->tournament_name;?>" /></p>
	<br />
	<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr">
<?php
	/** START - SEE WHICH RADIO BUTTONS SHOULD BE CHECKED**/

	$bracket_ro16player1_status = 'unchecked';
	$bracket_ro16player2_status = 'unchecked';
	$bracket_ro16player3_status = 'unchecked';
	$bracket_ro16player4_status = 'unchecked';
	$bracket_ro16player5_status = 'unchecked';
	$bracket_ro16player6_status = 'unchecked';
	$bracket_ro16player7_status = 'unchecked';
	$bracket_ro16player8_status = 'unchecked';
	$bracket_ro16player9_status = 'unchecked';
	$bracket_ro16player10_status = 'unchecked';
	$bracket_ro16player11_status = 'unchecked';
	$bracket_ro16player12_status = 'unchecked';
	$bracket_ro16player13_status = 'unchecked';
	$bracket_ro16player14_status = 'unchecked';
	$bracket_ro16player15_status = 'unchecked';
	$bracket_ro16player16_status = 'unchecked';
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
	
	
/**Round of 16**/	
	if ($edit_tournament_name->r1m1winner == $edit_tournament_name->ro16player1) { $bracket_ro16player1_status = 'checked';
	}
	else if ($edit_tournament_name->r1m1winner == $edit_tournament_name->ro16player2) { $bracket_ro16player2_status = 'checked';
	}
	
	if ($edit_tournament_name->r1m2winner == $edit_tournament_name->ro16player3) { $bracket_ro16player3_status = 'checked';
	}
	else if ($edit_tournament_name->r1m2winner == $edit_tournament_name->ro16player4) { $bracket_ro16player4_status = 'checked';
	}
	
	if ($edit_tournament_name->r1m3winner == $edit_tournament_name->ro16player5) { $bracket_ro16player5_status = 'checked';
	}
	else if ($edit_tournament_name->r1m3winner == $edit_tournament_name->ro16player6) { $bracket_ro16player6_status = 'checked';
	}
	
	if ($edit_tournament_name->r1m4winner == $edit_tournament_name->ro16player7) { $bracket_ro16player7_status = 'checked';
	}
	else if ($edit_tournament_name->r1m4winner == $edit_tournament_name->ro16player8) { $bracket_ro16player8_status = 'checked';
	}
	
	if ($edit_tournament_name->r1m5winner == $edit_tournament_name->ro16player9) { $bracket_ro16player9_status = 'checked';
	}
	else if ($edit_tournament_name->r1m5winner == $edit_tournament_name->ro16player10) { $bracket_ro16player10_status = 'checked';
	}	
	
	if ($edit_tournament_name->r1m6winner == $edit_tournament_name->ro16player11) { $bracket_ro16player11_status = 'checked';
	}
	else if ($edit_tournament_name->r1m6winner == $edit_tournament_name->ro16player12) { $bracket_ro16player12_status = 'checked';
	}
	
	if ($edit_tournament_name->r1m7winner == $edit_tournament_name->ro16player13) { $bracket_ro16player13_status = 'checked';
	}
	else if ($edit_tournament_name->r1m7winner == $edit_tournament_name->ro16player14) { $bracket_ro16player14_status = 'checked';
	}
	
	if ($edit_tournament_name->r1m8winner == $edit_tournament_name->ro16player15) { $bracket_ro16player15_status = 'checked';
	}
	else if ($edit_tournament_name->r1m8winner == $edit_tournament_name->ro16player16) { $bracket_ro16player16_status = 'checked';
	}	
	
/**Round of 8**/	
	if ($edit_tournament_name->r2m1winner == $edit_tournament_name->ro8player1) { $bracket_ro8player1_status = 'checked';
	}
	else if ($edit_tournament_name->r2m1winner == $edit_tournament_name->ro8player2) { $bracket_ro8player2_status = 'checked';
	}
	
	if ($edit_tournament_name->r2m2winner == $edit_tournament_name->ro8player3) { $bracket_ro8player3_status = 'checked';
	}
	else if ($edit_tournament_name->r2m2winner == $edit_tournament_name->ro8player4) { $bracket_ro8player4_status = 'checked';
	}
	
	if ($edit_tournament_name->r2m3winner == $edit_tournament_name->ro8player5) { $bracket_ro8player5_status = 'checked';
	}
	else if ($edit_tournament_name->r2m3winner == $edit_tournament_name->ro8player6) { $bracket_ro8player6_status = 'checked';
	}
	
	if ($edit_tournament_name->r2m4winner == $edit_tournament_name->ro8player7) { $bracket_ro8player7_status = 'checked';
	}
	else if ($edit_tournament_name->r2m4winner == $edit_tournament_name->ro8player8) { $bracket_ro8player8_status = 'checked';
	}
	
/**Round of 4**/	
	if ($edit_tournament_name->r3m1winner == $edit_tournament_name->ro4player1) { $bracket_ro4player1_status = 'checked';
	}
	else if ($edit_tournament_name->r3m1winner == $edit_tournament_name->ro4player2) { $bracket_ro4player2_status = 'checked';
	}
	
	if ($edit_tournament_name->r3m2winner == $edit_tournament_name->ro4player3) { $bracket_ro4player3_status = 'checked';
	}
	else if ($edit_tournament_name->r3m2winner == $edit_tournament_name->ro4player4) { $bracket_ro4player4_status = 'checked';
	}
	
/**3rd/4th Place**/	
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


<table border="0" cellpadding="0" cellspacing="0" margin:1em 2em 1em 1em;">
<tr>
<td>&#160;</td>
<td align="center" colspan="6" style="border:1px solid #aaa;" bgcolor="#AAD0FF">Round Of 16</td>
<td colspan="2"></td>
<td align="center" colspan="6" style="border:1px solid #aaa;" bgcolor="#AAD0FF">Round Of 8 / Quarterfinals</td>
<td colspan="2"></td>
<td align="center" colspan="6" style="border:1px solid #aaa;" bgcolor="#AAD0FF">Round Of 4 / Semifinals</td>
<td colspan="2"></td>
<td align="center" colspan="6" style="border:1px solid #aaa;" bgcolor="#F7F6A8">Finals</td>
</tr>
<tr>
<td width="4" rowspan="2" >&#160;</td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2">&#160;</td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Player</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Score</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Winner</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Race</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Flag</div></td>
<td width="10" rowspan="2">&#160;
  <div align="center"></div></td>
<td width="10" rowspan="2">&#160;
  <div align="center"></div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2">&#160;&#160;&#160;
  <div align="center"></div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Player</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Score</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Winner</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Race</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Flag</div></td>
<td width="10" rowspan="2">&#160;
  <div align="center"></div></td>
<td width="10" rowspan="2">&#160;
  <div align="center"></div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2">&#160;&#160;&#160;
  <div align="center"></div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Player</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Score</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Winner</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Race</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Flag</div></td>
<td width="10" rowspan="2">&#160;
  <div align="center"></div></td>
<td width="10" rowspan="2">&#160;
  <div align="center"></div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2">&#160;&#160;&#160;
  <div align="center"></div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Player</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Score</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Winner</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Race</div></td>
<td style="border:1px solid #aaa;" bgcolor="#F2F2F2"><div align="center">Flag</div></td>
</tr>
<tr>
  <td colspan="6">&nbsp;</td>
  <td colspan="6">&nbsp;</td>
  <td colspan="6">&nbsp;</td>
  <td colspan="6">&nbsp;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td width="25" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
<td width="139" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="10px" type="text" name="bracket_ro16player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player1;?>" /></td>
<td width="30" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px"  type="text" name="bracket_ro16player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player1score;?>" /></td>
<td width="30" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa; text-align: center; "><input type="radio"  name="bracket_r1m1winner" id="ro16player1" <?php echo $bracket_ro16player1_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player1;?>"></td>
<td width="30" bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player1race" id="ro16player1race">
		<option <?php if ($edit_tournament_name->ro16player1race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player1race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player1race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player1race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td width="31" align="center" bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player1flag" id="ro16player1flag">
		<option <?php if ($edit_tournament_name->ro16player1flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player1flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" style="border:1px solid #aaa;">2</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="10px" type="text" name="bracket_ro16player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player2;?>" />
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player2score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; text-align: center; border:1px solid #aaa;"><input type="radio" name="bracket_r1m1winner" id="ro16player2" <?php echo $bracket_ro16player2_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player2;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player2race" id="ro16player2race">
		<option <?php if ($edit_tournament_name->ro16player2race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player2race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player2race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player2race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player2flag" id="ro16player2flag">
		<option <?php if ($edit_tournament_name->ro16player2flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player2flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:1px 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="7">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 1px; border-style:solid;border-color:black;">&#160;</td>
<td width="25" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
<td width="150" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="10px" type="text" name="bracket_ro8player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1;?>" /></td>
<td width="30" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro8player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1score;?>" /></td>
<td width="30" style="text-align: center; border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="radio"  name="bracket_r2m1winner" id="ro8player1" <?php echo $bracket_ro8player1_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1;?>"></td>
<td width="30" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro8player1race" id="ro8player1race">
		<option <?php if ($edit_tournament_name->ro8player1race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player1race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player1race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player1race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td width="30" align="center" bgcolor="#F9F9F9" style="border:1px solid #aaa;">
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
		<option <?php if ($edit_tournament_name->ro8player1flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro8player1flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;"></td>
</tr>
<tr>
<td colspan="7">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2 </td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="10px" type="text" name="bracket_ro8player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="2px" name="bracket_ro8player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r2m1winner" id="ro8player2" <?php echo $bracket_ro8player2_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro8player2race" id="ro8player2race">
		<option <?php if ($edit_tournament_name->ro8player2race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player2race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player2race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player2race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro8player2flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro8player2flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td rowspan="8" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;"></td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">3</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="10px" type="text" name="bracket_ro16player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player3;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player3score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m2winner" id="ro16player3" <?php echo $bracket_ro16player3_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player3;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player3race" id="ro16player3race">
		<option <?php if ($edit_tournament_name->ro16player3race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player3race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player3race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player3race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player3flag" id="ro16player3flag">
		<option <?php if ($edit_tournament_name->ro16player3flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player3flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 1px 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">4</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="10px" type="text" name="bracket_ro16player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player4;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player4score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m2winner" id="ro16player4" <?php echo $bracket_ro16player4_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player4;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player4race" id="ro16player4race">
		<option <?php if ($edit_tournament_name->ro16player4race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player4race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player4race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player4race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player4flag" id="ro16player4flag">
		<option <?php if ($edit_tournament_name->ro16player4flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player4flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td height="14" colspan="2"></td>
<td colspan="5"></td>
<td colspan="8" rowspan="2">&#160;</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td width="25" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
<td width="150" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="10px" type="text" name="bracket_ro4player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1;?>" /></td>
<td width="30" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro4player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1score;?>" /></td>
<td width="30" style="text-align: center; border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="radio"  name="bracket_r3m1winner" id="ro4player1" <?php echo $bracket_ro4player1_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1;?>"></td>
<td width="30" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro4player1race" id="ro4player1race">
		<option <?php if ($edit_tournament_name->ro4player1race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player1race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro4player1race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro4player1race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td width="30" align="center" bgcolor="#F9F9F9" style="border:1px solid #aaa;">
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
		<option <?php if ($edit_tournament_name->ro4player1flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro4player1flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td height="14" colspan="2"></td>
<td colspan="5"></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro4player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro4player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r3m1winner" id="ro4player2" <?php echo $bracket_ro4player2_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro4player2race" id="ro4player2race">
		<option <?php if ($edit_tournament_name->ro4player2race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player2race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro4player2race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro4player2race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro4player2flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro4player2flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td rowspan="16" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">5</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player5;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player5score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m3winner" id="ro16player5" <?php echo $bracket_ro16player5_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player5;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player5race" id="ro16player5race">
		<option <?php if ($edit_tournament_name->ro16player5race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player5race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player5race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player5race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player5flag" id="ro16player5flag">
		<option <?php if ($edit_tournament_name->ro16player5flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player5flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">6</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player6;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player6score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m3winner" id="ro16player6" <?php echo $bracket_ro16player6_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player6;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player6race" id="ro16player6race">
		<option <?php if ($edit_tournament_name->ro16player6race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player6race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player6race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player6race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player6flag" id="ro16player6flag">
		<option <?php if ($edit_tournament_name->ro16player6flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player6flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:1px 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="7">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">3</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro8player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r2m2winner" id="ro8player3" <?php echo $bracket_ro8player3_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro8player3race" id="ro8player3race">
		<option <?php if ($edit_tournament_name->ro8player3race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player3race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player3race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player3race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro8player3flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro8player3flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
</tr>
<tr>
<td colspan="7">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">4</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro8player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r2m2winner" id="ro8player4" <?php echo $bracket_ro8player4_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro8player4race" id="ro8player4race">
		<option <?php if ($edit_tournament_name->ro8player4race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player4race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player4race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player4race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro8player4flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro8player4flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">7</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player7;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player7score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m4winner" id="ro16player7" <?php echo $bracket_ro16player7_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player7;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player7race" id="ro16player7race">
		<option <?php if ($edit_tournament_name->ro16player7race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player7race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player7race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player7race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player7flag" id="ro16player7flag">
		<option <?php if ($edit_tournament_name->ro16player7flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player7flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 1px 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">8</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player8;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player8score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m4winner" id="ro16player8" <?php echo $bracket_ro16player8_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player8;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player8race" id="ro16player8race">
		<option <?php if ($edit_tournament_name->ro16player8race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player8race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player8race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player8race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player8flag" id="ro16player8flag">
		<option <?php if ($edit_tournament_name->ro16player8flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player8flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td height="14" colspan="2"></td>
<td colspan="15"></td>
<td colspan="6" rowspan="2">&#160;</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td width="25" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
<td width="150" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="10px" type="text" name="bracket_finalsplayer1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1;?>" /></td>
<td width="30" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_finalsplayer1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1score;?>" /></td>
<td width="30" style="text-align: center; border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="radio"  name="bracket_finalswinner" id="finalsplayer1" <?php echo $bracket_finalsplayer1_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1;?>" /></td>
<td width="30" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_finalsplayer1race" id="finalsplayer1race">
		<option <?php if ($edit_tournament_name->finalsplayer1race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->finalsplayer1race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->finalsplayer1race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->finalsplayer1race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td width="30" align="center" bgcolor="#F9F9F9" style="border:1px solid #aaa;">
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
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->finalsplayer1flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
</tr>
<tr>
<td height="14" colspan="2"></td>
<td colspan="15"></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_finalsplayer2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_finalsplayer2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_finalswinner" id="finalsplayer2" <?php echo $bracket_finalsplayer2_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_finalsplayer2race" id="finalsplayer2race">
		<option <?php if ($edit_tournament_name->finalsplayer2race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->finalsplayer2race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->finalsplayer2race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->finalsplayer2race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->finalsplayer2flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">9</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player9" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player9;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player9score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player9score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m5winner" id="ro16player9" <?php echo $bracket_ro16player9_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player9;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player9race" id="ro16player9race">
		<option <?php if ($edit_tournament_name->ro16player9race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player9race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player9race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player9race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player9flag" id="ro16player9flag">
		<option <?php if ($edit_tournament_name->ro16player9flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player9flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">10</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player10" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player10;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player10score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player10score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m5winner" id="ro16player10" <?php echo $bracket_ro16player10_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player10;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player10race" id="ro16player10race">
		<option <?php if ($edit_tournament_name->ro16player10race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player10race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player10race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player10race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player10flag" id="ro16player10flag">
		<option <?php if ($edit_tournament_name->ro16player10flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player10flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:1px 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="7">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">5</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro8player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r2m3winner" id="ro8player5" <?php echo $bracket_ro8player5_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro8player5race" id="ro8player5race">
		<option <?php if ($edit_tournament_name->ro8player5race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player5race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player5race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player5race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro8player5flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro8player5flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="7">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">6</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro8player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r2m3winner" id="ro8player6" <?php echo $bracket_ro8player6_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro8player6race" id="ro8player6race">
		<option <?php if ($edit_tournament_name->ro8player6race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player6race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player6race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player6race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro8player6flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro8player6flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
<td rowspan="8" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">11</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player11" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player11;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player11score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player11score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m6winner" id="ro16player11" <?php echo $bracket_ro16player11_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player11;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player11race" id="ro16player11race">
		<option <?php if ($edit_tournament_name->ro16player11race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player11race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player11race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player11race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player11flag" id="ro16player11flag">
		<option <?php if ($edit_tournament_name->ro16player11flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player11flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 1px 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">12</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player12" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player12;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player12score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player12score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m6winner" id="ro16player12" <?php echo $bracket_ro16player12_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player12;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player12race" id="ro16player12race">
		<option <?php if ($edit_tournament_name->ro16player12race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player12race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player12race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player12race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player12flag" id="ro16player12flag">
		<option <?php if ($edit_tournament_name->ro16player12flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player12flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td height="14" colspan="2"></td>
<td colspan="5"></td>
<td colspan="8" rowspan="2">&#160;</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">3</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro4player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro4player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r3m2winner" id="ro4player3" <?php echo $bracket_ro4player3_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro4player3race" id="ro4player3race">
		<option <?php if ($edit_tournament_name->ro4player3race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player3race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro4player3race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro4player3race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro4player3flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro4player3flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
</tr>
<tr>
<td height="14" colspan="2"></td>
<td colspan="5"></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">4</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro4player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro4player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r3m2winner" id="ro4player4" <?php echo $bracket_ro4player4_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro4player4race" id="ro4player4race">
		<option <?php if ($edit_tournament_name->ro4player4race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro4player4race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro4player4race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro4player4race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro4player4flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro4player4flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">13</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player13" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player13;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player13score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player13score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m7winner" id="ro16player13" <?php echo $bracket_ro16player13_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player13;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player13race" id="ro16player13race">
		<option <?php if ($edit_tournament_name->ro16player13race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player13race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player13race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player13race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player13flag" id="ro16player13flag">
		<option <?php if ($edit_tournament_name->ro16player13flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player13flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">14</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player14" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player14;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player14score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player14score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m7winner" id="ro16player14" <?php echo $bracket_ro16player14_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player14;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player14race" id="ro16player14race">
		<option <?php if ($edit_tournament_name->ro16player14race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player14race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player14race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player14race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player14flag" id="ro16player14flag">
		<option <?php if ($edit_tournament_name->ro16player14flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player14flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:1px 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="7">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">7</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro8player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r2m4winner" id="ro8player7" <?php echo $bracket_ro8player7_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro8player7race" id="ro8player7race">
		<option <?php if ($edit_tournament_name->ro8player7race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player7race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player7race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player7race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro8player7flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro8player7flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
<td colspan="9"></td>
<td colspan="6" rowspan="1" align="center" style="border:1px solid #aaa;" bgcolor="#FFDAB9">Third place</td>
</tr>
<tr>
<td colspan="7">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">8</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro8player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro8player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r2m4winner" id="ro8player8" <?php echo $bracket_ro8player8_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro8player8race" id="ro8player8race">
		<option <?php if ($edit_tournament_name->ro8player8race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro8player8race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro8player8race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro8player8race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->ro8player8flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro8player8flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;"></td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">15</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player15" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player15;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player15score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player15score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m8winner" id="ro16player15" <?php echo $bracket_ro16player15_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player15;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player15race" id="ro16player15race">
		<option <?php if ($edit_tournament_name->ro16player15race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player15race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player15race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player15race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player15flag" id="ro16player15flag">
		<option <?php if ($edit_tournament_name->ro16player15flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player15flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:0 1px 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="16"></td>
<td rowspan="1" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
<td rowspan="1" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="10px" type="text" name="bracket_r3rd4thplayer1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1;?>" /></td>
<td rowspan="1" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_r3rd4thplayer1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1score;?>" /></td>
<td rowspan="1" bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r3rd4thwinner" id="r3rd4thplayer1" <?php echo $bracket_r3rd4thplayer1_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1;?>" /></td>
<td rowspan="1" bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_r3rd4thplayer1race" id="r3rd4thplayer1race">
		<option <?php if ($edit_tournament_name->r3rd4thplayer1race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td rowspan="1" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer1flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
</tr>
<tr>
<td colspan="1" align="center">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">16</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_ro16player16" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player16;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_ro16player16score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player16score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r1m8winner" id="ro16player16"  <?php echo $bracket_ro16player16_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player16;?>"></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_ro16player16race" id="ro16player16race">
		<option <?php if ($edit_tournament_name->ro16player16race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player16race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->ro16player16race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->ro16player16race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
		<select name="bracket_ro16player16flag" id="ro16player16flag">
		<option <?php if ($edit_tournament_name->ro16player16flag == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Canada") { echo "selected"; } ?>>Canada</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "France") { echo "selected"; } ?>>France</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Germany") { echo "selected"; } ?>>Germany</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Ireland") { echo "selected"; } ?>>Ireland</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Korea") { echo "selected"; } ?>>Korea</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Scotland") { echo "selected"; } ?>>Scotland</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Sweden") { echo "selected"; } ?>>Sweden</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "UK") { echo "selected"; } ?>>UK</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Ukraine") { echo "selected"; } ?>>Ukraine</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "USA") { echo "selected"; } ?>>USA</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Wales") { echo "selected"; } ?>>Wales</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Denmark") { echo "selected"; } ?>>Denmark</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Romania") { echo "selected"; } ?>>Romania</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Mexico") { echo "selected"; } ?>>Mexico</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Australia") { echo "selected"; } ?>>Australia</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Greece") { echo "selected"; } ?>>Greece</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Spain") { echo "selected"; } ?>>Spain</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "China") { echo "selected"; } ?>>China</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Czech") { echo "selected"; } ?>>Czech</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Europe") { echo "selected"; } ?>>Europe</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->ro16player16flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
		</select>
</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="17" rowspan="2">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input type="text" size="10px" name="bracket_r3rd4thplayer2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;"><input size="2px" type="text" name="bracket_r3rd4thplayer2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2score;?>" /></td>
<td bgcolor="#F9F9F9" style="text-align: center; border:1px solid #aaa;"><input type="radio"  name="bracket_r3rd4thwinner" id="r3rd4thplayer2" <?php echo $bracket_r3rd4thplayer2_status ?> VALUE="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2;?>" /></td>
<td bgcolor="#F9F9F9" style="border:1px solid #aaa;">
		<select name="bracket_r3rd4thplayer2race" id="r3rd4thplayer2race">
		<option <?php if ($edit_tournament_name->r3rd4thplayer2race == "None") { echo "selected"; } ?>>None</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2race == "Protoss") { echo "selected"; } ?>>Protoss</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2race == "Terran") { echo "selected"; } ?>>Terran</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2race == "Zerg") { echo "selected"; } ?>>Zerg</option>
		</select>
</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">
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
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Poland") { echo "selected"; } ?>>Poland</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Holland") { echo "selected"; } ?>>Holland</option>
		<option <?php if ($edit_tournament_name->r3rd4thplayer2flag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
	</select>
</td>
</tr>
</table>
</table>
<br />
<br />
<p><strong>Winner: </strong> <input size="28px" type="text" name="bracket_winner" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->winner;?>" />
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
			<option <?php if ($edit_tournament_name->winnerflag == "Poland") { echo "selected"; } ?>>Poland</option>
			<option <?php if ($edit_tournament_name->winnerflag == "Holland") { echo "selected"; } ?>>Holland</option>
			<option <?php if ($edit_tournament_name->winnerflag == "Taiwan") { echo "selected"; } ?>>Taiwan</option>
			</select>
</p>		
<?php 
}

function bracket_action(){
    global $wpdb;

    /**Delete the data if the variable "delete" is set**/
    if(isset($_GET['delete'])) {
        $_GET['delete'] = absint($_GET['delete']);
        $wpdb->query("DELETE FROM " .$wpdb->prefix ."bracket_16player WHERE id='" .$_GET['delete']."'");
    }

    /**Process the changes in the custom table**/
    if(isset($_POST['bracket_add_tournament_16p']) and isset($_POST['tournament_name_16p']) and isset($_POST['bracket_ro16player1']) and isset($_POST['bracket_ro16player1score']) and isset($_POST['bracket_ro16player2']) and isset($_POST['bracket_ro16player2score']) and isset($_POST['bracket_ro16player3']) and isset($_POST['bracket_ro16player3score']) and isset($_POST['bracket_ro16player4'])and isset($_POST['bracket_ro16player4score']) and isset($_POST['bracket_ro16player5']) and isset($_POST['bracket_ro16player5score']) and isset($_POST['bracket_ro16player6']) and isset($_POST['bracket_ro16player6score']) and isset($_POST['bracket_ro16player7']) and isset($_POST['bracket_ro16player7score']) and isset($_POST['bracket_ro16player8']) and isset($_POST['bracket_ro16player8score']) and isset($_POST['bracket_ro16player9']) and isset($_POST['bracket_ro16player9score']) and isset($_POST['bracket_ro16player10']) and isset($_POST['bracket_ro16player10score']) and isset($_POST['bracket_ro16player11']) and isset($_POST['bracket_ro16player11score']) and isset($_POST['bracket_ro16player12'])and isset($_POST['bracket_ro16player12score']) and isset($_POST['bracket_ro16player13']) and isset($_POST['bracket_ro16player13score']) and isset($_POST['bracket_ro16player14']) and isset($_POST['bracket_ro16player14score']) and isset($_POST['bracket_ro16player15']) and isset($_POST['bracket_ro16player15score']) and isset($_POST['bracket_ro16player16']) and isset($_POST['bracket_ro16player16score']) ) {   
        /**Add new row in the custom table**/
        $tournament_name = $_POST['tournament_name_16p'];
        $ro16player1 = $_POST['bracket_ro16player1'];
        $ro16player1score = $_POST['bracket_ro16player1score'];
        $ro16player2 = $_POST['bracket_ro16player2'];
		$ro16player2score = $_POST['bracket_ro16player2score'];
		$ro16player3 = $_POST['bracket_ro16player3'];
		$ro16player3score = $_POST['bracket_ro16player3score'];
		$ro16player4 = $_POST['bracket_ro16player4'];
		$ro16player4score = $_POST['bracket_ro16player4score'];
		$ro16player5 = $_POST['bracket_ro16player5'];
		$ro16player5score = $_POST['bracket_ro16player5score'];
		$ro16player6 = $_POST['bracket_ro16player6'];
		$ro16player6score = $_POST['bracket_ro16player6score'];
		$ro16player7 = $_POST['bracket_ro16player7'];
		$ro16player7score = $_POST['bracket_ro16player7score'];
		$ro16player8 = $_POST['bracket_ro16player8'];
		$ro16player8score = $_POST['bracket_ro16player8score'];	
        $ro16player9 = $_POST['bracket_ro16player9'];
        $ro16player9score = $_POST['bracket_ro16player9score'];
        $ro16player10 = $_POST['bracket_ro16player10'];
		$ro16player10score = $_POST['bracket_ro16player10score'];
		$ro16player11 = $_POST['bracket_ro16player11'];
		$ro16player11score = $_POST['bracket_ro16player11score'];
		$ro16player12 = $_POST['bracket_ro16player12'];
		$ro16player12score = $_POST['bracket_ro16player12score'];
		$ro16player13 = $_POST['bracket_ro16player13'];
		$ro16player13score = $_POST['bracket_ro16player13score'];
		$ro16player14 = $_POST['bracket_ro16player14'];
		$ro16player14score = $_POST['bracket_ro16player14score'];
		$ro16player15 = $_POST['bracket_ro16player15'];
		$ro16player15score = $_POST['bracket_ro16player15score'];
		$ro16player16 = $_POST['bracket_ro16player16'];
		$ro16player16score = $_POST['bracket_ro16player16score'];		
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
		$r1m5winner = $_POST['bracket_r1m5winner'];
		$r1m6winner = $_POST['bracket_r1m6winner'];
		$r1m7winner = $_POST['bracket_r1m7winner'];
		$r1m8winner = $_POST['bracket_r1m8winner'];
		$r2m1winner = $_POST['bracket_r2m1winner'];
		$r2m2winner = $_POST['bracket_r2m2winner'];
		$r2m3winner = $_POST['bracket_r2m3winner'];
		$r2m4winner = $_POST['bracket_r2m4winner'];
		$r3m1winner = $_POST['bracket_r3m1winner'];
		$r3m2winner = $_POST['bracket_r3m2winner'];
		$r3rd4thwinner = $_POST['bracket_r3rd4thwinner'];		
		$finalswinner = $_POST['bracket_finalswinner'];		
		$ro16player1race = $_POST['bracket_ro16player1race'];
		$ro16player2race = $_POST['bracket_ro16player2race'];
		$ro16player3race = $_POST['bracket_ro16player3race'];
		$ro16player4race = $_POST['bracket_ro16player4race'];
		$ro16player5race = $_POST['bracket_ro16player5race'];
		$ro16player6race = $_POST['bracket_ro16player6race'];
		$ro16player7race = $_POST['bracket_ro16player7race'];
		$ro16player8race = $_POST['bracket_ro16player8race'];
		$ro16player9race = $_POST['bracket_ro16player9race'];
		$ro16player10race = $_POST['bracket_ro16player10race'];
		$ro16player11race = $_POST['bracket_ro16player11race'];
		$ro16player12race = $_POST['bracket_ro16player12race'];
		$ro16player13race = $_POST['bracket_ro16player13race'];
		$ro16player14race = $_POST['bracket_ro16player14race'];
		$ro16player15race = $_POST['bracket_ro16player15race'];
		$ro16player16race = $_POST['bracket_ro16player16race'];
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
		$ro16player1flag = $_POST['bracket_ro16player1flag'];
		$ro16player2flag = $_POST['bracket_ro16player2flag'];
		$ro16player3flag = $_POST['bracket_ro16player3flag'];
		$ro16player4flag = $_POST['bracket_ro16player4flag'];
		$ro16player5flag = $_POST['bracket_ro16player5flag'];
		$ro16player6flag = $_POST['bracket_ro16player6flag'];
		$ro16player7flag = $_POST['bracket_ro16player7flag'];
		$ro16player8flag = $_POST['bracket_ro16player8flag'];
		$ro16player9flag = $_POST['bracket_ro16player9flag'];
		$ro16player10flag = $_POST['bracket_ro16player10flag'];
		$ro16player11flag = $_POST['bracket_ro16player11flag'];
		$ro16player12flag = $_POST['bracket_ro16player12flag'];
		$ro16player13flag = $_POST['bracket_ro16player13flag'];
		$ro16player14flag = $_POST['bracket_ro16player14flag'];
		$ro16player15flag = $_POST['bracket_ro16player15flag'];
		$ro16player16flag = $_POST['bracket_ro16player16flag'];
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

		
		
        if(empty($_POST['bracket_16player_id'])) {
            $wpdb->query("INSERT INTO " .$wpdb->prefix ."bracket_16player(
			tournament_name,
			ro16player1,
			ro16player1score,
			ro16player2,
			ro16player2score,
			ro16player3,
			ro16player3score,
			ro16player4,
			ro16player4score,
			ro16player5,
			ro16player5score,
			ro16player6,
			ro16player6score,
			ro16player7,
			ro16player7score,
			ro16player8,
			ro16player8score,
			ro16player9,
			ro16player9score,
			ro16player10,
			ro16player10score,
			ro16player11,
			ro16player11score,
			ro16player12,
			ro16player12score,
			ro16player13,
			ro16player13score,
			ro16player14,
			ro16player14score,
			ro16player15,
			ro16player15score,
			ro16player16,
			ro16player16score,
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
			ro16player1race,
			ro16player2race,
			ro16player3race,
			ro16player4race,
			ro16player5race,
			ro16player6race,
			ro16player7race,
			ro16player8race,
			ro16player9race,
			ro16player10race,
			ro16player11race,
			ro16player12race,
			ro16player13race,
			ro16player14race,
			ro16player15race,
			ro16player16race,
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
			ro16player1flag,
			ro16player2flag,
			ro16player3flag,
			ro16player4flag,
			ro16player5flag,
			ro16player6flag,
			ro16player7flag,
			ro16player8flag,
			ro16player9flag,
			ro16player10flag,
			ro16player11flag,
			ro16player12flag,
			ro16player13flag,
			ro16player14flag,
			ro16player15flag,
			ro16player16flag,
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
			'" .$ro16player1."',
			'" .$ro16player1score."',
			'" .$ro16player2 ."',
			'" .$ro16player2score ."',
			'" .$ro16player3 ."',
			'" .$ro16player3score ."',
			'" .$ro16player4."',
			'" .$ro16player4score."',
			'" .$ro16player5."',
			'" .$ro16player5score."',
			'" .$ro16player6."',
			'" .$ro16player6score."',
			'" .$ro16player7."',
			'" .$ro16player7score."',
			'" .$ro16player8."',
			'" .$ro16player8score."',
			'" .$ro16player9."',
			'" .$ro16player9score."',
			'" .$ro16player10 ."',
			'" .$ro16player10score ."',
			'" .$ro16player11 ."',
			'" .$ro16player11score ."',
			'" .$ro16player12."',
			'" .$ro16player12score."',
			'" .$ro16player13."',
			'" .$ro16player13score."',
			'" .$ro16player14."',
			'" .$ro16player14score."',
			'" .$ro16player15."',
			'" .$ro16player15score."',
			'" .$ro16player16."',
			'" .$ro16player16score."',
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
			'" .$r1m5winner ."',
			'" .$r1m6winner ."',
			'" .$r1m7winner ."',
			'" .$r1m8winner ."',
			'" .$r2m1winner ."',
			'" .$r2m2winner ."',
			'" .$r2m3winner ."',
			'" .$r2m4winner ."',
			'" .$r3m1winner ."',
			'" .$r3m2winner ."',
			'" .$r3rd4thwinner ."',
			'" .$finalswinner ."',
			'" .$ro16player1race ."',
			'" .$ro16player2race ."',
			'" .$ro16player3race ."',
			'" .$ro16player4race ."',
			'" .$ro16player5race ."',
			'" .$ro16player6race ."',
			'" .$ro16player7race ."',
			'" .$ro16player8race ."',
			'" .$ro16player9race ."',
			'" .$ro16player10race ."',
			'" .$ro16player11race ."',
			'" .$ro16player12race ."',
			'" .$ro16player13race ."',
			'" .$ro16player14race ."',
			'" .$ro16player15race ."',
			'" .$ro16player16race ."',
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
			'" .$ro16player1flag ."',
			'" .$ro16player2flag ."',
			'" .$ro16player3flag ."',
			'" .$ro16player4flag ."',
			'" .$ro16player5flag ."',
			'" .$ro16player6flag ."',
			'" .$ro16player7flag ."',
			'" .$ro16player8flag ."',
			'" .$ro16player9flag ."',
			'" .$ro16player10flag ."',
			'" .$ro16player11flag ."',
			'" .$ro16player12flag ."',
			'" .$ro16player13flag ."',
			'" .$ro16player14flag ."',
			'" .$ro16player15flag ."',
			'" .$ro16player16flag ."',
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
            $tournament_name_id = $_POST['bracket_16player_id'];
            $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_16player SET 
			tournament_name='" .$tournament_name ."',
			ro16player1='" .$ro16player1 ."',
			ro16player1score='" .$ro16player1score ."',
			ro16player2='" .$ro16player2 ."',
			ro16player2score='" .$ro16player2score ."',
			ro16player3='" .$ro16player3 ."',
			ro16player3score='" .$ro16player3score ."',
			ro16player4='" .$ro16player4 ."',
			ro16player4score='" .$ro16player4score ."',
			ro16player5='" .$ro16player5 ."',
			ro16player5score='" .$ro16player5score ."',
			ro16player6='" .$ro16player6 ."',
			ro16player6score='" .$ro16player6score ."',
			ro16player7='" .$ro16player7 ."',
			ro16player7score='" .$ro16player7score ."',
			ro16player8='" .$ro16player8 ."',
			ro16player8score='" .$ro16player8score ."',
			ro16player9='" .$ro16player9 ."',
			ro16player9score='" .$ro16player9score ."',
			ro16player10='" .$ro16player10 ."',
			ro16player10score='" .$ro16player10score ."',
			ro16player11='" .$ro16player11 ."',
			ro16player11score='" .$ro16player11score ."',
			ro16player12='" .$ro16player12 ."',
			ro16player12score='" .$ro16player12score ."',
			ro16player13='" .$ro16player13 ."',
			ro16player13score='" .$ro16player13score ."',
			ro16player14='" .$ro16player14 ."',
			ro16player14score='" .$ro16player14score ."',
			ro16player15='" .$ro16player15 ."',
			ro16player15score='" .$ro16player15score ."',
			ro16player16='" .$ro16player16 ."',
			ro16player16score='" .$ro16player16score ."',
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
			r1m5winner='" .$r1m5winner ."',
			r1m6winner='" .$r1m6winner ."',
			r1m7winner='" .$r1m7winner ."',
			r1m8winner='" .$r1m8winner ."',
			r2m1winner='" .$r2m1winner ."',
			r2m2winner='" .$r2m2winner ."',
			r2m3winner='" .$r2m3winner ."',
			r2m4winner='" .$r2m4winner ."',
			r3m1winner='" .$r3m1winner ."',
			r3m2winner='" .$r3m2winner ."',
			r3rd4thwinner='" .$r3rd4thwinner ."',
			finalswinner='" .$finalswinner ."', 
			ro16player1race='" .$ro16player1race ."',
			ro16player2race='" .$ro16player2race ."',
			ro16player3race='" .$ro16player3race ."',
			ro16player4race='" .$ro16player4race ."',
			ro16player5race='" .$ro16player5race ."',
			ro16player6race='" .$ro16player6race ."',
			ro16player7race='" .$ro16player7race ."',
			ro16player8race='" .$ro16player8race ."',
			ro16player9race='" .$ro16player9race ."',
			ro16player10race='" .$ro16player10race ."',
			ro16player11race='" .$ro16player11race ."',
			ro16player12race='" .$ro16player12race ."',
			ro16player13race='" .$ro16player13race ."',
			ro16player14race='" .$ro16player14race ."',
			ro16player15race='" .$ro16player15race ."',
			ro16player16race='" .$ro16player16race ."',
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
			ro16player1flag='" .$ro16player1flag ."',
			ro16player2flag='" .$ro16player2flag ."',
			ro16player3flag='" .$ro16player3flag ."',
			ro16player4flag='" .$ro16player4flag ."',
			ro16player5flag='" .$ro16player5flag ."',
			ro16player6flag='" .$ro16player6flag ."',
			ro16player7flag='" .$ro16player7flag ."',
			ro16player8flag='" .$ro16player8flag ."',
			ro16player9flag='" .$ro16player9flag ."',
			ro16player10flag='" .$ro16player10flag ."',
			ro16player11flag='" .$ro16player11flag ."',
			ro16player12flag='" .$ro16player12flag ."',
			ro16player13flag='" .$ro16player13flag ."',
			ro16player14flag='" .$ro16player14flag ."',
			ro16player15flag='" .$ro16player15flag ."',
			ro16player16flag='" .$ro16player16flag ."',
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
					$wpdb->query("UPDATE " .$wpdb->prefix. "bracket_16player SET 
					ro8player1='" .$r1m1winner ."', 
					ro8player2='" .$r1m2winner ."', 
					ro8player3='" .$r1m3winner ."', 
					ro8player4='" .$r1m4winner ."', 
					ro8player5='" .$r1m5winner ."', 
					ro8player6='" .$r1m6winner ."',
					ro8player7='" .$r1m7winner ."', 
					ro8player8='" .$r1m8winner ."', 
					ro4player1='" .$r2m1winner ."', 
					ro4player2='" .$r2m2winner ."', 
					ro4player3='" .$r2m3winner ."', 
					ro4player4='" .$r2m4winner ."', 
					finalsplayer1='" .$r3m1winner ."', 
					finalsplayer2='" .$r3m2winner ."', 
					winner='" .$finalswinner ."' 
					WHERE id='" .$tournament_name_id ."'");
		}  
	/**Auto-populate the 3rd / 4th place match using IF (not equal to) Statements**/	
	if ($ro4player1 != $r3m1winner) { $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_16player SET r3rd4thplayer1='" .$ro4player1 ."' WHERE id='" .$tournament_name_id ."'");
	}
	else if($ro4player2 != $r3m1winner) { $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_16player SET r3rd4thplayer1='" .$ro4player2 ."' WHERE id='" .$tournament_name_id ."'");
	}
	if ($ro4player3 != $r3m2winner) { $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_16player SET r3rd4thplayer2='" .$ro4player3 ."' WHERE id='" .$tournament_name_id ."'");
	}
	else if($ro4player4 != $r3m2winner) { $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_16player SET r3rd4thplayer2='" .$ro4player4 ."' WHERE id='" .$tournament_name_id ."'");
	}
}

function bracket_add_tournament_16p(){
    $tournament_name_id =0;
    if($_GET['id']) $tournament_name_id = $_GET['id'];

    /**Get an specific row from the table wp_bracket_16player**/
    global $edit_tournament_name;
    if ($tournament_name_id) $edit_tournament_name = bracket_16p_get_tournament_namerow($tournament_name_id);   

    /**create meta box**/
    add_meta_box('bracket-meta', __('Tournament Information'), 'bracket_16player_meta_box', 'bracket', 'normal', 'core' );
?>

    <!--Display the form to add a new row-->
    <div class="wrap">
      <div id="faq-wrapper">
        <form method="post" action="?page=bracket-plugin-16p&amp;id=<?php echo $tournament_name_id ?>&amp;edit=true">
          <h2>
          <?php if( $tournament_name_id == 0 ) {
                $tf_title = __('Add Tournament');
          }else {
                $tf_title = __('Apply Changes');
          }
          echo $tf_title;
          ?>
          </h2>
          <div id="poststuff" class="metabox-holder">
            <?php do_meta_boxes('bracket', 'normal','low'); ?>
          </div>
          <input type="hidden" name="bracket_16player_id" value="<?php echo $tournament_name_id?>" />
          <input type="submit" value="<?php echo $tf_title;?>" name="bracket_add_tournament_16p" id="bracket_add_tournament_16p" class="button-secondary">
        </form>
      </div>
    </div>
<?php
}
function bracket_manage_tournament_16p(){
?>
<div class="wrap">
  <div class="icon32" id="icon-edit"><br></div>
  <h2><?php _e('16 Player Bracket Plugin Options') ?></h2>
  <form method="post" action="?page=bracket-plugin-16p&amp;id=<?php echo $tournament_name_id ?>&amp;edit=true" id="bracket_form_action">
    <p>
        <select name="bracket_action">
            <option value="actions"><?php _e('Actions')?></option>
            <option value="delete"><?php _e('Delete')?></option>
      </select>
      <input type="submit" name="bracket_form_action_changes" class="button-secondary" value="<?php _e('Apply')?>" />
        <input type="button" class="button-secondary" value="<?php _e('Add a new Tournament')?>" onclick="window.location='?page=bracket-plugin-16p&amp;edit=true'" />
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
          $table = bracket_get_tournament_16p();
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
          <span class="edit"><a href="?page=bracket-plugin-16p&amp;id=<?php echo $tournament_name->id?>&amp;edit=true">Edit</a> | </span>
          <span class="delete"><a href="?page=bracket-plugin-16p&amp;delete=<?php echo $tournament_name->id?>" onclick="return confirm('Are you sure you want to delete this Tournament?');">Delete</a></span>
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
        <input type="button" class="button-secondary" value="<?php _e('Add a new Tournament')?>" onclick="window.location='?page=bracket-plugin-16p&amp;edit=true'" />
    </p>

  </form>
</div>





<?php
}
?>

<script type="text/javascript">
jQuery(document).ready(function(){
	//jQuery('input[type=text]').val('Team');
	
});
</script>
