<?php
if ( !defined( 'ABSPATH' ) ) {
	die( "No script kiddies please!" );
}
// define plugin files
define( 'MY_PLUGIN_PATH', dirname( __FILE__ ) );
// define plugin urls
define( 'MY_PLUGIN_URL', plugins_url( '', __FILE__ ) );
// Dsiplay menu in admin left menu bar
add_action( 'admin_menu', 'add_theme_settings_menu' );
// Admin menu function
function add_theme_settings_menu() {
	//create new top-level menu
	add_submenu_page( 'options-general.php','Theme Setting', 'Theme Setting', 'administrator', "theme-setting", 'theme_setting_form' );
}
// register activation hook for plugin
register_activation_hook( __FILE__, 'theme_setting_activate' );
// Add fields in option table after activation of theme
function theme_setting_activate(){
	$theme_setting = array(
    		"_logo_image" => '',
    	    "_logo_h" => '',
    	    "_logo_w" => '',
    	    "_favicon_image" => '',
    	    "_phone_no" => '',
    	    "_header_code" => '',
    	    "_footer_code" => '',
    	    "_custom_css_code" => '',
    	    "_seo_keywords" => '',
    	    "_social_facebook_url" => '',
    	    "_social_twitter_url" => '',
    	    "_social_google_url" => '',
            "_social_linkedin_url" => '',
    	    "_social_dribble_url" => '',
    	    "_social_youtube_url" => '',
    	    "_social_vimeo_url" => '',
    	    "_social_skype_url" => '',
    	    "_social_email_url" => '',
    	    "_footer_text_1" => '',
    	    "_footer_text_2" => '',
    	    "_footer_text_3" => '',
    	    "_footer_text_4" => '',
    	    "_footer_text_5" => '',
    	    "_footer_text_6" => '',
            "_paypal_email" => '',
            "_paypal_mode" => ''
	   );

    

    // Maping array
	$theme_setting = array_map( 'stripslashes_deep', $theme_setting );
    // Put array in serialize way
	$theme_setting = maybe_serialize( $theme_setting );
    // Add
	add_option( "_sportstheme_setting",$theme_setting,'no' );
}
register_deactivation_hook( __FILE__, 'theme_setting_deactivate' );
function theme_setting_deactivate() {
	delete_option( '_sportstheme_setting' );
}
add_action('wp_ajax_stravyfuncajax22', 'my_action_callback');
add_action('wp_ajax_nopriv_stravyfuncajax22', 'my_action_callback');
function my_action_callback() {
global $wpdb; // this is how you get access to the database
    if ( $_POST ) {
        extract($_POST);
        parse_str($whatever, $output);
        extract($output);
        if ( $action=='update_setting' ) {
            $output = array_map( 'stripslashes_deep', $output );
                $theme_setting = $output;
                $theme_setting = maybe_serialize( $theme_setting );
                update_option( "_sportstheme_setting",$theme_setting,'no' );

                

       /* if ($output['_footer_credit_link']=='yes') {
            add_option("_display_footer_links","yes");
    } else {
            delete_option("_display_footer_links");
    }*/

               echo 'Setting has been saved';
        } else {
            echo 'Something went wrong please try again.';
        }
    }
    die();
}
function theme_setting_form() {
	wp_enqueue_style( 'thickbox' ); // call to media files in wp
	wp_enqueue_script( 'thickbox' );
	wp_enqueue_script( 'media-upload' );
	$get_theme_setting = get_option( '_sportstheme_setting' );
	$get_theme_setting = maybe_unserialize( $get_theme_setting );
?>
<link rel='stylesheet' href='<?php echo MY_PLUGIN_URL.'/asset/css/style.css' ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo MY_PLUGIN_URL.'/vpanel_style/vpanel_style.css' ?>' type='text/css' media='all' />
<div class="wrap" id="optionsframework-wrap">
    <div id="optionsframework">
<div class="optionsframework-header">
    <h1 class="rwmb-label"><?php _e('Theme Setting'); ?></h1>
</div>
		<form method="post" action="" id="settingForm">
		    <div class="optionBackground" id="Top_Tabs">
				<h2 class="nav-tab-wrapper" onclick="openTab(1)"><a href="#setting" class="tab_1 nav-tab-active"><?php _e( 'General Setting' );?></a></h2>
				<h2 class="nav-tab-wrapper" onclick="openTab(2)"><a href="#social" class="tab_2"><?php _e( 'Social Setting' );?></a></h2>
				<h2 class="nav-tab-wrapper" onclick="openTab(3)"><a href="#footer" class="tab_3"><?php _e( 'Footer Setting' );?></a></h2>
                <h2 class="nav-tab-wrapper" onclick="openTab(4)"><a href="#payment" class="tab_4"><?php _e( 'Payment Setting' );?></a></h2>
                <h2 class="nav-tab-wrapper" onclick="openTab(5)"><a href="#themeusage" class="tab_5"><?php _e( 'Theme Usage' );?></a></h2>
			</div>
		<div class="clear"></div>
		<div id="display_tab_1" class="display_tabs" style="display:;">
			<h3 class="rwmb-label"><?php _e('General Setting'); ?></h3>
			<table class="form-table">
        		<tr valign="top">
        			<th scope="row"><?php _e('Theme Logo'); ?></th>
        			<td>

                        <input id="_logo_image1" class="text_field file_field" type="text" name="_logo_image" value="<?php echo $get_theme_setting['_logo_image']; ?>" />
   						 <input class="button upload-button upload_image_button"  type="button" value="Upload" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_logo_image1')" >Show ShortCode</a></div>
                        </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Logo Height'); ?></th>
        			<td><input class="text_field file_field small_text " type="text" name="_logo_h" value="<?php echo $get_theme_setting['_logo_h']; ?>" placeholder="200" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_logo_h')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Logo Width'); ?></th>
        			<td><input class="text_field file_field small_text" type="text" name="_logo_w" value="<?php echo $get_theme_setting['_logo_w']; ?>" placeholder="100" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_logo_w')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Favicon'); ?></th>
        			<td><input id="_favicon_image" class="text_field file_field" type="text" name="_favicon_image" value="<?php echo $get_theme_setting['_favicon_image']; ?>" />
   						 <input class="button upload-button upload_image_button" type="button" value="Upload" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_favicon_image')" >Show ShortCode</a></div>
                        </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('Phone Number'); ?></th>
        			<td><input type="text" name="_phone_no" placeholder="111 001 001" value="<?php echo $get_theme_setting['_phone_no']; ?>">
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_phone_no')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Header Code'); ?></th>
        			<td><textarea name="_header_code" rows="5" cols="" placeholder="Code will be added before head closing tag"><?php echo $get_theme_setting['_header_code']; ?></textarea>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_header_code')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('Footer Code'); ?></th>
        			<td><textarea name="_footer_code" rows="5" cols="" placeholder="Code will be added before body closing tag"><?php echo $get_theme_setting['_footer_code']; ?></textarea>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_footer_code')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Custom CSS Code'); ?></th>
        			<td><textarea name="_custom_css_code" rows="5" cols="" placeholder="Code will be added in head style tag, without style tag"><?php echo $get_theme_setting['_custom_css_code']; ?></textarea>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_custom_css_code')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('SEO Keywords'); ?></th>
        			<td><textarea name="_seo_keywords" rows="5" cols="" placeholder="Meta keywords for SEO"><?php echo $get_theme_setting['_seo_keywords']; ?></textarea>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_seo_keywords')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        	</table>
        </div>
        <div id="display_tab_2" class="display_tabs" style="display:none;">
        	<h3 class="rwmb-label"><?php _e('Social Settings'); ?></h3>
			<table class="form-table">
        		<tr valign="top">
        			<th scope="row"><?php _e('Facebook URL'); ?></th>
        			<td><input class="text_field" type="text" name="_social_facebook_url" value="<?php echo $get_theme_setting['_social_facebook_url']; ?>" placeholder="http://www.facebook.com/profile" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_social_facebook_url')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('Twitter URL'); ?></th>
        			<td><input class="text_field" type="text" name="_social_twitter_url" value="<?php echo $get_theme_setting['_social_twitter_url']; ?>" placeholder="http://www.twitter.com/profile" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_social_twitter_url')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('Google URL'); ?></th>
        			<td><input class="text_field" type="text" name="_social_google_url" value="<?php echo $get_theme_setting['_social_google_url']; ?>" placeholder="http://plus.google.com/profile" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_social_google_url')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('LinkedIn'); ?></th>
        			<td><input class="text_field" type="text" name="_social_linkedin_url" value="<?php echo $get_theme_setting['_social_linkedin_url']; ?>" placeholder="http://www.linkedIn.com/profile" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_social_linkedin_url')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('Dribble'); ?></th>
        			<td><input class="text_field" type="text" name="_social_dribble_url" value="<?php echo $get_theme_setting['_social_dribble_url']; ?>" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_social_dribble_url')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('YouTube'); ?></th>
        			<td><input class="text_field" type="text" name="_social_youtube_url" value="<?php echo $get_theme_setting['_social_youtube_url']; ?>" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_social_youtube_url')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('Vimeo'); ?></th>
        			<td><input class="text_field" type="text" name="_social_vimeo_url" value="<?php echo $get_theme_setting['_social_vimeo_url']; ?>" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_social_vimeo_url')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('Skype'); ?></th>
        			<td><input class="text_field" type="text" name="_social_skype_url" value="<?php echo $get_theme_setting['_social_skype_url']; ?>" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_social_skype_url')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		
        		<tr valign="top">
        			<th scope="row"><?php _e('Email'); ?></th>
        			<td><input class="text_field" type="text" name="_social_email_url" value="<?php echo $get_theme_setting['_social_email_url']; ?>" />
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_social_email_url')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        	</table>
        </div>
        <div id="display_tab_3" class="display_tabs" style="display:none;">
        	<h3 class="rwmb-label"><?php _e('Footer Settings'); ?></h3>
			<table class="form-table">
        		<tr valign="top">
        			<th scope="row"><?php _e('Footer Text 1'); ?></th>
        			<td><textarea name="_footer_text_1" rows="5" cols="" placeholder="Copyright &copy YYYY - Sitename.com"><?php echo $get_theme_setting['_footer_text_1']; ?></textarea>
                        <div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_footer_text_1')" >Show ShortCode</a></div> - <div class="smallTxt-note">Shortcode {YYYY}, {URL}</div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Footer Text 2'); ?></th>
        			<td><textarea name="_footer_text_2" rows="5" cols="" placeholder="Other text for footer"><?php echo $get_theme_setting['_footer_text_2']; ?></textarea>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_footer_text_2')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Footer Text 3'); ?></th>
        			<td><textarea name="_footer_text_3" rows="5" cols="" placeholder="Other text for footer"><?php echo $get_theme_setting['_footer_text_3']; ?></textarea>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_footer_text_3')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Footer Text 4'); ?></th>
        			<td><textarea name="_footer_text_4" rows="5" cols="" placeholder="Other text for footer"><?php echo $get_theme_setting['_footer_text_4']; ?></textarea>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_footer_text_4')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Footer Text 5'); ?></th>
        			<td><textarea name="_footer_text_5" rows="5" cols="" placeholder="Other text for footer"><?php echo $get_theme_setting['_footer_text_5']; ?></textarea>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_footer_text_5')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        		<tr valign="top">
        			<th scope="row"><?php _e('Footer Text 6'); ?></th>
        			<td><textarea name="_footer_text_6" rows="5" cols="" placeholder="Other text for footer"><?php echo $get_theme_setting['_footer_text_6']; ?></textarea>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_footer_text_6')" >Show ShortCode</a></div>
                    </td>
        		</tr>
        	</table>
        </div>
        <div id="display_tab_4" class="display_tabs" style="display:none; min-height:500px;">
            <h3 class="rwmb-label"><?php _e('Payment Setting'); ?></h3>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php _e('PayPal Email'); ?></th>
                    <td>
                        <input type="text" name="_paypal_email" id="_paypal_email" placeholder="abc@example.com" value="<?php echo $get_theme_setting['_paypal_email']; ?>" >
                        <div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_paypal_email')" >Show ShortCode</a></div>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php _e('PayPal Mode'); ?></th>
                    <td>
                        <select name="_paypal_mode" id="_paypal_mode">
                            <option <?php if ($get_theme_setting['_paypal_mode'] == 'https://sandbox.paypal.com/us/cgi-bin/webscr') echo 'selected'; ?> value="https://sandbox.paypal.com/us/cgi-bin/webscr">Test</option>
                            <option <?php if ($get_theme_setting['_paypal_mode'] == 'https://www.paypal.com/us/cgi-bin/webscr') echo 'selected'; ?> value="https://www.paypal.com/us/cgi-bin/webscr">Live</option>
                        </select>
