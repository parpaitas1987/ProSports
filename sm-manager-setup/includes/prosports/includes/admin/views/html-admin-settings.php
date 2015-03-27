<div class="wrap prosports">
	<form method="post" id="mainform" action="" enctype="multipart/form-data">
		<h2 class="nav-tab-wrapper sp-nav-tab-wrapper">
			<?php foreach ( $tabs as $name => $label ): ?><a href="<?php echo admin_url( 'admin.php?page=prosports&tab=' . $name ); ?>" class="nav-tab <?php echo ( $current_tab == $name ? 'nav-tab-active' : '' ); ?>"><?php echo $label; ?></a><?php endforeach; ?>
			<?php do_action( 'prosports_settings_tabs' ); ?>
		</h2>
		<?php
			do_action( 'prosports_sections_' . $current_tab );
			do_action( 'prosports_settings_' . $current_tab );
			do_action( 'prosports_settings_tabs_' . $current_tab ); // @deprecated hook
		?>
	    <p class="submit">
	    	<?php if ( ! isset( $GLOBALS['hide_save_button'] ) ) : ?>
	    		<input name="save" class="button-primary" type="submit" value="<?php _e( 'Save changes', 'prosports' ); ?>" />
	    	<?php endif; ?>
	    	<input type="hidden" name="subtab" id="last_tab" />
	    	<?php wp_nonce_field( 'prosports-settings' ); ?>
	    </p>
	</form>
	<?php do_action( 'prosports_settings_page' ); ?>
</div>