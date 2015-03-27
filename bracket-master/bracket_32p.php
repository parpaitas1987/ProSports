<?php

/**Get an specific row from the table wp_bracket_32player**/
function bracket_32p_get_tournament_namerow($id) {
    global $wpdb;
    $the_tournament_32p = $wpdb->get_results("SELECT * FROM " .$wpdb->prefix ."bracket_32player WHERE id='".$id."'");
    if(!empty($the_tournament_32p[0])) {
        return $the_tournament_32p[0];
    }
    return;
}

function bracket_32player_meta_box() {
    global $edit_tournament_name;
?>
    <p>Tournament Name: <input size="66px" type="text" name="tournament_name_32p" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->tournament_name;?>" /></p>
<table border="0" cellpadding="0" cellspacing="0" style="font-size: 90%; margin:1em 2em 1em 1em;">
  <tr>
    <td>&#160;</td>
    <td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">First round</td>
    <td colspan="2"></td>
    <td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">Second round</td>
    <td colspan="2"></td>
    <td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">Quarterfinals</td>
    <td colspan="2"></td>
    <td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">Semifinals</td>
    <td colspan="2"></td>
    <td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">Finals</td>
  </tr>
  <tr>
    <td>&#160;</td>
    <td width="25">&#160;</td>
    <td width="150">&#160;</td>
    <td width="25">&#160;</td>
    <td width="10">&#160;</td>
    <td width="10m">&#160;</td>
    <td width="25">&#160;</td>
    <td width="150">&#160;</td>
    <td width="25">&#160;</td>
    <td width="10">&#160;</td>
    <td width="10m">&#160;</td>
    <td width="25">&#160;</td>
    <td width="150">&#160;</td>
    <td width="25">&#160;</td>
    <td width="10">&#160;</td>
    <td width="10m">&#160;</td>
    <td width="25">&#160;</td>
    <td width="150">&#160;</td>
    <td width="25">&#160;</td>
    <td width="10">&#160;</td>
    <td width="10m">&#160;</td>
    <td width="25">&#160;</td>
    <td width="150">&#160;</td>
    <td width="25">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
    <td style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player1;?>" /></td>
    <td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player1score;?>" /></td>
    <td align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player2;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player2score;?>" /></td>
    <td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player1;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player1score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="3"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player2;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player2score;?>" /></td>
    <td rowspan="12" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">3</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player3;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player3score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">4</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player4;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player4score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td colspan="5"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;">1</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro8player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro8player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="8" align="center"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro8player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro8player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2score;?>" /></td>
    <td rowspan="24" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">5</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player5;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player5score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">6</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player6;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player6score;?>" /></td>
    <td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">3</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player3;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player3score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="3"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">4</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player4;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player4score;?>" /></td>
    <td rowspan="12" align="center" style="border-width:2px 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">7</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player7;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player7score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">8</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player8;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player8score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td colspan="10"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro4player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro4player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1score;?>" /></td>
    <td rowspan="2" align="center" style="border-width: 0 0 2px 0; border-style:solid; border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td rowspan="2"></td>
    <td height="7"></td>
    <td rowspan="2" colspan="13"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro4player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro4player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2score;?>" /></td>
    <td rowspan="48" align="center" style="border-width: 2px 2px 2px 0; border-style:solid; border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">9</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player9" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player9;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player9score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player9score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">10</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player10" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player10;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player10score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player10score;?>" /></td>
    <td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">5</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player5;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player5score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="3"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">6</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player6;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player6score;?>" /></td>
    <td rowspan="12" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">11</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player11" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player11;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player11score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player11score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">12</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player12" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player12;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player12score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player12score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td colspan="5"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;">3</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro8player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro8player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="8" align="center"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">4</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro8player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro8player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">13</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player13" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player13;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player13score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player13score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">14</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player14" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player14;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player14score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player14score;?>" /></td>
    <td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">7</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player7;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player7score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="3"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">8</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player8;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player8score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">15</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player15" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player15;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player15score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player15score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">16</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player16" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player16;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player16score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player16score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td colspan="15"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_finalsplayer1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_finalsplayer1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td colspan="19"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_finalsplayer2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_finalsplayer2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">17</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player17" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player17;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player17score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player17score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">18</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player18" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player18;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player18score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player18score;?>" /></td>
    <td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">9</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player9" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player9;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player9score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player9score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="3"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">10</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player10" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player10;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player10score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player10score;?>" /></td>
    <td rowspan="12" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">19</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player19" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player19;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player19score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player19score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">20</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player20" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player20;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player20score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player20score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td colspan="5"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;">5</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro8player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro8player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="8" align="center"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">6</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro8player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro8player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6score;?>" /></td>
    <td rowspan="24" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">21</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player21" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player21;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player21score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player21score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">22</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player22" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player22;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player22score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player22score;?>" /></td>
    <td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">11</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player11" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player11;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player11score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player11score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="3"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">12</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player12" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player12;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player12score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player12score;?>" /></td>
    <td rowspan="12" align="center" style="border-width:2px 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">23</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player23" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player23;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player23score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player23score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">24</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player24" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player24;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player24score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player24score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td colspan="10"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">3</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro4player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro4player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3score;?>" /></td>
  </tr>
  <tr>
    <td rowspan="2"></td>
    <td height="7"></td>
    <td rowspan="2" colspan="13"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">4</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro4player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro4player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid; border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">25</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player25" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player25;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player25score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player25score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">26</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player26" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player26;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player26score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player26score;?>" /></td>
    <td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">13</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player13" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player13;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player13score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player13score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="3"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">14</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player14" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player14;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player14score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player14score;?>" /></td>
    <td rowspan="12" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">27</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player27" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player27;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player27score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player27score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">28</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player28" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player28;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player28score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player28score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td colspan="5"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;">7</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro8player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro8player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="8" align="center"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">8</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro8player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro8player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">29</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player29" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player29;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player29score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player29score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">30</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player30" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player30;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player30score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player30score;?>" /></td>
    <td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">15</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player15" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player15;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player15score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player15score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" colspan="3"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">16</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro16player16" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player16;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro16player16score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player16score;?>" /></td>
    <td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
  <tr>
    <td height="7"></td>
    <td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">31</td>
    <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player31" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player31;?>" /></td>
    <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player31score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player31score;?>" /></td>
  </tr>
  <tr>
    <td height="7"></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">32</td>
    <td style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input type="text" name="bracket_ro32player32" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player32;?>" /></td>
    <td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9"><input size="2px" type="text" name="bracket_ro32player32score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player32score;?>" /></td>
    <td align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
  </tr>
</table>
<br />
<br />


	<p>3rd 4th Player 1: <input type="text" name="bracket_r3rd4thplayer1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1;?>" /></p>
	<p>3rd 4th Player 1 Score: <input type="text" name="bracket_r3rd4thplayer1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1score;?>" /></p>
	<p>3rd 4th Player 2: <input type="text" name="bracket_r3rd4thplayer2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2;?>" /></p>
	<p>3rd 4th Player 2 Score: <input type="text" name="bracket_r3rd4thplayer2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2score;?>" /></p>

	<br />
	<p><strong>Winner: </strong><input type="text" name="bracket_winner" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->winner;?>" /></p>

<br />
<br />
	
<?php 
}