<div class="smallTxt-note"><a href="javascript:;" onclick="displayshortCode('_paypal_mode')" >Show ShortCode</a></div>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><?php _e('PayPal Usage'); ?></th>
                    <td>
                        <textarea id="ppmailcodeadding" rows="8" cols="" disabled><form name="_xclick" action="<?php echo $get_theme_setting['_paypal_mode']; ?>" id="ppformit" method="post"><input type="hidden" name="cmd" value="_xclick"><input type="text" name="business" value="<?php echo $get_theme_setting['_paypal_email']; ?>"><input type="hidden" name="currency_code" value="USD"><input type="hidden" name="item_name" value="Teddy Bear"><input type="hidden" name="amount" value="12.99"><input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"></form></textarea>
                        <div class="smallTxt-note">Please refresh page, before you copy and paste above code to view paypal form Button</div>
                    </tr>
            </table>
        </div>
        <div id="display_tab_5" class="display_tabs" style="display:none; min-height:500px;">
            <h3 class="rwmb-label"><?php _e('Theme Setting Usage'); ?></h3>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><?php _e('Shortcode Usage'); ?></th>
                    <td style="padding-top:22px;">
                        Use <strong>[settings opt='option_name']</strong> in anywhere in template for getting result
                    </td> 
                </tr>
                <tr valign="top">
                    <th scope="row"><?php _e('Available Options'); ?></th>
                    <td>
                        <ul>
                            <li>_logo_image</li>
                            <li>_logo_h</li>
                            <li>_logo_w</li>
                            <li>_favicon_image</li>
                            <li>_phone_no</li>
                            <li>_header_code</li>
                            <li>_footer_code</li>
                            <li>_custom_css_code</li>
                            <li>_seo_keywords</li>
                            <li>_social_facebook_url</li>
                            <li>_social_twitter_url</li>
                            <li>_social_google_url</li>
                            <li>_social_linkedin_url</li>
                            <li>_social_dribble_url</li>
                            <li>_social_youtube_url</li>
                            <li>_social_vimeo_url</li>
                            <li>_social_skype_url</li>
                            <li>_social_email_url</li>
                            <li>_footer_text_1</li>
                            <li>_footer_text_2</li>
                            <li>_footer_text_3</li>
                            <li>_footer_text_4</li>
                            <li>_footer_text_5</li>
                            <li>_footer_text_6</li>
                            <li>_paypal_email</li>
                            <li>_paypal_mode</li>
                        </ul>
                    </td> 
                </tr>
            </table>
        </div>
        	<input type="hidden" name="action" id="action" value="update_setting" />
        	<div class="optionsframework-footer"><div class="leftmove">&copy 2015 - ProSports</div>  
                <input class="button-primary vpanel_save vpanel_help" type="button" id="settingbtn" value="Update Setting" />
                <div class="clear"></div>
        	</div>
		</form>
    </div>
