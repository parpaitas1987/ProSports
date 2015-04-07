<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<!-- <div id="message" class="error prosports-message" >
	<p><?php _e( '<strong>Your theme does not declare ProSport support</strong> &#8211; if you encounter layout issues please read our integration guide or choose a ProSport theme :)', 'prosports' ); ?></p>
	<p class="submit">
		<a class="button-primary" href="http://livescores.website/prosports/"><?php _e( 'Theme Integration Guide', 'prosports' ); ?></a>
			
			
		<a class="button-secondary" href="<?php echo add_query_arg( 'hide_theme_support_notice', 'true' ); ?>"><?php _e( 'Hide this notice', 'prosports' ); ?></a>
	</p>
</div> -->

<?php if (get_option("_display_footer_links")!='yes'  || !get_option("_display_footer_links")) {  ?>
<div id="message" class="error prosports-message">
<form action="" method="post">

<p><?php _e( 'Give credit to author by display link in your website footer', 'prosports' ); ?></p>
<p class="submit">
<input class="button-primary" type="submit" value="<?php _e( 'Support Us', 'prosports' ); ?>">
			<input type="hidden" name="addoption" value="yes">
			<a class="button-secondary" href="<?php echo add_query_arg( 'hide_theme_support_notice', 'true' ); ?>"><?php _e( 'Hide this notice', 'prosports' ); ?></a>
			</p>
</form>

</div>
<?php } ?>