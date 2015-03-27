<?php

/**Get an specific row from the table wp_bracket_64player**/
function bracket_64p_get_tournament_namerow($id) {
    global $wpdb;
    $the_tournament_64p = $wpdb->get_results("SELECT * FROM " .$wpdb->prefix ."bracket_64player WHERE id='".$id."'");
    if(!empty($the_tournament_64p[0])) {
        return $the_tournament_64p[0];
    }
    return;
}
add_shortcode( '64pbracket-data' , 'bracket_64p_get_tournament_namerow' );
function bracket_64player_meta_box() {
    global $edit_tournament_name;
?>
	<p>Tournament Name: <input type="text" name="tournament_name_64p" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->tournament_name;?>" /></p>
	<p>RO64 Player 1: <input type="text" name="bracket_ro64player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player1;?>" /></p>
    <p>RO64 Player 1 Score: <input type="text" name="bracket_ro64player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player1score;?>" /></p>
    <p>RO64 Player 2: <input type="text" name="bracket_ro64player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player2;?>" /></p>
	<p>RO64 Player 2 Score: <input type="text" name="bracket_ro64player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player2score;?>" /></p>
	<p>RO64 Player 3: <input type="text" name="bracket_ro64player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player3;?>" /></p>
	<p>RO64 Player 3 Score: <input type="text" name="bracket_ro64player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player3score;?>" /></p>
	<p>RO64 Player 4: <input type="text" name="bracket_ro64player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player4;?>" /></p>
	<p>RO64 Player 4 Score: <input type="text" name="bracket_ro64player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player4score;?>" /></p>
	<p>RO64 Player 5: <input type="text" name="bracket_ro64player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player5;?>" /></p>
	<p>RO64 Player 5 Score: <input type="text" name="bracket_ro64player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player5score;?>" /></p>
	<p>RO64 Player 6: <input type="text" name="bracket_ro64player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player6;?>" /></p>
	<p>RO64 Player 6 Score: <input type="text" name="bracket_ro64player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player6score;?>" /></p>
	<p>RO64 Player 7: <input type="text" name="bracket_ro64player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player7;?>" /></p>
	<p>RO64 Player 7 Score: <input type="text" name="bracket_ro64player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player7score;?>" /></p>
	<p>RO64 Player 8: <input type="text" name="bracket_ro64player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player8;?>" /></p>
	<p>RO64 Player 8 Score: <input type="text" name="bracket_ro64player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player8score;?>" /></p>
	<p>RO64 Player 9: <input type="text" name="bracket_ro64player9" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player9;?>" /></p>
    <p>RO64 Player 9 Score: <input type="text" name="bracket_ro64player9score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player9score;?>" /></p>
    <p>RO64 Player 10: <input type="text" name="bracket_ro64player10" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player10;?>" /></p>
	<p>RO64 Player 10 Score: <input type="text" name="bracket_ro64player10score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player10score;?>" /></p>
	<p>RO64 Player 11: <input type="text" name="bracket_ro64player11" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player11;?>" /></p>
	<p>RO64 Player 11 Score: <input type="text" name="bracket_ro64player11score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player11score;?>" /></p>
	<p>RO64 Player 12: <input type="text" name="bracket_ro64player12" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player12;?>" /></p>
	<p>RO64 Player 12 Score: <input type="text" name="bracket_ro64player12score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player12score;?>" /></p>
	<p>RO64 Player 13: <input type="text" name="bracket_ro64player13" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player13;?>" /></p>
	<p>RO64 Player 13 Score: <input type="text" name="bracket_ro64player13score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player13score;?>" /></p>
	<p>RO64 Player 14: <input type="text" name="bracket_ro64player14" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player14;?>" /></p>
	<p>RO64 Player 14 Score: <input type="text" name="bracket_ro64player14score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player14score;?>" /></p>
	<p>RO64 Player 15: <input type="text" name="bracket_ro64player15" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player15;?>" /></p>
	<p>RO64 Player 15 Score: <input type="text" name="bracket_ro64player15score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player15score;?>" /></p>
	<p>RO64 Player 16: <input type="text" name="bracket_ro64player16" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player16;?>" /></p>
	<p>RO64 Player 16 Score: <input type="text" name="bracket_ro64player16score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player16score;?>" /></p>
	<p>RO64 Player 17: <input type="text" name="bracket_ro64player17" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player17;?>" /></p>
    <p>RO64 Player 17 Score: <input type="text" name="bracket_ro64player17score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player17score;?>" /></p>
    <p>RO64 Player 18: <input type="text" name="bracket_ro64player18" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player18;?>" /></p>
	<p>RO64 Player 18 Score: <input type="text" name="bracket_ro64player18score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player18score;?>" /></p>
	<p>RO64 Player 19: <input type="text" name="bracket_ro64player19" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player19;?>" /></p>
	<p>RO64 Player 19 Score: <input type="text" name="bracket_ro64player19score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player19score;?>" /></p>
	<p>RO64 Player 20: <input type="text" name="bracket_ro64player20" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player20;?>" /></p>
	<p>RO64 Player 20 Score: <input type="text" name="bracket_ro64player20score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player20score;?>" /></p>
	<p>RO64 Player 21: <input type="text" name="bracket_ro64player21" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player21;?>" /></p>
	<p>RO64 Player 21 Score: <input type="text" name="bracket_ro64player21score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player21score;?>" /></p>
	<p>RO64 Player 22: <input type="text" name="bracket_ro64player22" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player22;?>" /></p>
	<p>RO64 Player 22 Score: <input type="text" name="bracket_ro64player22score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player22score;?>" /></p>
	<p>RO64 Player 23: <input type="text" name="bracket_ro64player23" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player23;?>" /></p>
	<p>RO64 Player 23 Score: <input type="text" name="bracket_ro64player23score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player23score;?>" /></p>
	<p>RO64 Player 24: <input type="text" name="bracket_ro64player24" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player24;?>" /></p>
	<p>RO64 Player 24 Score: <input type="text" name="bracket_ro64player24score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player24score;?>" /></p>
	<p>RO64 Player 25: <input type="text" name="bracket_ro64player25" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player25;?>" /></p>
    <p>RO64 Player 25 Score: <input type="text" name="bracket_ro64player25score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player25score;?>" /></p>
	<p>RO64 Player 26: <input type="text" name="bracket_ro64player26" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player26;?>" /></p>
	<p>RO64 Player 26 Score: <input type="text" name="bracket_ro64player26score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player26score;?>" /></p>
	<p>RO64 Player 27: <input type="text" name="bracket_ro64player27" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player27;?>" /></p>
	<p>RO64 Player 27 Score: <input type="text" name="bracket_ro64player27score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player27score;?>" /></p>
	<p>RO64 Player 28: <input type="text" name="bracket_ro64player28" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player28;?>" /></p>
	<p>RO64 Player 28 Score: <input type="text" name="bracket_ro64player28score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player28score;?>" /></p>
	<p>RO64 Player 29: <input type="text" name="bracket_ro64player29" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player29;?>" /></p>
	<p>RO64 Player 29 Score: <input type="text" name="bracket_ro64player29score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player29score;?>" /></p>
	<p>RO64 Player 30: <input type="text" name="bracket_ro64player30" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player30;?>" /></p>
	<p>RO64 Player 30 Score: <input type="text" name="bracket_ro64player30score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player30score;?>" /></p>
	<p>RO64 Player 31: <input type="text" name="bracket_ro64player31" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player31;?>" /></p>
	<p>RO64 Player 31 Score: <input type="text" name="bracket_ro64player31score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player31score;?>" /></p>
	<p>RO64 Player 32: <input type="text" name="bracket_ro64player32" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player32;?>" /></p>
	<p>RO64 Player 32 Score: <input type="text" name="bracket_ro64player32score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player32score;?>" /></p>
	<p>RO64 Player 33: <input type="text" name="bracket_ro64player33" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player33;?>" /></p>
    <p>RO64 Player 33 Score: <input type="text" name="bracket_ro64player33score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player33score;?>" /></p>
    <p>RO64 Player 34: <input type="text" name="bracket_ro64player34" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player34;?>" /></p>
	<p>RO64 Player 34 Score: <input type="text" name="bracket_ro64player34score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player34score;?>" /></p>
	<p>RO64 Player 35: <input type="text" name="bracket_ro64player35" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player35;?>" /></p>
	<p>RO64 Player 35 Score: <input type="text" name="bracket_ro64player35score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player35score;?>" /></p>
	<p>RO64 Player 36: <input type="text" name="bracket_ro64player36" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player36;?>" /></p>
	<p>RO64 Player 36 Score: <input type="text" name="bracket_ro64player36score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player36score;?>" /></p>
	<p>RO64 Player 37: <input type="text" name="bracket_ro64player37" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player37;?>" /></p>
	<p>RO64 Player 37 Score: <input type="text" name="bracket_ro64player37score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player37score;?>" /></p>
	<p>RO64 Player 38: <input type="text" name="bracket_ro64player38" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player38;?>" /></p>
	<p>RO64 Player 38 Score: <input type="text" name="bracket_ro64player38score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player38score;?>" /></p>
	<p>RO64 Player 39: <input type="text" name="bracket_ro64player39" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player39;?>" /></p>
	<p>RO64 Player 39 Score: <input type="text" name="bracket_ro64player39score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player39score;?>" /></p>
	<p>RO64 Player 40: <input type="text" name="bracket_ro64player40" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player40;?>" /></p>
	<p>RO64 Player 40 Score: <input type="text" name="bracket_ro64player40score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player40score;?>" /></p>
	<p>RO64 Player 41: <input type="text" name="bracket_ro64player41" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player41;?>" /></p>
    <p>RO64 Player 41 Score: <input type="text" name="bracket_ro64player41score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player41score;?>" /></p>
	<p>RO64 Player 42: <input type="text" name="bracket_ro64player42" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player42;?>" /></p>
    <p>RO64 Player 42 Score: <input type="text" name="bracket_ro64player42score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player42score;?>" /></p>
    <p>RO64 Player 43: <input type="text" name="bracket_ro64player43" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player43;?>" /></p>
	<p>RO64 Player 43 Score: <input type="text" name="bracket_ro64player43score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player43score;?>" /></p>
	<p>RO64 Player 44: <input type="text" name="bracket_ro64player44" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player44;?>" /></p>
	<p>RO64 Player 44 Score: <input type="text" name="bracket_ro64player44score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player44score;?>" /></p>
	<p>RO64 Player 45: <input type="text" name="bracket_ro64player45" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player45;?>" /></p>
	<p>RO64 Player 45 Score: <input type="text" name="bracket_ro64player45score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player45score;?>" /></p>
	<p>RO64 Player 46: <input type="text" name="bracket_ro64player46" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player46;?>" /></p>
	<p>RO64 Player 46 Score: <input type="text" name="bracket_ro64player46score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player46score;?>" /></p>
	<p>RO64 Player 47: <input type="text" name="bracket_ro64player47" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player47;?>" /></p>
	<p>RO64 Player 47 Score: <input type="text" name="bracket_ro64player47score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player47score;?>" /></p>
	<p>RO64 Player 48: <input type="text" name="bracket_ro64player48" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player48;?>" /></p>
	<p>RO64 Player 48 Score: <input type="text" name="bracket_ro64player48score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player48score;?>" /></p>
	<p>RO64 Player 49: <input type="text" name="bracket_ro64player49" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player49;?>" /></p>
	<p>RO64 Player 49 Score: <input type="text" name="bracket_ro64player49score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player49score;?>" /></p>
	<p>RO64 Player 50: <input type="text" name="bracket_ro64player50" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player50;?>" /></p>
    <p>RO64 Player 50 Score: <input type="text" name="bracket_ro64player50score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player50score;?>" /></p>
	<p>RO64 Player 51: <input type="text" name="bracket_ro64player51" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player51;?>" /></p>
    <p>RO64 Player 51 Score: <input type="text" name="bracket_ro64player51score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player51score;?>" /></p>
    <p>RO64 Player 52: <input type="text" name="bracket_ro64player52" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player52;?>" /></p>
	<p>RO64 Player 52 Score: <input type="text" name="bracket_ro64player52score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player52score;?>" /></p>
	<p>RO64 Player 53: <input type="text" name="bracket_ro64player53" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player53;?>" /></p>
	<p>RO64 Player 53 Score: <input type="text" name="bracket_ro64player53score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player53score;?>" /></p>
	<p>RO64 Player 54: <input type="text" name="bracket_ro64player54" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player54;?>" /></p>
	<p>RO64 Player 54 Score: <input type="text" name="bracket_ro64player54score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player54score;?>" /></p>
	<p>RO64 Player 55: <input type="text" name="bracket_ro64player55" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player55;?>" /></p>
	<p>RO64 Player 55 Score: <input type="text" name="bracket_ro64player55score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player55score;?>" /></p>
	<p>RO64 Player 56: <input type="text" name="bracket_ro64player56" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player56;?>" /></p>
	<p>RO64 Player 56 Score: <input type="text" name="bracket_ro64player56score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player56score;?>" /></p>
	<p>RO64 Player 57: <input type="text" name="bracket_ro64player57" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player57;?>" /></p>
	<p>RO64 Player 57 Score: <input type="text" name="bracket_ro64player57score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player57score;?>" /></p>
	<p>RO64 Player 59: <input type="text" name="bracket_ro64player58" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player58;?>" /></p>
    <p>RO64 Player 59 Score: <input type="text" name="bracket_ro64player58score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player58score;?>" /></p>
	<p>RO64 Player 59: <input type="text" name="bracket_ro64player59" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player59;?>" /></p>
    <p>RO64 Player 59 Score: <input type="text" name="bracket_ro64player59score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player59score;?>" /></p>
	<p>RO64 Player 60: <input type="text" name="bracket_ro64player60" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player60;?>" /></p>
	<p>RO64 Player 60 Score: <input type="text" name="bracket_ro64player60score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player60score;?>" /></p>
	<p>RO64 Player 61: <input type="text" name="bracket_ro64player61" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player61;?>" /></p>
	<p>RO64 Player 61 Score: <input type="text" name="bracket_ro64player61score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player61score;?>" /></p>
	<p>RO64 Player 62: <input type="text" name="bracket_ro64player62" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player62;?>" /></p>
	<p>RO64 Player 62 Score: <input type="text" name="bracket_ro64player62score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player62score;?>" /></p>
	<p>RO64 Player 63: <input type="text" name="bracket_ro64player63" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player63;?>" /></p>
    <p>RO64 Player 63 Score: <input type="text" name="bracket_ro64player63score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player63score;?>" /></p>
	<p>RO64 Player 64: <input type="text" name="bracket_ro64player64" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player64;?>" /></p>
    <p>RO64 Player 64 Score: <input type="text" name="bracket_ro64player64score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro64player64score;?>" /></p>
	<br />
	<p>RO32 Player 1: <input type="text" name="bracket_ro32player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player1;?>" /></p>
    <p>RO32 Player 1 Score: <input type="text" name="bracket_ro32player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player1score;?>" /></p>
    <p>RO32 Player 2: <input type="text" name="bracket_ro32player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player2;?>" /></p>
	<p>RO32 Player 2 Score: <input type="text" name="bracket_ro32player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player2score;?>" /></p>
	<p>RO32 Player 3: <input type="text" name="bracket_ro32player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player3;?>" /></p>
	<p>RO32 Player 3 Score: <input type="text" name="bracket_ro32player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player3score;?>" /></p>
	<p>RO32 Player 4: <input type="text" name="bracket_ro32player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player4;?>" /></p>
	<p>RO32 Player 4 Score: <input type="text" name="bracket_ro32player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player4score;?>" /></p>
	<p>RO32 Player 5: <input type="text" name="bracket_ro32player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player5;?>" /></p>
	<p>RO32 Player 5 Score: <input type="text" name="bracket_ro32player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player5score;?>" /></p>
	<p>RO32 Player 6: <input type="text" name="bracket_ro32player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player6;?>" /></p>
	<p>RO32 Player 6 Score: <input type="text" name="bracket_ro32player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player6score;?>" /></p>
	<p>RO32 Player 7: <input type="text" name="bracket_ro32player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player7;?>" /></p>
	<p>RO32 Player 7 Score: <input type="text" name="bracket_ro32player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player7score;?>" /></p>
	<p>RO32 Player 8: <input type="text" name="bracket_ro32player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player8;?>" /></p>
	<p>RO32 Player 8 Score: <input type="text" name="bracket_ro32player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player8score;?>" /></p>
	<p>RO32 Player 9: <input type="text" name="bracket_ro32player9" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player9;?>" /></p>
    <p>RO32 Player 9 Score: <input type="text" name="bracket_ro32player9score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player9score;?>" /></p>
    <p>RO32 Player 10: <input type="text" name="bracket_ro32player10" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player10;?>" /></p>
	<p>RO32 Player 10 Score: <input type="text" name="bracket_ro32player10score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player10score;?>" /></p>
	<p>RO32 Player 11: <input type="text" name="bracket_ro32player11" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player11;?>" /></p>
	<p>RO32 Player 11 Score: <input type="text" name="bracket_ro32player11score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player11score;?>" /></p>
	<p>RO32 Player 12: <input type="text" name="bracket_ro32player12" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player12;?>" /></p>
	<p>RO32 Player 12 Score: <input type="text" name="bracket_ro32player12score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player12score;?>" /></p>
	<p>RO32 Player 13: <input type="text" name="bracket_ro32player13" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player13;?>" /></p>
	<p>RO32 Player 13 Score: <input type="text" name="bracket_ro32player13score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player13score;?>" /></p>
	<p>RO32 Player 14: <input type="text" name="bracket_ro32player14" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player14;?>" /></p>
	<p>RO32 Player 14 Score: <input type="text" name="bracket_ro32player14score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player14score;?>" /></p>
	<p>RO32 Player 15: <input type="text" name="bracket_ro32player15" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player15;?>" /></p>
	<p>RO32 Player 15 Score: <input type="text" name="bracket_ro32player15score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player15score;?>" /></p>
	<p>RO32 Player 16: <input type="text" name="bracket_ro32player16" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player16;?>" /></p>
	<p>RO32 Player 16 Score: <input type="text" name="bracket_ro32player16score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player16score;?>" /></p>
	<p>RO32 Player 17: <input type="text" name="bracket_ro32player17" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player17;?>" /></p>
    <p>RO32 Player 17 Score: <input type="text" name="bracket_ro32player17score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player17score;?>" /></p>
    <p>RO32 Player 18: <input type="text" name="bracket_ro32player18" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player18;?>" /></p>
	<p>RO32 Player 18 Score: <input type="text" name="bracket_ro32player18score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player18score;?>" /></p>
	<p>RO32 Player 19: <input type="text" name="bracket_ro32player19" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player19;?>" /></p>
	<p>RO32 Player 19 Score: <input type="text" name="bracket_ro32player19score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player19score;?>" /></p>
	<p>RO32 Player 20: <input type="text" name="bracket_ro32player20" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player20;?>" /></p>
	<p>RO32 Player 20 Score: <input type="text" name="bracket_ro32player20score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player20score;?>" /></p>
	<p>RO32 Player 21: <input type="text" name="bracket_ro32player21" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player21;?>" /></p>
	<p>RO32 Player 21 Score: <input type="text" name="bracket_ro32player21score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player21score;?>" /></p>
	<p>RO32 Player 22: <input type="text" name="bracket_ro32player22" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player22;?>" /></p>
	<p>RO32 Player 22 Score: <input type="text" name="bracket_ro32player22score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player22score;?>" /></p>
	<p>RO32 Player 23: <input type="text" name="bracket_ro32player23" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player23;?>" /></p>
	<p>RO32 Player 23 Score: <input type="text" name="bracket_ro32player23score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player23score;?>" /></p>
	<p>RO32 Player 24: <input type="text" name="bracket_ro32player24" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player24;?>" /></p>
	<p>RO32 Player 24 Score: <input type="text" name="bracket_ro32player24score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player24score;?>" /></p>
	<p>RO32 Player 25: <input type="text" name="bracket_ro32player25" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player25;?>" /></p>
    <p>RO32 Player 25 Score: <input type="text" name="bracket_ro32player25score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player25score;?>" /></p>
	<p>RO32 Player 26: <input type="text" name="bracket_ro32player26" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player26;?>" /></p>
	<p>RO32 Player 26 Score: <input type="text" name="bracket_ro32player26score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player26score;?>" /></p>
	<p>RO32 Player 27: <input type="text" name="bracket_ro32player27" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player27;?>" /></p>
	<p>RO32 Player 27 Score: <input type="text" name="bracket_ro32player27score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player27score;?>" /></p>
	<p>RO32 Player 28: <input type="text" name="bracket_ro32player28" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player28;?>" /></p>
	<p>RO32 Player 28 Score: <input type="text" name="bracket_ro32player28score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player28score;?>" /></p>
	<p>RO32 Player 29: <input type="text" name="bracket_ro32player29" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player29;?>" /></p>
	<p>RO32 Player 29 Score: <input type="text" name="bracket_ro32player29score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player29score;?>" /></p>
	<p>RO32 Player 30: <input type="text" name="bracket_ro32player30" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player30;?>" /></p>
	<p>RO32 Player 30 Score: <input type="text" name="bracket_ro32player30score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player30score;?>" /></p>
	<p>RO32 Player 31: <input type="text" name="bracket_ro32player31" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player31;?>" /></p>
	<p>RO32 Player 31 Score: <input type="text" name="bracket_ro32player31score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player31score;?>" /></p>
	<p>RO32 Player 32: <input type="text" name="bracket_ro32player32" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player32;?>" /></p>
	<p>RO32 Player 32 Score: <input type="text" name="bracket_ro32player32score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro32player32score;?>" /></p>
	<br />
	<p>RO16 Player 1: <input type="text" name="bracket_ro16player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player1;?>" /></p>
    <p>RO16 Player 1 Score: <input type="text" name="bracket_ro16player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player1score;?>" /></p>
    <p>RO16 Player 2: <input type="text" name="bracket_ro16player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player2;?>" /></p>
	<p>RO16 Player 2 Score: <input type="text" name="bracket_ro16player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player2score;?>" /></p>
	<p>RO16 Player 3: <input type="text" name="bracket_ro16player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player3;?>" /></p>
	<p>RO16 Player 3 Score: <input type="text" name="bracket_ro16player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player3score;?>" /></p>
	<p>RO16 Player 4: <input type="text" name="bracket_ro16player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player4;?>" /></p>
	<p>RO16 Player 4 Score: <input type="text" name="bracket_ro16player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player4score;?>" /></p>
	<p>RO16 Player 5: <input type="text" name="bracket_ro16player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player5;?>" /></p>
	<p>RO16 Player 5 Score: <input type="text" name="bracket_ro16player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player5score;?>" /></p>
	<p>RO16 Player 6: <input type="text" name="bracket_ro16player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player6;?>" /></p>
	<p>RO16 Player 6 Score: <input type="text" name="bracket_ro16player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player6score;?>" /></p>
	<p>RO16 Player 7: <input type="text" name="bracket_ro16player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player7;?>" /></p>
	<p>RO16 Player 7 Score: <input type="text" name="bracket_ro16player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player7score;?>" /></p>
	<p>RO16 Player 8: <input type="text" name="bracket_ro16player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player8;?>" /></p>
	<p>RO16 Player 8 Score: <input type="text" name="bracket_ro16player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player8score;?>" /></p>
	<p>RO16 Player 1: <input type="text" name="bracket_ro16player9" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player9;?>" /></p>
    <p>RO16 Player 1 Score: <input type="text" name="bracket_ro16player9score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player9score;?>" /></p>
    <p>RO16 Player 2: <input type="text" name="bracket_ro16player10" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player10;?>" /></p>
	<p>RO16 Player 2 Score: <input type="text" name="bracket_ro16player10score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player10score;?>" /></p>
	<p>RO16 Player 3: <input type="text" name="bracket_ro16player11" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player11;?>" /></p>
	<p>RO16 Player 3 Score: <input type="text" name="bracket_ro16player11score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player11score;?>" /></p>
	<p>RO16 Player 4: <input type="text" name="bracket_ro16player12" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player12;?>" /></p>
	<p>RO16 Player 4 Score: <input type="text" name="bracket_ro16player12score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player12score;?>" /></p>
	<p>RO16 Player 5: <input type="text" name="bracket_ro16player13" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player13;?>" /></p>
	<p>RO16 Player 5 Score: <input type="text" name="bracket_ro16player13score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player13score;?>" /></p>
	<p>RO16 Player 6: <input type="text" name="bracket_ro16player14" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player14;?>" /></p>
	<p>RO16 Player 6 Score: <input type="text" name="bracket_ro16player14score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player14score;?>" /></p>
	<p>RO16 Player 7: <input type="text" name="bracket_ro16player15" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player15;?>" /></p>
	<p>RO16 Player 7 Score: <input type="text" name="bracket_ro16player15score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player15score;?>" /></p>
	<p>RO16 Player 8: <input type="text" name="bracket_ro16player16" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player16;?>" /></p>
	<p>RO16 Player 8 Score: <input type="text" name="bracket_ro16player16score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro16player16score;?>" /></p>
	<br />
    <p>RO8 Player 1: <input type="text" name="bracket_ro8player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1;?>" /></p>
    <p>RO8 Player 1 Score: <input type="text" name="bracket_ro8player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player1score;?>" /></p>
    <p>RO8 Player 2: <input type="text" name="bracket_ro8player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2;?>" /></p>
	<p>RO8 Player 2 Score: <input type="text" name="bracket_ro8player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player2score;?>" /></p>
	<p>RO8 Player 3: <input type="text" name="bracket_ro8player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3;?>" /></p>
	<p>RO8 Player 3 Score: <input type="text" name="bracket_ro8player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player3score;?>" /></p>
	<p>RO8 Player 4: <input type="text" name="bracket_ro8player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4;?>" /></p>
	<p>RO8 Player 4 Score: <input type="text" name="bracket_ro8player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player4score;?>" /></p>
	<p>RO8 Player 5: <input type="text" name="bracket_ro8player5" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5;?>" /></p>
	<p>RO8 Player 5 Score: <input type="text" name="bracket_ro8player5score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player5score;?>" /></p>
	<p>RO8 Player 6: <input type="text" name="bracket_ro8player6" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6;?>" /></p>
	<p>RO8 Player 6 Score: <input type="text" name="bracket_ro8player6score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player6score;?>" /></p>
	<p>RO8 Player 7: <input type="text" name="bracket_ro8player7" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7;?>" /></p>
	<p>RO8 Player 7 Score: <input type="text" name="bracket_ro8player7score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player7score;?>" /></p>
	<p>RO8 Player 8: <input type="text" name="bracket_ro8player8" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8;?>" /></p>
	<p>RO8 Player 8 Score: <input type="text" name="bracket_ro8player8score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro8player8score;?>" /></p>
	<br />
	<p>RO4 Player 1: <input type="text" name="bracket_ro4player1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1;?>" /></p>
	<p>RO4 Player 1 Score: <input type="text" name="bracket_ro4player1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player1score;?>" /></p>
	<p>RO4 Player 2: <input type="text" name="bracket_ro4player2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2;?>" /></p>
	<p>RO4 Player 2 Score: <input type="text" name="bracket_ro4player2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player2score;?>" /></p>
	<p>RO4 Player 3: <input type="text" name="bracket_ro4player3" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3;?>" /></p>
	<p>RO4 Player 3 Score: <input type="text" name="bracket_ro4player3score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player3score;?>" /></p>
	<p>RO4 Player 4: <input type="text" name="bracket_ro4player4" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4;?>" /></p>
	<p>RO4 Player 4 Score: <input type="text" name="bracket_ro4player4score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->ro4player4score;?>" /></p>
	<br />
	<p>3rd 4th Player 1: <input type="text" name="bracket_r3rd4thplayer1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1;?>" /></p>
	<p>3rd 4th Player 1 Score: <input type="text" name="bracket_r3rd4thplayer1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer1score;?>" /></p>
	<p>3rd 4th Player 2: <input type="text" name="bracket_r3rd4thplayer2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2;?>" /></p>
	<p>3rd 4th Player 2 Score: <input type="text" name="bracket_r3rd4thplayer2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->r3rd4thplayer2score;?>" /></p>
	<br />
	<p>Finals Player 1: <input type="text" name="bracket_finalsplayer1" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1;?>" /></p>
	<p>Finals Player 1 Score: <input type="text" name="bracket_finalsplayer1score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer1score;?>" /></p>
	<p>Finals Player 2: <input type="text" name="bracket_finalsplayer2" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2;?>" /></p>
	<p>Finals Player 2 Score: <input type="text" name="bracket_finalsplayer2score" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->finalsplayer2score;?>" /></p>
	<br />
	<p>Winner: <input type="text" name="bracket_winner" value="<?php if(isset($edit_tournament_name)) echo $edit_tournament_name->winner;?>" /></p>
	
<?php 
}
function bracket_action(){
    global $wpdb;
    /**Delete the data if the variable "delete" is set**/
    if(isset($_GET['delete'])) {
        $_GET['delete'] = absint($_GET['delete']);
        $wpdb->query("DELETE FROM " .$wpdb->prefix ."bracket_64player WHERE id='" .$_GET['delete']."'");
    }
    /**Process the changes in the custom table**/
    if(isset($_POST['bracket_add_tournament_64p']) and isset($_POST['tournament_name_64p']) and isset($_POST['bracket_ro16player1']) ) {   
        /**Add new row in the custom table**/
        $tournament_name = $_POST['tournament_name_64p'];
        $ro64player1 = $_POST['bracket_ro64player1'];
		$ro64player1score = $_POST['bracket_ro64player1score'];
		$ro64player2 = $_POST['bracket_ro64player2'];
		$ro64player2score = $_POST['bracket_ro64player2score'];
		$ro64player3 = $_POST['bracket_ro64player3'];
		$ro64player3score = $_POST['bracket_ro64player3score'];
		$ro64player4 = $_POST['bracket_ro64player4'];
		$ro64player4score = $_POST['bracket_ro64player4score'];
		$ro64player5 = $_POST['bracket_ro64player5'];
		$ro64player5score = $_POST['bracket_ro64player5score'];
		$ro64player6 = $_POST['bracket_ro64player6'];
		$ro64player6score = $_POST['bracket_ro64player6score'];
		$ro64player7 = $_POST['bracket_ro64player7'];
		$ro64player7score = $_POST['bracket_ro64player7score'];
		$ro64player8 = $_POST['bracket_ro64player8'];
		$ro64player8score = $_POST['bracket_ro64player8score'];
		$ro64player9 = $_POST['bracket_ro64player9'];
		$ro64player9score = $_POST['bracket_ro64player9score'];
		$ro64player10 = $_POST['bracket_ro64player10'];
		$ro64player10score = $_POST['bracket_ro64player10score'];
		$ro64player11 = $_POST['bracket_ro64player11'];
		$ro64player11score = $_POST['bracket_ro64player11score'];
		$ro64player12 = $_POST['bracket_ro64player12'];
		$ro64player12score = $_POST['bracket_ro64player12score'];
		$ro64player13 = $_POST['bracket_ro64player13'];
		$ro64player13score = $_POST['bracket_ro64player13score'];
		$ro64player14 = $_POST['bracket_ro64player14'];
		$ro64player14score = $_POST['bracket_ro64player14score'];
		$ro64player15 = $_POST['bracket_ro64player15'];
		$ro64player15score = $_POST['bracket_ro64player15score'];
		$ro64player16 = $_POST['bracket_ro64player16'];
		$ro64player16score = $_POST['bracket_ro64player16score'];
		$ro64player17 = $_POST['bracket_ro64player17'];
		$ro64player17score = $_POST['bracket_ro64player17score'];
		$ro64player18 = $_POST['bracket_ro64player18'];
		$ro64player18score = $_POST['bracket_ro64player18score'];
		$ro64player19 = $_POST['bracket_ro64player19'];
		$ro64player19score = $_POST['bracket_ro64player19score'];
		$ro64player20 = $_POST['bracket_ro64player20'];
		$ro64player20score = $_POST['bracket_ro64player20score'];
		$ro64player21 = $_POST['bracket_ro64player21'];
		$ro64player21score = $_POST['bracket_ro64player21score'];
		$ro64player22 = $_POST['bracket_ro64player22'];
		$ro64player22score = $_POST['bracket_ro64player22score'];
		$ro64player23 = $_POST['bracket_ro64player23'];
		$ro64player23score = $_POST['bracket_ro64player23score'];
		$ro64player24 = $_POST['bracket_ro64player24'];
		$ro64player24score = $_POST['bracket_ro64player24score'];
		$ro64player25 = $_POST['bracket_ro64player25'];
		$ro64player25score = $_POST['bracket_ro64player25score'];
		$ro64player26 = $_POST['bracket_ro64player26'];
		$ro64player26score = $_POST['bracket_ro64player26score'];
		$ro64player27 = $_POST['bracket_ro64player27'];
		$ro64player27score = $_POST['bracket_ro64player27score'];
		$ro64player28 = $_POST['bracket_ro64player28'];
		$ro64player28score = $_POST['bracket_ro64player28score'];
		$ro64player29 = $_POST['bracket_ro64player29'];
		$ro64player29score = $_POST['bracket_ro64player29score'];
		$ro64player30 = $_POST['bracket_ro64player30'];
		$ro64player30score = $_POST['bracket_ro64player30score'];
		$ro64player31 = $_POST['bracket_ro64player31'];
		$ro64player31score = $_POST['bracket_ro64player31score'];
		$ro64player32 = $_POST['bracket_ro64player32'];
		$ro64player32score = $_POST['bracket_ro64player32score'];
		$ro64player33 = $_POST['bracket_ro64player33'];
		$ro64player33score = $_POST['bracket_ro64player33score'];
		$ro64player34 = $_POST['bracket_ro64player34'];
		$ro64player34score = $_POST['bracket_ro64player34score'];
		$ro64player35 = $_POST['bracket_ro64player35'];
		$ro64player35score = $_POST['bracket_ro64player35score'];
		$ro64player36 = $_POST['bracket_ro64player36'];
		$ro64player36score = $_POST['bracket_ro64player36score'];
		$ro64player37 = $_POST['bracket_ro64player37'];
		$ro64player37score = $_POST['bracket_ro64player37score'];
		$ro64player38 = $_POST['bracket_ro64player38'];
		$ro64player38score = $_POST['bracket_ro64player38score'];
		$ro64player39 = $_POST['bracket_ro64player39'];
		$ro64player39score = $_POST['bracket_ro64player39score'];
		$ro64player40 = $_POST['bracket_ro64player40'];
		$ro64player40score = $_POST['bracket_ro64player40score'];
		$ro64player41 = $_POST['bracket_ro64player41'];
		$ro64player41score = $_POST['bracket_ro64player41score'];
		$ro64player42 = $_POST['bracket_ro64player42'];
		$ro64player42score = $_POST['bracket_ro64player42score'];
		$ro64player43 = $_POST['bracket_ro64player43'];
		$ro64player43score = $_POST['bracket_ro64player43score'];
		$ro64player44 = $_POST['bracket_ro64player44'];
		$ro64player44score = $_POST['bracket_ro64player44score'];
		$ro64player45 = $_POST['bracket_ro64player45'];
		$ro64player45score = $_POST['bracket_ro64player45score'];
		$ro64player46 = $_POST['bracket_ro64player46'];
		$ro64player46score = $_POST['bracket_ro64player46score'];
		$ro64player47 = $_POST['bracket_ro64player47'];
		$ro64player47score = $_POST['bracket_ro64player47score'];
		$ro64player48 = $_POST['bracket_ro64player48'];
		$ro64player48score = $_POST['bracket_ro64player48score'];
		$ro64player49 = $_POST['bracket_ro64player49'];
		$ro64player49score = $_POST['bracket_ro64player49score'];
		$ro64player50 = $_POST['bracket_ro64player50'];
		$ro64player50score = $_POST['bracket_ro64player50score'];
		$ro64player51 = $_POST['bracket_ro64player51'];
		$ro64player51score = $_POST['bracket_ro64player51score'];
		$ro64player52 = $_POST['bracket_ro64player52'];
		$ro64player52score = $_POST['bracket_ro64player52score'];
		$ro64player53 = $_POST['bracket_ro64player53'];
		$ro64player53score = $_POST['bracket_ro64player53score'];
		$ro64player54 = $_POST['bracket_ro64player54'];
		$ro64player54score = $_POST['bracket_ro64player54score'];
		$ro64player55 = $_POST['bracket_ro64player55'];
		$ro64player55score = $_POST['bracket_ro64player55score'];
		$ro64player56 = $_POST['bracket_ro64player56'];
		$ro64player56score = $_POST['bracket_ro64player56score'];
		$ro64player57 = $_POST['bracket_ro64player57'];
		$ro64player57score = $_POST['bracket_ro64player57score'];
		$ro64player58 = $_POST['bracket_ro64player58'];
		$ro64player58score = $_POST['bracket_ro64player58score'];
		$ro64player59 = $_POST['bracket_ro64player59'];
		$ro64player59score = $_POST['bracket_ro64player59score'];
		$ro64player60 = $_POST['bracket_ro64player60'];
		$ro64player60score = $_POST['bracket_ro64player60score'];
		$ro64player61 = $_POST['bracket_ro64player61'];
		$ro64player61score = $_POST['bracket_ro64player61score'];
		$ro64player62 = $_POST['bracket_ro64player62'];
		$ro64player62score = $_POST['bracket_ro64player62score'];
		$ro64player63 = $_POST['bracket_ro64player63'];
		$ro64player63score = $_POST['bracket_ro64player63score'];
		$ro64player64 = $_POST['bracket_ro64player64'];
		$ro64player64score = $_POST['bracket_ro64player64score'];		
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
        if(empty($_POST['bracket_64player_id'])) {
            $wpdb->query("INSERT INTO " .$wpdb->prefix ."bracket_64player(tournament_name,ro64player1,ro64player1score,ro64player2,ro64player2score,ro64player3,ro64player3score,ro64player4,ro64player4score,ro64player5,ro64player5score,ro64player6,ro64player6score,ro64player7,ro64player7score,ro64player8,ro64player8score,ro64player9,ro64player9score,ro64player10,ro64player10score,ro64player11,ro64player11score,ro64player12,ro64player12score,ro64player13,ro64player13score,ro64player14,ro64player14score,ro64player15,ro64player15score,ro64player16,ro64player16score,ro64player17,ro64player17score,ro64player18,ro64player18score,ro64player19,ro64player19score,ro64player20,ro64player20score,ro64player21,ro64player21score,ro64player22,ro64player22score,ro64player23,ro64player23score,ro64player24,ro64player24score,ro64player25,ro64player25score,ro64player26,ro64player26score,ro64player27,ro64player27score,ro64player28,ro64player28score,ro64player29,ro64player29score,ro64player30,ro64player30score,ro64player31,ro64player31score,ro64player32,ro64player32score,ro64player33,ro64player33score,ro64player34,ro64player34score,ro64player35,ro64player35score,ro64player36,ro64player36score,ro64player37,ro64player37score,ro64player38,ro64player38score,ro64player39,ro64player39score,ro64player40,ro64player40score,ro64player41,ro64player41score,ro64player42,ro64player42score,ro64player43,ro64player43score,ro64player44,ro64player44score,ro64player45,ro64player45score,ro64player46,ro64player46score,ro64player47,ro64player47score,ro64player48,ro64player48score,ro64player49,ro64player49score,ro64player50,ro64player50score,ro64player51,ro64player51score,ro64player52,ro64player52score,ro64player53,ro64player53score,ro64player54,ro64player54score,ro64player55,ro64player55score,ro64player56,ro64player56score,ro64player57,ro64player57score,ro64player58,ro64player58score,ro64player59,ro64player59score,ro64player60,ro64player60score,ro64player61,ro64player61score,ro64player62,ro64player62score,ro64player63,ro64player63score,ro64player64,ro64player64score,ro32player1,ro32player1score,ro32player2,ro32player2score,ro32player3,ro32player3score,ro32player4,ro32player4score,ro32player5,ro32player5score,ro32player6,ro32player6score,ro32player7,ro32player7score,ro32player8,ro32player8score,ro32player9,ro32player9score,ro32player10,ro32player10score,ro32player11,ro32player11score,ro32player12,ro32player12score,ro32player13,ro32player13score,ro32player14,ro32player14score,ro32player15,ro32player15score,ro32player16,ro32player16score,ro32player17,ro32player17score,ro32player18,ro32player18score,ro32player19,ro32player19score,ro32player20,ro32player20score,ro32player21,ro32player21score,ro32player22,ro32player22score,ro32player23,ro32player23score,ro32player24,ro32player24score,ro32player25,ro32player25score,ro32player26,ro32player26score,ro32player27,ro32player27score,ro32player28,ro32player28score,ro32player29,ro32player29score,ro32player30,ro32player30score,ro32player31,ro32player31score,ro32player32,ro32player32score,ro16player1,ro16player1score,ro16player2,ro16player2score,ro16player3,ro16player3score,ro16player4,ro16player4score,ro16player5,ro16player5score,ro16player6,ro16player6score,ro16player7,ro16player7score,ro16player8,ro16player8score,ro16player9,ro16player9score,ro16player10,ro16player10score,ro16player11,ro16player11score,ro16player12,ro16player12score,ro16player13,ro16player13score,ro16player14,ro16player14score,ro16player15,ro16player15score,ro16player16,ro16player16score,ro8player1,ro8player1score,ro8player2,ro8player2score,ro8player3,ro8player3score,ro8player4,ro8player4score,ro8player5,ro8player5score,ro8player6,ro8player6score,ro8player7,ro8player7score,ro8player8,ro8player8score,ro4player1,ro4player1score,ro4player2,ro4player2score,ro4player3,ro4player3score,ro4player4,ro4player4score,r3rd4thplayer1,r3rd4thplayer1score,r3rd4thplayer2,r3rd4thplayer2score,finalsplayer1,finalsplayer1score,finalsplayer2,finalsplayer2score,winner) VALUES('" .$tournament_name ."','".$ro64player1."','" .$ro64player1score."','" .$ro64player2."','" .$ro64player2score."','" .$ro64player3."','" .$ro64player3score."','" .$ro64player4."','" .$ro64player4score."','" .$ro64player5."','" .$ro64player5score."','" .$ro64player6."','" .$ro64player6score."','" .$ro64player7."','" .$ro64player7score."','" .$ro64player8."','" .$ro64player8scoree."','" .$ro64player9."','" .$ro64player9scoree."','" .$ro64player10."','" .$ro64player10score."','" .$ro64player11."','" .$ro64player11score."','" .$ro64player12."','" .$ro64player12score."','" .$ro64player13."','" .$ro64player13score."','" .$ro64player14."','" .$ro64player14score."','" .$ro64player15."','" .$ro64player15score."','" .$ro64player16."','" .$ro64player16score."','" .$ro64player17."','" .$ro64player17score."','" .$ro64player18."','" .$ro64player18score."','" .$ro64player19."','" .$ro64player19score."','" .$ro64player20."','" .$ro64player20score."','" .$ro64player21."','" .$ro64player21score."','" .$ro64player22."','" .$ro64player22score."','" .$ro64player23."','" .$ro64player23score."','" .$ro64player24."','" .$ro64player24score."','" .$ro64player25."','" .$ro64player25score."','" .$ro64player26."','" .$ro64player26score."','" .$ro64player27."','" .$ro64player27score."','" .$ro64player28."','" .$ro64player28score."','" .$ro64player29."','" .$ro64player29score."','" .$ro64player30."','" .$ro64player30score."','" .$ro64player31."','" .$ro64player31score."','" .$ro64player32."','" .$ro64player32score."','" .$ro64player33."','" .$ro64player33score."','" .$ro64player34."','" .$ro64player34score."','" .$ro64player35."','" .$ro64player35score."','" .$ro64player36."','" .$ro64player36score."','" .$ro64player37."','" .$ro64player37score."','" .$ro64player38."','" .$ro64player38score."','" .$ro64player39."','" .$ro64player39score."','" .$ro64player40."','" .$ro64player40score."','" .$ro64player41."','" .$ro64player41score."','" .$ro64player42."','" .$ro64player42score."','" .$ro64player43."','" .$ro64player43score."','" .$ro64player44."','" .$ro64player44score."','" .$ro64player45."','" .$ro64player45score."','" .$ro64player46."','" .$ro64player46score."','" .$ro64player47."','" .$ro64player47score."','" .$ro64player48."','" .$ro64player48score."','" .$ro64player49."','" .$ro64player49score."','" .$ro64player50."','" .$ro64player50score."','" .$ro64player51."','" .$ro64player51score."','" .$ro64player52."','" .$ro64player52score."','" .$ro64player53."','" .$ro64player53score."','" .$ro64player54."','" .$ro64player54score."','" .$ro64player55."','" .$ro64player55score."','" .$ro64player56."','" .$ro64player56score."','" .$ro64player57."','" .$ro64player57score."','" .$ro64player58."','" .$ro64player58score."','" .$ro64player59."','" .$ro64player59score."','" .$ro64player60."','" .$ro64player60score."','" .$ro64player61."','" .$ro64player61score."','" .$ro64player62."','" .$ro64player62score."','" .$ro64player63."','" .$ro64player63score."','" .$ro64player64."','" .$ro64player64score."','" .$ro32player1."','" .$ro32player1score."','" .$ro32player2 ."','" .$ro32player2score ."','" .$ro32player3 ."','" .$ro32player3score ."','" .$ro32player4."','" .$ro32player4score."','" .$ro32player5."','" .$ro32player5score."','" .$ro32player6."','" .$ro32player6score."','" .$ro32player7."','" .$ro32player7score."','" .$ro32player8."','" .$ro32player8score."','" .$ro32player9."','" .$ro32player9score."','" .$ro32player10 ."','" .$ro32player10score ."','" .$ro32player11 ."','" .$ro32player11score ."','" .$ro32player12."','" .$ro32player12score."','" .$ro32player13."','" .$ro32player13score."','" .$ro32player14."','" .$ro32player14score."','" .$ro32player15."','" .$ro32player15score."','" .$ro32player16."','" .$ro32player16score."','" .$ro32player17."','" .$ro32player17score."','" .$ro32player18 ."','" .$ro32player18score ."','" .$ro32player19 ."','" .$ro32player19score ."','" .$ro32player20."','" .$ro32player20score."','" .$ro32player21."','" .$ro32player21score."','" .$ro32player22."','" .$ro32player22score."','" .$ro32player23."','" .$ro32player23score."','" .$ro32player24."','" .$ro32player24score."','" .$ro32player25."','" .$ro32player25score."','" .$ro32player26 ."','" .$ro32player26score ."','" .$ro32player27 ."','" .$ro32player27score ."','" .$ro32player28."','" .$ro32player28score."','" .$ro32player29."','" .$ro32player29score."','" .$ro32player30."','" .$ro32player30score."','" .$ro32player31."','" .$ro32player31score."','" .$ro32player32."','" .$ro32player32score."','" .$ro16player1."','" .$ro16player1score."','" .$ro16player2 ."','" .$ro16player2score ."','" .$ro16player3 ."','" .$ro16player3score ."','" .$ro16player4."','" .$ro16player4score."','" .$ro16player5."','" .$ro16player5score."','" .$ro16player6."','" .$ro16player6score."','" .$ro16player7."','" .$ro16player7score."','" .$ro16player8."','" .$ro16player8score."','" .$ro16player9."','" .$ro16player9score."','" .$ro16player10 ."','" .$ro16player10score ."','" .$ro16player11 ."','" .$ro16player11score ."','" .$ro16player12."','" .$ro16player12score."','" .$ro16player13."','" .$ro16player13score."','" .$ro16player14."','" .$ro16player14score."','" .$ro16player15."','" .$ro16player15score."','" .$ro16player16."','" .$ro16player16score."','" .$ro8player1."','" .$ro8player1score."','" .$ro8player2 ."','" .$ro8player2score ."','" .$ro8player3 ."','" .$ro8player3score ."','" .$ro8player4."','" .$ro8player4score."','" .$ro8player5."','" .$ro8player5score."','" .$ro8player6."','" .$ro8player6score."','" .$ro8player7."','" .$ro8player7score."','" .$ro8player8."','" .$ro8player8score."','" .$ro4player1."','" .$ro4player1score."','" .$ro4player2 ."','" .$ro4player2score ."','" .$ro4player3 ."','" .$ro4player3score ."','" .$ro4player4."','" .$ro4player4score."','" .$r3rd4thplayer1."','" .$r3rd4thplayer1score."','" .$r3rd4thplayer2 ."','" .$r3rd4thplayer2score ."','" .$finalsplayer1."','" .$finalsplayer1score."','" .$finalsplayer2 ."','" .$finalsplayer2score ."','" .$winner."');");
        } else {
        /**Update the data**/
            $tournament_name_id = $_POST['bracket_64player_id'];
            $wpdb->query("UPDATE " .$wpdb->prefix. "bracket_64player SET tournament_name='" .$tournament_name ."', ro64player1='" .$ro64player1 ."', ro64player1score='" .$ro64player1score."', ro64player2='" .$ro64player2 ."', ro64player2score='" .$ro64player2score ."', ro64player3='" .$ro64player3 ."', ro64player3score='" .$ro64player3score ."', ro64player4='" .$ro64player4 ."', ro64player4score='" .$ro64player4score ."', ro64player5='" .$ro64player5 ."', ro64player5score='" .$ro64player5score ."', ro64player6='" .$ro64player6 ."', ro64player6score='" .$ro64player6score ."', ro64player7='" .$ro64player7 ."', ro64player7score='" .$ro64player7score ."', ro64player8='" .$ro64player8 ."', ro64player8score='" .$ro64player8score ."', ro64player9='" .$ro64player9 ."', ro64player9score='" .$ro64player9score ."', ro64player10='" .$ro64player10 ."', ro64player10score='" .$ro64player10score ."', ro64player11='" .$ro64player11 ."', ro64player11score='" .$ro64player11score ."', ro64player12='" .$ro64player12 ."', ro64player12score='" .$ro64player12score ."', ro64player13='" .$ro64player13 ."', ro64player13score='" .$ro64player13score ."', ro64player14='" .$ro64player14 ."', ro64player14score='" .$ro64player14score ."', ro64player15='" .$ro64player15 ."', ro64player15score='" .$ro64player15score ."', ro64player16='" .$ro64player16 ."', ro64player16score='" .$ro64player16score ."', ro64player17='" .$ro64player17 ."', ro64player17score='" .$ro64player17score ."', ro64player18='" .$ro64player18 ."', ro64player18score='" .$ro64player18score ."', ro64player19='" .$ro64player19 ."', ro64player19score='" .$ro64player19score ."', ro64player20='" .$ro64player20 ."', ro64player20score='" .$ro64player20score ."', ro64player21='" .$ro64player21 ."', ro64player21score='" .$ro64player21score ."', ro64player22='" .$ro64player22 ."', ro64player22score='" .$ro64player22score ."', ro64player23='" .$ro64player23 ."', ro64player23score='" .$ro64player23score ."', ro64player24='" .$ro64player24 ."', ro64player24score='" .$ro64player24score ."', ro64player25='" .$ro64player25 ."', ro64player25score='" .$ro64player25score ."', ro64player26='" .$ro64player26 ."', ro64player26score='" .$ro64player26score ."', ro64player27='" .$ro64player27 ."', ro64player27score='" .$ro64player27score ."', ro64player28='" .$ro64player28 ."', ro64player28score='" .$ro64player28score ."', ro64player29='" .$ro64player29 ."', ro64player29score='" .$ro64player29score ."', ro64player30='" .$ro64player30 ."', ro64player30score='" .$ro64player30score ."', ro64player31='" .$ro64player31 ."', ro64player31score='" .$ro64player31score ."', ro64player32='" .$ro64player32 ."', ro64player32score='" .$ro64player32score ."', ro64player33='" .$ro64player33 ."', ro64player33score='" .$ro64player33score ."', ro64player34='" .$ro64player34 ."', ro64player34score='" .$ro64player34score ."', ro64player35='" .$ro64player35 ."', ro64player35score='" .$ro64player35score ."', ro64player36='" .$ro64player36 ."', ro64player36score='" .$ro64player36score ."', ro64player37='" .$ro64player37 ."', ro64player37score='" .$ro64player37score ."', ro64player38='" .$ro64player38 ."', ro64player38score='" .$ro64player38score ."', ro64player39='" .$ro64player39 ."', ro64player39score='" .$ro64player39score ."', ro64player40='" .$ro64player40 ."', ro64player40score='" .$ro64player40score ."', ro64player41='" .$ro64player41 ."', ro64player41score='" .$ro64player41score ."', ro64player42='" .$ro64player42 ."', ro64player42score='" .$ro64player42score ."', ro64player43='" .$ro64player43 ."', ro64player43score='" .$ro64player43score ."', ro64player44='" .$ro64player44 ."', ro64player44score='" .$ro64player44score ."', ro64player45='" .$ro64player45 ."', ro64player45score='" .$ro64player45score ."', ro64player46='" .$ro64player46 ."', ro64player46score='" .$ro64player46score ."', ro64player47='" .$ro64player47 ."', ro64player47score='" .$ro64player47score ."', ro64player48='" .$ro64player48 ."', ro64player48score='" .$ro64player48score ."', ro64player49='" .$ro64player49 ."', ro64player49score='" .$ro64player49score ."', ro64player50='" .$ro64player50 ."', ro64player50score='" .$ro64player50score ."', ro64player51='" .$ro64player51 ."', ro64player51score='" .$ro64player51score ."', ro64player52='" .$ro64player52 ."', ro64player52score='" .$ro64player52score ."', ro64player53='" .$ro64player53 ."', ro64player53score='" .$ro64player53score ."', ro64player54='" .$ro64player54 ."', ro64player54score='" .$ro64player54score ."', ro64player55='" .$ro64player55 ."', ro64player55score='" .$ro64player55score ."', ro64player56='" .$ro64player56 ."', ro64player56score='" .$ro64player56score ."', ro64player57='" .$ro64player57 ."', ro64player57score='" .$ro64player57score ."', ro64player58='" .$ro64player58 ."', ro64player58score='" .$ro64player58score ."', ro64player59='" .$ro64player59 ."', ro64player59score='" .$ro64player59score ."', ro64player60='" .$ro64player60 ."', ro64player60score='" .$ro64player60score ."', ro64player61='" .$ro64player61 ."', ro64player61score='" .$ro64player61score ."', ro64player62='" .$ro64player62 ."', ro64player62score='" .$ro64player62score ."', ro64player63='" .$ro64player63 ."', ro64player63score='" .$ro64player63score ."', ro64player64='" .$ro64player64 ."', ro64player64score='" .$ro64player64score ."', ro32player1='" .$ro32player1 ."', ro32player1score='" .$ro32player1score ."', ro32player2='" .$ro32player2 ."', ro32player2score='" .$ro32player2score ."', ro32player3='" .$ro32player3 ."', ro32player3score='" .$ro32player3score ."', ro32player4='" .$ro32player4 ."', ro32player4score='" .$ro32player4score ."', ro32player5='" .$ro32player5 ."', ro32player5score='" .$ro32player5score ."', ro32player6='" .$ro32player6 ."', ro32player6score='" .$ro32player6score ."', ro32player7='" .$ro32player7 ."', ro32player7score='" .$ro32player7score ."', ro32player8='" .$ro32player8 ."', ro32player8score='" .$ro32player8score ."', ro32player9='" .$ro32player9 ."', ro32player9score='" .$ro32player9score."', ro32player10='" .$ro32player10 ."', ro32player10score='" .$ro32player10score ."', ro32player11='" .$ro32player11 ."', ro32player11score='" .$ro32player11score ."', ro32player12='" .$ro32player12 ."', ro32player12score='" .$ro32player12score ."', ro32player13='" .$ro32player13 ."', ro32player13score='" .$ro32player13score ."', ro32player14='" .$ro32player14 ."', ro32player14score='" .$ro32player14score ."', ro32player15='" .$ro32player15 ."', ro32player15score='" .$ro32player15score ."', ro32player16='" .$ro32player16 ."', ro32player16score='" .$ro32player16score ."', ro32player17='" .$ro32player17 ."', ro32player17score='" .$ro32player17score ."', ro32player18='" .$ro32player18 ."', ro32player18score='" .$ro32player18score ."', ro32player19='" .$ro32player19 ."', ro32player19score='" .$ro32player19score ."', ro32player20='" .$ro32player20 ."', ro32player20score='" .$ro32player20score ."', ro32player21='" .$ro32player21 ."', ro32player21score='" .$ro32player21score ."', ro32player22='" .$ro32player22 ."', ro32player22score='" .$ro32player22score ."', ro32player23='" .$ro32player23 ."', ro32player23score='" .$ro32player23score ."', ro32player24='" .$ro32player24 ."', ro32player24score='" .$ro32player24score ."', ro32player25='" .$ro32player25 ."', ro32player25score='" .$ro32player25score."', ro32player26='" .$ro32player26 ."', ro32player26score='" .$ro32player26score ."', ro32player27='" .$ro32player27 ."', ro32player27score='" .$ro32player27score ."', ro32player28='" .$ro32player28 ."', ro32player28score='" .$ro32player28score ."', ro32player29='" .$ro32player29 ."', ro32player29score='" .$ro32player29score ."', ro32player30='" .$ro32player30 ."', ro32player30score='" .$ro32player30score ."', ro32player31='" .$ro32player31 ."', ro32player31score='" .$ro32player31score ."', ro32player32='" .$ro32player32 ."', ro32player32score='" .$ro32player32score ."', ro16player1='" .$ro16player1 ."', ro16player1score='" .$ro16player1score ."', ro16player2='" .$ro16player2 ."', ro16player2score='" .$ro16player2score ."', ro16player3='" .$ro16player3 ."', ro16player3score='" .$ro16player3score ."', ro16player4='" .$ro16player4 ."', ro16player4score='" .$ro16player4score ."', ro16player5='" .$ro16player5 ."', ro16player5score='" .$ro16player5score ."', ro16player6='" .$ro16player6 ."', ro16player6score='" .$ro16player6score ."', ro16player7='" .$ro16player7 ."', ro16player7score='" .$ro16player7score ."', ro16player8='" .$ro16player8 ."', ro16player8score='" .$ro16player8score ."', ro16player9='" .$ro16player9 ."', ro16player9score='" .$ro16player9score ."', ro16player10='" .$ro16player10 ."', ro16player10score='" .$ro16player10score ."', ro16player11='" .$ro16player11 ."', ro16player11score='" .$ro16player11score ."', ro16player12='" .$ro16player12 ."', ro16player12score='" .$ro16player12score ."', ro16player13='" .$ro16player13 ."', ro16player13score='" .$ro16player13score ."', ro16player14='" .$ro16player14 ."', ro16player14score='" .$ro16player14score ."', ro16player15='" .$ro16player15 ."', ro16player15score='" .$ro16player15score ."', ro16player16='" .$ro16player16 ."', ro16player16score='" .$ro16player16score ."', ro8player1='" .$ro8player1 ."', ro8player1score='" .$ro8player1score ."', ro8player2='" .$ro8player2 ."', ro8player2score='" .$ro8player2score ."', ro8player3='" .$ro8player3 ."', ro8player3score='" .$ro8player3score ."', ro8player4='" .$ro8player4 ."', ro8player4score='" .$ro8player4score ."', ro8player5='" .$ro8player5 ."', ro8player5score='" .$ro8player5score ."', ro8player6='" .$ro8player6 ."', ro8player6score='" .$ro8player6score ."', ro8player7='" .$ro8player7 ."', ro8player7score='" .$ro8player7score ."', ro8player8='" .$ro8player8 ."', ro8player8score='" .$ro8player8score ."', ro4player1='" .$ro4player1 ."', ro4player1score='" .$ro4player1score ."', ro4player2='" .$ro4player2 ."', ro4player2score='" .$ro4player2score ."', ro4player3='" .$ro4player3 ."', ro4player3score='" .$ro4player3score ."', ro4player4='" .$ro4player4 ."', ro4player4score='" .$ro4player4score ."', r3rd4thplayer1='" .$r3rd4thplayer1 ."', r3rd4thplayer1score='" .$r3rd4thplayer1score ."', r3rd4thplayer2='" .$r3rd4thplayer2 ."', r3rd4thplayer2score='" .$r3rd4thplayer2score ."', finalsplayer1='" .$finalsplayer1 ."', finalsplayer1score='" .$finalsplayer1score ."', finalsplayer2='" .$finalsplayer2 ."', finalsplayer2score='" .$finalsplayer2score ."', winner='" .$winner ."' WHERE id='" .$tournament_name_id ."'");
        }
    }  
}