function bracket_action(){
    global $wpdb;

    /**Delete the data if the variable "delete" is set**/
    if(isset($_GET['delete'])) {
        $_GET['delete'] = absint($_GET['delete']);
        $wpdb->query("DELETE FROM " .$wpdb->prefix ."bracket_32player WHERE id='" .$_GET['delete']."'");
    }

    /**Process the changes in the custom table**/
    if(isset($_POST['bracket_add_tournament_32p']) and isset($_POST['tournament_name_32p']) and isset($_POST['bracket_ro16player1']) ) {   
        /**Add new row in the custom table**/
        $tournament_name = $_POST['tournament_name_32p'];
        $ro32player1 = $_POST['bracket_ro32player1'];
        $ro32player1score = $_POST['bracket_ro32player1score'];
        $ro32player2 = $_POST['bracket_ro32player2'];
		$ro32player2score = $_POST['bracket_ro32player2score'];
		$ro32player3 = $_POST['bracket_ro32player3'];
		$ro32player3score = $_POST['bracket_ro32player3score'];
		$ro32player4 = $_POST['bracket_ro32player4'];
		$ro32player4score = $_POST['bracket_ro32player4score'];
		$ro32player5 = $_POST['bracket_ro32player5'];
		$ro32player5score = $_POST['bracket_ro32player5score'];
		$ro32player6 = $_POST['bracket_ro32player6'];
		$ro32player6score = $_POST['bracket_ro32player6score'];
		$ro32player7 = $_POST['bracket_ro32player7'];
		$ro32player7score = $_POST['bracket_ro32player7score'];
		$ro32player8 = $_POST['bracket_ro32player8'];
		$ro32player8score = $_POST['bracket_ro32player8score'];	
        $ro32player9 = $_POST['bracket_ro32player9'];
        $ro32player9score = $_POST['bracket_ro32player9score'];
        $ro32player10 = $_POST['bracket_ro32player10'];
		$ro32player10score = $_POST['bracket_ro32player10score'];
		$ro32player11 = $_POST['bracket_ro32player11'];
		$ro32player11score = $_POST['bracket_ro32player11score'];
		$ro32player12 = $_POST['bracket_ro32player12'];
		$ro32player12score = $_POST['bracket_ro32player12score'];
		$ro32player13 = $_POST['bracket_ro32player13'];
		$ro32player13score = $_POST['bracket_ro32player13score'];
		$ro32player14 = $_POST['bracket_ro32player14'];
		$ro32player14score = $_POST['bracket_ro32player14score'];
		$ro32player15 = $_POST['bracket_ro32player15'];
		$ro32player15score = $_POST['bracket_ro32player15score'];
		$ro32player16 = $_POST['bracket_ro32player16'];
		$ro32player16score = $_POST['bracket_ro32player16score'];
        $ro32player17 = $_POST['bracket_ro32player17'];
        $ro32player17score = $_POST['bracket_ro32player17score'];
        $ro32player18 = $_POST['bracket_ro32player18'];
		$ro32player18score = $_POST['bracket_ro32player18score'];
		$ro32player19 = $_POST['bracket_ro32player19'];
		$ro32player19score = $_POST['bracket_ro32player19score'];
		$ro32player20 = $_POST['bracket_ro32player20'];
		$ro32player20score = $_POST['bracket_ro32player20score'];
		$ro32player21 = $_POST['bracket_ro32player21'];
		$ro32player21score = $_POST['bracket_ro32player21score'];
		$ro32player22 = $_POST['bracket_ro32player22'];
		$ro32player22score = $_POST['bracket_ro32player22score'];
		$ro32player23 = $_POST['bracket_ro32player23'];
		$ro32player23score = $_POST['bracket_ro32player23score'];
		$ro32player24 = $_POST['bracket_ro32player24'];
		$ro32player24score = $_POST['bracket_ro32player24score'];	
        $ro32player25 = $_POST['bracket_ro32player25'];
        $ro32player25score = $_POST['bracket_ro32player25score'];
        $ro32player26 = $_POST['bracket_ro32player26'];
		$ro32player26score = $_POST['bracket_ro32player26score'];
		$ro32player27 = $_POST['bracket_ro32player27'];
		$ro32player27score = $_POST['bracket_ro32player27score'];
		$ro32player28 = $_POST['bracket_ro32player28'];
		$ro32player28score = $_POST['bracket_ro32player28score'];
		$ro32player29 = $_POST['bracket_ro32player29'];
		$ro32player29score = $_POST['bracket_ro32player29score'];
		$ro32player30 = $_POST['bracket_ro32player30'];
		$ro32player30score = $_POST['bracket_ro32player30score'];
		$ro32player31 = $_POST['bracket_ro32player31'];
		$ro32player31score = $_POST['bracket_ro32player31score'];
		$ro32player32 = $_POST['bracket_ro32player32'];
		$ro32player32score = $_POST['bracket_ro32player32score'];
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

        if(empty($_POST['bracket_32player_id'])) {
            $wpdb->query("INSERT INTO " .$wpdb->prefix ."bracket_32player(tournament_name,ro32player1,ro32player1score,ro32player2,ro32player2score,ro32player3,ro32player3score,ro32player4,ro32player4score,ro32player5,ro32player5score,ro32player6,ro32player6score,ro32player7,ro32player7score,ro32player8,ro32player8score,ro32player9,ro32player9score,ro32player10,ro32player10score,ro32player11,ro32player11score,ro32player12,ro32player12score,ro32player13,ro32player13score,ro32player14,ro32player14score,ro32player15,ro32player15score,ro32player16,ro32player16score,ro32player17,ro32player17score,ro32player18,ro32player18score,ro32player19,ro32player19score,ro32player20,ro32player20score,ro32player21,ro32player21score,ro32player22,ro32player22score,ro32player23,ro32player23score,ro32player24,ro32player24score,ro32player25,ro32player25score,ro32player26,ro32player26score,ro32player27,ro32player27score,ro32player28,ro32player28score,ro32player29,ro32player29score,ro32player30,ro32player30score,ro32player31,ro32player31score,ro32player32,ro32player32score,ro16player1,ro16player1score,ro16player2,ro16player2score,ro16player3,ro16player3score,ro16player4,ro16player4score,ro16player5,ro16player5score,ro16player6,ro16player6score,ro16player7,ro16player7score,ro16player8,ro16player8score,ro16player9,ro16player9score,ro16player10,ro16player10score,ro16player11,ro16player11score,ro16player12,ro16player12score,ro16player13,ro16player13score,ro16player14,ro16player14score,ro16player15,ro16player15score,ro16player16,ro16player16score,ro8player1,ro8player1score,ro8player2,ro8player2score,ro8player3,ro8player3score,ro8player4,ro8player4score,ro8player5,ro8player5score,ro8player6,ro8player6score,ro8player7,ro8player7score,ro8player8,ro8player8score,ro4player1,ro4player1score,ro4player2,ro4player2score,ro4player3,ro4player3score,ro4player4,ro4player4score,r3rd4thplayer1,r3rd4thplayer1score,r3rd4thplayer2,r3rd4thplayer2score,finalsplayer1,finalsplayer1score,finalsplayer2,finalsplayer2score,winner) VALUES('" .$tournament_name ."','" .$ro32player1."','" .$ro32player1score."','" .$ro32player2 ."','" .$ro32player2score ."','" .$ro32player3 ."','" .$ro32player3score ."','" .$ro32player4."','" .$ro32player4score."','" .$ro32player5."','" .$ro32player5score."','" .$ro32player6."','" .$ro32player6score."','" .$ro32player7."','" .$ro32player7score."','" .$ro32player8."','" .$ro32player8score."','" .$ro32player9."','" .$ro32player9score."','" .$ro32player10 ."','" .$ro32player10score ."','" .$ro32player11 ."','" .$ro32player11score ."','" .$ro32player12."','" .$ro32player12score."','" .$ro32player13."','" .$ro32player13score."','" .$ro32player14."','" .$ro32player14score."','" .$ro32player15."','" .$ro32player15score."','" .$ro32player16."','" .$ro32player16score."','" .$ro32player17."','" .$ro32player17score."','" .$ro32player18 ."','" .$ro32player18score ."','" .$ro32player19 ."','" .$ro32player19score ."','" .$ro32player20."','" .$ro32player20score."','" .$ro32player21."','" .$ro32player21score."','" .$ro32player22."','" .$ro32player22score."','" .$ro32player23."','" .$ro32player23score."','" .$ro32player24."','" .$ro32player24score."','" .$ro32player25."','" .$ro32player25score."','" .$ro32player26 ."','" .$ro32player26score ."','" .$ro32player27 ."','" .$ro32player27score ."','" .$ro32player28."','" .$ro32player28score."','" .$ro32player29."','" .$ro32player29score."','" .$ro32player30."','" .$ro32player30score."','" .$ro32player31."','" .$ro32player31score."','" .$ro32player32."','" .$ro32player32score."','" .$ro16player1."','" .$ro16player1score."','" .$ro16player2 ."','" .$ro16player2score ."','" .$ro16player3 ."','" .$ro16player3score ."','" .$ro16player4."','" .$ro16player4score."','" .$ro16player5."','" .$ro16player5score."','" .$ro16player6."','" .$ro16player6score."','" .$ro16player7."','" .$ro16player7score."','" .$ro16player8."','" .$ro16player8score."','" .$ro16player9."','" .$ro16player9score."','" .$ro16player10 ."','" .$ro16player10score ."','" .$ro16player11 ."','" .$ro16player11score ."','" .$ro16player12."','" .$ro16player12score."','" .$ro16player13."','" .$ro16player13score."','" .$ro16player14."','" .$ro16player14score."','" .$ro16player15."','" .$ro16player15score."','" .$ro16player16."','" .$ro16player16score."','" .$ro8player1."','" .$ro8player1score."','" .$ro8player2 ."','" .$ro8player2score ."','" .$ro8player3 ."','" .$ro8player3score ."','" .$ro8player4."','" .$ro8player4score."','" .$ro8player5."','" .$ro8player5score."','" .$ro8player6."','" .$ro8player6score."','" .$ro8player7."','" .$ro8player7score."','" .$ro8player8."','" .$ro8player8score."','" .$ro4player1."','" .$ro4player1score."','" .$ro4player2 ."','" .$ro4player2score ."','" .$ro4player3 ."','" .$ro4player3score ."','" .$ro4player4."','" .$ro4player4score."','" .$r3rd4thplayer1."','" .$r3rd4thplayer1score."','" .$r3rd4thplayer2 ."','" .$r3rd4thplayer2score ."','" .$finalsplayer1."','" .$finalsplayer1score."','" .$finalsplayer2 ."','" .$finalsplayer2score ."','" .$winner."');");
        } else {
        /**Update the data**/
            $tournament_name_id = $_POST['bracket_32player_id'];
            $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_32player SET tournament_name='" .$tournament_name ."', ro32player1='" .$ro32player1 ."', ro32player1score='" .$ro32player1score ."', ro32player2='" .$ro32player2 ."', ro32player2score='" .$ro32player2score ."', ro32player3='" .$ro32player3 ."', ro32player3score='" .$ro32player3score ."', ro32player4='" .$ro32player4 ."', ro32player4score='" .$ro32player4score ."', ro32player5='" .$ro32player5 ."', ro32player5score='" .$ro32player5score ."', ro32player6='" .$ro32player6 ."', ro32player6score='" .$ro32player6score ."', ro32player7='" .$ro32player7 ."', ro32player7score='" .$ro32player7score ."', ro32player8='" .$ro32player8 ."', ro32player8score='" .$ro32player8score ."', ro32player9='" .$ro32player9 ."', ro32player9score='" .$ro32player9score."', ro32player10='" .$ro32player10 ."', ro32player10score='" .$ro32player10score ."', ro32player11='" .$ro32player11 ."', ro32player11score='" .$ro32player11score ."', ro32player12='" .$ro32player12 ."', ro32player12score='" .$ro32player12score ."', ro32player13='" .$ro32player13 ."', ro32player13score='" .$ro32player13score ."', ro32player14='" .$ro32player14 ."', ro32player14score='" .$ro32player14score ."', ro32player15='" .$ro32player15 ."', ro32player15score='" .$ro32player15score ."', ro32player16='" .$ro32player16 ."', ro32player16score='" .$ro32player16score ."', ro32player17='" .$ro32player17 ."', ro32player17score='" .$ro32player17score ."', ro32player18='" .$ro32player18 ."', ro32player18score='" .$ro32player18score ."', ro32player19='" .$ro32player19 ."', ro32player19score='" .$ro32player19score ."', ro32player20='" .$ro32player20 ."', ro32player20score='" .$ro32player20score ."', ro32player21='" .$ro32player21 ."', ro32player21score='" .$ro32player21score ."', ro32player22='" .$ro32player22 ."', ro32player22score='" .$ro32player22score ."', ro32player23='" .$ro32player23 ."', ro32player23score='" .$ro32player23score ."', ro32player24='" .$ro32player24 ."', ro32player24score='" .$ro32player24score ."', ro32player25='" .$ro32player25 ."', ro32player25score='" .$ro32player25score."', ro32player26='" .$ro32player26 ."', ro32player26score='" .$ro32player26score ."', ro32player27='" .$ro32player27 ."', ro32player27score='" .$ro32player27score ."', ro32player28='" .$ro32player28 ."', ro32player28score='" .$ro32player28score ."', ro32player29='" .$ro32player29 ."', ro32player29score='" .$ro32player29score ."', ro32player30='" .$ro32player30 ."', ro32player30score='" .$ro32player30score ."', ro32player31='" .$ro32player31 ."', ro32player31score='" .$ro32player31score ."', ro32player32='" .$ro32player32 ."', ro32player32score='" .$ro32player32score ."', ro16player1='" .$ro16player1 ."', ro16player1score='" .$ro16player1score ."', ro16player2='" .$ro16player2 ."', ro16player2score='" .$ro16player2score ."', ro16player3='" .$ro16player3 ."', ro16player3score='" .$ro16player3score ."', ro16player4='" .$ro16player4 ."', ro16player4score='" .$ro16player4score ."', ro16player5='" .$ro16player5 ."', ro16player5score='" .$ro16player5score ."', ro16player6='" .$ro16player6 ."', ro16player6score='" .$ro16player6score ."', ro16player7='" .$ro16player7 ."', ro16player7score='" .$ro16player7score ."', ro16player8='" .$ro16player8 ."', ro16player8score='" .$ro16player8score ."', ro16player9='" .$ro16player9 ."', ro16player9score='" .$ro16player9score ."', ro16player10='" .$ro16player10 ."', ro16player10score='" .$ro16player10score ."', ro16player11='" .$ro16player11 ."', ro16player11score='" .$ro16player11score ."', ro16player12='" .$ro16player12 ."', ro16player12score='" .$ro16player12score ."', ro16player13='" .$ro16player13 ."', ro16player13score='" .$ro16player13score ."', ro16player14='" .$ro16player14 ."', ro16player14score='" .$ro16player14score ."', ro16player15='" .$ro16player15 ."', ro16player15score='" .$ro16player15score ."', ro16player16='" .$ro16player16 ."', ro16player16score='" .$ro16player16score ."', ro8player1='" .$ro8player1 ."', ro8player1score='" .$ro8player1score ."', ro8player2='" .$ro8player2 ."', ro8player2score='" .$ro8player2score ."', ro8player3='" .$ro8player3 ."', ro8player3score='" .$ro8player3score ."', ro8player4='" .$ro8player4 ."', ro8player4score='" .$ro8player4score ."', ro8player5='" .$ro8player5 ."', ro8player5score='" .$ro8player5score ."', ro8player6='" .$ro8player6 ."', ro8player6score='" .$ro8player6score ."', ro8player7='" .$ro8player7 ."', ro8player7score='" .$ro8player7score ."', ro8player8='" .$ro8player8 ."', ro8player8score='" .$ro8player8score ."', ro4player1='" .$ro4player1 ."', ro4player1score='" .$ro4player1score ."', ro4player2='" .$ro4player2 ."', ro4player2score='" .$ro4player2score ."', ro4player3='" .$ro4player3 ."', ro4player3score='" .$ro4player3score ."', ro4player4='" .$ro4player4 ."', ro4player4score='" .$ro4player4score ."', r3rd4thplayer1='" .$r3rd4thplayer1 ."', r3rd4thplayer1score='" .$r3rd4thplayer1score ."', r3rd4thplayer2='" .$r3rd4thplayer2 ."', r3rd4thplayer2score='" .$r3rd4thplayer2score ."', finalsplayer1='" .$finalsplayer1 ."', finalsplayer1score='" .$finalsplayer1score ."', finalsplayer2='" .$finalsplayer2 ."', finalsplayer2score='" .$finalsplayer2score ."', winner='" .$winner ."' WHERE id='" .$tournament_name_id ."'");
        }
    }  
}