</div>
<script type='text/javascript' src='<?php echo MY_PLUGIN_URL.'/asset/js/script.js' ?>'></script>
<?php
}
// Put javascript in footer
add_action( 'admin_footer', 'my_action_javascript' );
// Ajax and jquery code will in execute from this function
function my_action_javascript() { ?>
<script type="text/javascript" >
// jQuery and ajax, all function post data with ajax
jQuery(document).ready(function(){
        jQuery("#settingbtn").click(function(){
            var datastring = jQuery("#settingForm").serialize();
            jQuery.ajax({
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                type: 'POST',
                data: {
                action: 'stravyfuncajax22',
                whatever: datastring
                },
                success: function(response) {
                alert(response);
                }
            });
        });
    });
function displayshortCode(shortcode) {
    prompt('Shortcode',"[settings opt='"+shortcode+"']");
}

</script> 
<?php
}
// Display all setting options
function display_setting_option( $atts ) {
// Extract shortcode from plugin
    extract( shortcode_atts( array(
      'opt' => 'Not found anything',
        ), $atts ) );
        // Get custom fields option from database
        $get_theme_setting_opt = get_option( '_sportstheme_setting' );
        $get_theme_setting_opt = maybe_unserialize( $get_theme_setting_opt );
        // Return theme setting option

        $option = $get_theme_setting_opt[$opt];
        
        $skip = array('{YYYY}', '{URL}');
        $replace = array(date(Y), home_url());
        $option = str_replace($skip, $replace, $option);
        // return function response in return for pring on frontend
        return $option;
}
// create shortcode for display settings in theme from admin
add_shortcode( 'settings', 'display_setting_option' );
// theme setting function for execuritng in template php files
function intheme_setting($option) {
        $get_theme_setting_opt = get_option( '_sportstheme_setting' );
        $get_theme_setting_opt = maybe_unserialize( $get_theme_setting_opt );

        return $get_theme_setting_opt[$option];
};