function bracket_add_tournament_64p(){
    $tournament_name_id =0;
    if($_GET['id']) $tournament_name_id = $_GET['id'];

    /**Get an specific row from the table wp_bracket_64player**/
    global $edit_tournament_name;
    if ($tournament_name_id) $edit_tournament_name = bracket_64p_get_tournament_namerow($tournament_name_id);   

    /**create meta box**/
    add_meta_box('bracket-meta', __('Tournament Information'), 'bracket_64player_meta_box', 'bracket', 'normal', 'core' );
?>

    /**Display the form to add a new row**/
    <div class="wrap">
      <div id="faq-wrapper">
        <form method="post" action="?page=bracket-plugin-64p">
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
          <input type="hidden" name="bracket_64player_id" value="<?php echo $tournament_name_id?>" />
          <input type="submit" value="<?php echo $tf_title;?>" name="bracket_add_tournament_64p" id="bracket_add_tournament_64p" class="button-secondary">
        </form>
      </div>
    </div>
<?php
}

function bracket_manage_tournament_64p(){
?>
<div class="wrap">
  <div class="icon32" id="icon-edit"><br></div>
  <h2><?php _e('64 Player Bracket Plugin Options') ?></h2>
  <form method="post" action="?page=bracket-plugin-64p" id="bracket_form_action">
    <p>
        <select name="bracket_action">
            <option value="actions"><?php _e('Actions')?></option>
            <option value="delete"><?php _e('Delete')?></option>
      </select>
      <input type="submit" name="bracket_form_action_changes" class="button-secondary" value="<?php _e('Apply')?>" />
        <input type="button" class="button-secondary" value="<?php _e('Add a new Tournament')?>" onclick="window.location='?page=bracket-plugin-64p&amp;edit=true'" />
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
          $table = bracket_get_tournament_64p();
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
          <span class="edit"><a href="?page=bracket-plugin-64p&amp;id=<?php echo $tournament_name->id?>&amp;edit=true">Edit</a> | </span>
          <span class="delete"><a href="?page=bracket-plugin-64p&amp;delete=<?php echo $tournament_name->id?>" onclick="return confirm('Are you sure you want to delete this Tournament?');">Delete</a></span>
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
        <input type="button" class="button-secondary" value="<?php _e('Add a new Tournament')?>" onclick="window.location='?page=bracket-plugin-64p&amp;edit=true'" />
    </p>

  </form>
</div>

<?php
}
?>