function bracket_add_tournament_32p(){
    $tournament_name_id =0;
    if($_GET['id']) $tournament_name_id = $_GET['id'];

    /**Get an specific row from the table wp_bracket_32player**/
    global $edit_tournament_name;
    if ($tournament_name_id) $edit_tournament_name = bracket_32p_get_tournament_namerow($tournament_name_id);   

    /**create meta box**/
    add_meta_box('bracket-meta', __('Tournament Information'), 'bracket_32player_meta_box', 'bracket', 'normal', 'core' );
?>


    <div class="wrap">
      <div id="faq-wrapper">
        <form method="post" action="?page=bracket-plugin-32p">
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
          <input type="hidden" name="bracket_32player_id" value="<?php echo $tournament_name_id?>" />
          <input type="submit" value="<?php echo $tf_title;?>" name="bracket_add_tournament_32p" id="bracket_add_tournament_32p" class="button-secondary">
        </form>
      </div>
    </div>
<?php
}

function bracket_manage_tournament_32p(){
?>
<div class="wrap">
  <div class="icon32" id="icon-edit"><br></div>
  <h2><?php _e('32 Player Bracket Plugin Options') ?></h2>
  <form method="post" action="?page=bracket-plugin-32p" id="bracket_form_action">
    <p>
        <select name="bracket_action">
            <option value="actions"><?php _e('Actions')?></option>
            <option value="delete"><?php _e('Delete')?></option>
      </select>
      <input type="submit" name="bracket_form_action_changes" class="button-secondary" value="<?php _e('Apply')?>" />
        <input type="button" class="button-secondary" value="<?php _e('Add a new Tournament')?>" onclick="window.location='?page=bracket-plugin-32p&amp;edit=true'" />
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
          $table = bracket_get_tournament_32p();
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
          <span class="edit"><a href="?page=bracket-plugin-32p&amp;id=<?php echo $tournament_name->id?>&amp;edit=true">Edit</a> | </span>
          <span class="delete"><a href="?page=bracket-plugin-32p&amp;delete=<?php echo $tournament_name->id?>" onclick="return confirm('Are you sure you want to delete this Tournament?');">Delete</a></span>
          </div>
          </td>
          <td><?php echo $tournament_name->id?></td>

        </tr>
        <?php
           }
        }
        else{   
      ?>
        <tr><td colspan="2"><?php _e('There is no data.')?></td></tr>   
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
        <input type="button" class="button-secondary" value="<?php _e('Add a new Tournament')?>" onclick="window.location='?page=bracket-plugin-32p&amp;edit=true'" />
    </p>

  </form>
</div>

<?php
}
?>