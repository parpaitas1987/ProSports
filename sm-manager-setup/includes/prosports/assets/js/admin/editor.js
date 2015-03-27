/* global tinymce */
( function () {
	tinymce.PluginManager.add( 'sp_shortcodes_button', function( editor, url ) {
		var ed = tinymce.activeEditor;
		editor.addButton( 'sp_shortcodes_button', {
			title: ed.getLang('prosports.insert'),
			text: false,
			icon: false,
			type: 'menubutton',
			menu: [
				{
					text: ed.getLang( 'prosports.event' ),
					menu: [
						{
							text: ed.getLang( 'prosports.details' ),
							onclick: function() {
								// triggers the thickbox
								var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
								W = W - 80;
								H = H - 84;
								tb_show( ed.getLang( 'prosports.event' ) + ' - ' + ed.getLang( 'prosports.details' ), 'admin-ajax.php?action=prosports_event_details_shortcode&width=' + W + '&height=' + H );
							}
						},
						{
							text: ed.getLang( 'prosports.results' ),
							onclick: function() {
								// triggers the thickbox
								var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
								W = W - 80;
								H = H - 84;
								tb_show( ed.getLang( 'prosports.event' ) + ' - ' + ed.getLang( 'prosports.results' ), 'admin-ajax.php?action=prosports_event_results_shortcode&width=' + W + '&height=' + H );
							}
						},
						{
							text: ed.getLang( 'prosports.performance' ),
							onclick: function() {
								// triggers the thickbox
								var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
								W = W - 80;
								H = H - 84;
								tb_show( ed.getLang( 'prosports.event' ) + ' - ' + ed.getLang( 'prosports.performance' ), 'admin-ajax.php?action=prosports_event_performance_shortcode&width=' + W + '&height=' + H );
							}
						},
						{
							text: ed.getLang( 'prosports.countdown' ),
							onclick: function() {
		                        // triggers the thickbox
		                        var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
		                        W = W - 80;
		                        H = H - 84;
		                        tb_show( ed.getLang( 'prosports.event' ) + ' - ' + ed.getLang( 'prosports.countdown' ), 'admin-ajax.php?action=prosports_countdown_shortcode&width=' + W + '&height=' + H );
							}
						}
					]
				},
				{
					text: ed.getLang( 'prosports.calendar' ),
					menu: [
						{
							text: ed.getLang( 'prosports.calendar' ),
									onclick : function() {
		                        // triggers the thickbox
		                        var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
		                        W = W - 80;
		                        H = H - 84;
                        		tb_show( ed.getLang( 'prosports.calendar' ) + ' - ' + ed.getLang( 'prosports.calendar' ), 'admin-ajax.php?action=prosports_event_calendar_shortcode&width=' + W + '&height=' + H );
		                    }
						},
						{
							text: ed.getLang( 'prosports.list' ),
							onclick : function() {
		                        // triggers the thickbox
		                        var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
		                        W = W - 80;
		                        H = H - 84;
                        		tb_show( ed.getLang( 'prosports.calendar' ) + ' - ' + ed.getLang( 'prosports.list' ), 'admin-ajax.php?action=prosports_event_list_shortcode&width=' + W + '&height=' + H );
		                    }
						},
						{
							text: ed.getLang( 'prosports.blocks' ),
							onclick : function() {
		                        // triggers the thickbox
		                        var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
		                        W = W - 80;
		                        H = H - 84;
                        		tb_show( ed.getLang( 'prosports.calendar' ) + ' - ' + ed.getLang( 'prosports.blocks' ), 'admin-ajax.php?action=prosports_event_blocks_shortcode&width=' + W + '&height=' + H );
		                    }
						}
					]
				},
				{
					text: ed.getLang( 'prosports.league_table' ),
					onclick : function() {
                        // triggers the thickbox
                        var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
                        W = W - 80;
                        H = H - 84;
                		tb_show( ed.getLang( 'prosports.league_table' ), 'admin-ajax.php?action=prosports_league_table_shortcode&width=' + W + '&height=' + H );
                    }
				},
				{
					text: ed.getLang( 'prosports.player' ),
					menu: [
						{
							text: ed.getLang( 'prosports.details' ),
							onclick: function() {
								// triggers the thickbox
								var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
								W = W - 80;
								H = H - 84;
								tb_show( ed.getLang( 'prosports.player' ) + ' - ' + ed.getLang( 'prosports.details' ), 'admin-ajax.php?action=prosports_player_details_shortcode&width=' + W + '&height=' + H );
							}
						},
						{
							text: ed.getLang( 'prosports.statistics' ),
							onclick: function() {
								// triggers the thickbox
								var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
								W = W - 80;
								H = H - 84;
								tb_show( ed.getLang( 'prosports.player' ) + ' - ' + ed.getLang( 'prosports.statistics' ), 'admin-ajax.php?action=prosports_player_statistics_shortcode&width=' + W + '&height=' + H );
							}
						}
					]
				},
				{
					text: ed.getLang( 'prosports.player_list' ),		
					menu: [			
						{
							text: ed.getLang( 'prosports.list' ),
							onclick : function() {
		                        // triggers the thickbox
		                        var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
		                        W = W - 80;
		                        H = H - 84;
                        		tb_show( ed.getLang( 'prosports.player_list' ) + ' - ' + ed.getLang( 'prosports.list' ), 'admin-ajax.php?action=prosports_player_list_shortcode&width=' + W + '&height=' + H );
		                    }
						},
						{
							text: ed.getLang( 'prosports.gallery' ),
							onclick : function() {
		                        // triggers the thickbox
		                        var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
		                        W = W - 80;
		                        H = H - 84;
                        		tb_show( ed.getLang( 'prosports.player_list' ) + ' - ' + ed.getLang( 'prosports.gallery' ), 'admin-ajax.php?action=prosports_player_gallery_shortcode&width=' + W + '&height=' + H );
		                    }
						}
					]
				}
			]
		});
	});
})();
