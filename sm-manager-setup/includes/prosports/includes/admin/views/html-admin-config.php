<div class="wrap prosports prosports-config-wrap">
	<h2>
		<?php _e( 'Configure', 'prosports' ); ?>
	</h2>
	<table class="form-table">
		<tbody>
			<?php
			$args = array(
				'post_type' => 'sp_outcome',
				'numberposts' => -1,
				'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC'
			);
			$data = get_posts( $args );
			?>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<?php _e( 'Event Outcomes', 'prosports' ) ?>
					<p class="description"><?php _e( 'Used for events.', 'prosports' ); ?></p>
				</th>
			    <td class="forminp">
					<table class="widefat sp-admin-config-table">
						<thead>
							<tr>
								<th scope="col"><?php _e( 'Label', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Variable', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Abbreviation', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Condition', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Description', 'prosports' ); ?></th>
								<th scope="col" class="edit"></th>
							</tr>
						</thead>
						<?php if ( $data ): $i = 0; foreach ( $data as $row ): ?>
							<tr<?php if ( $i % 2 == 0 ) echo ' class="alternate"'; ?>>
								<td class="row-title"><?php echo $row->post_title; ?></td>
								<td><?php echo $row->post_name; ?></td>
								<td><?php echo sp_get_post_abbreviation( $row->ID ); ?></td>
								<td><?php echo sp_get_post_condition( $row->ID ); ?></td>
								<td><p class="description"><?php echo $row->post_excerpt; ?></p></td>
								<td class="edit"><a class="button" href="<?php echo get_edit_post_link( $row->ID ); ?>"><?php _e( 'Edit', 'prosports' ); ?></s></td>
							</tr>
						<?php $i++; endforeach; else: ?>
							<tr class="alternate">
								<td colspan="5"><?php _e( 'No results found.', 'prosports' ); ?></td>
							</tr>
						<?php endif; ?>
					</table>
					<div class="tablenav bottom">
						<a class="button alignleft" href="<?php echo admin_url( 'edit.php?post_type=sp_outcome' ); ?>"><?php _e( 'View All', 'prosports' ); ?></a>
						<a class="button button-primary alignright" href="<?php echo admin_url( 'post-new.php?post_type=sp_outcome' ); ?>"><?php _e( 'Add New', 'prosports' ); ?></a>
						<br class="clear">
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<table class="form-table">
		<tbody>
			<?php
			$selection = get_option( 'prosports_primary_result', 0 );

			$args = array(
				'post_type' => 'sp_result',
				'numberposts' => -1,
				'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC'
			);
			$data = get_posts( $args );
			?>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<?php _e( 'Team Results', 'prosports' ) ?>
					<p class="description"><?php _e( 'Used for events.', 'prosports' ); ?></p>
				</th>
			    <td class="forminp">
					<legend class="screen-reader-text"><span><?php _e( 'Team Results', 'prosports' ) ?></span></legend>
					<form>
						<?php wp_nonce_field( 'sp-save-primary-result', 'sp-config-nonce', false ); ?>
						<table class="widefat sp-admin-config-table">
							<thead>
								<tr>
									<th class="radio" scope="col"><?php _e( 'Primary', 'prosports' ); ?></th>
									<th scope="col"><?php _e( 'Label', 'prosports' ); ?></th>
									<th scope="col"><?php _e( 'Variables', 'prosports' ); ?></th>
									<th scope="col"><?php _e( 'Description', 'prosports' ); ?></th>
									<th scope="col" class="edit"></th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th class="radio"><input type="radio" class="sp-primary-result-option" id="prosports_primary_result_0" name="prosports_primary_result" value="0" <?php checked( $selection, 0 ); ?>></th>
									<th colspan="4"><label for="prosports_primary_result_0">
										<?php
										if ( sizeof( $data ) > 0 ):
											$default = end( $data );
											reset( $data );
											printf( __( 'Default (%s)', 'prosports' ), $default->post_title );
										else:
											_e( 'Default', 'prosports' );
										endif;
										?>
									</label></th>
								</tr>
							</tfoot>
							<?php if ( $data ): $i = 0; foreach ( $data as $row ): ?>
								<tr<?php if ( $i % 2 == 0 ) echo ' class="alternate"'; ?>>
									<td class="radio"><input type="radio" class="sp-primary-result-option" id="prosports_primary_result_<?php echo $row->post_name; ?>" name="prosports_primary_result" value="<?php echo $row->post_name; ?>" <?php checked( $selection, $row->post_name ); ?>></td>
									<td class="row-title"><label for="prosports_primary_result_<?php echo $row->post_name; ?>"><?php echo $row->post_title; ?></label></td>
									<td><?php echo $row->post_name; ?>for, <?php echo $row->post_name; ?>against</td>
									<td><p class="description"><?php echo $row->post_excerpt; ?></p></td>
									<td class="edit"><a class="button" href="<?php echo get_edit_post_link( $row->ID ); ?>"><?php _e( 'Edit', 'prosports' ); ?></s></td>
								</tr>
							<?php $i++; endforeach; else: ?>
							<tr class="alternate">
								<td colspan="5"><?php _e( 'No results found.', 'prosports' ); ?></td>
							</tr>
						<?php endif; ?>
						</table>
					</form>
					<div class="tablenav bottom">
						<a class="button alignleft" href="<?php echo admin_url( 'edit.php?post_type=sp_result' ); ?>"><?php _e( 'View All', 'prosports' ); ?></a>
						<a class="button button-primary alignright" href="<?php echo admin_url( 'post-new.php?post_type=sp_result' ); ?>"><?php _e( 'Add New', 'prosports' ); ?></a>
						<br class="clear">
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<table class="form-table">
		<tbody>
			<?php
			$args = array(
				'post_type' => 'sp_performance',
				'numberposts' => -1,
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC'
			);
			$data = get_posts( $args );
			?>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<?php _e( 'Player Performance', 'prosports' ) ?>
					<p class="description"><?php _e( 'Used for events.', 'prosports' ); ?></p>
				</th>
			    <td class="forminp">
					<table class="widefat sp-admin-config-table">
						<thead>
							<tr>
								<th class="icon" scope="col"><?php _e( 'Icon', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Label', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Variable', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Description', 'prosports' ); ?></th>
								<th scope="col" class="edit"></th>
							</tr>
						</thead>
						<?php if ( $data ): $i = 0; foreach ( $data as $row ): ?>
							<tr<?php if ( $i % 2 == 0 ) echo ' class="alternate"'; ?>>
								<td class="icon"><?php if ( has_post_thumbnail( $row->ID ) ) echo get_the_post_thumbnail( $row->ID, 'prosports-fit-mini' ); ?></td>
								<td class="row-title"><?php echo $row->post_title; ?></td>
								<td><?php echo $row->post_name; ?></td>
								<td><p class="description"><?php echo $row->post_excerpt; ?></p></td>
								<td class="edit"><a class="button" href="<?php echo get_edit_post_link( $row->ID ); ?>"><?php _e( 'Edit', 'prosports' ); ?></s></td>
							</tr>
						<?php $i++; endforeach; else: ?>
							<tr class="alternate">
								<td colspan="5"><?php _e( 'No results found.', 'prosports' ); ?></td>
							</tr>
						<?php endif; ?>
					</table>
					<div class="tablenav bottom">
						<a class="button alignleft" href="<?php echo admin_url( 'edit.php?post_type=sp_performance' ); ?>"><?php _e( 'View All', 'prosports' ); ?></a>
						<a class="button button-primary alignright" href="<?php echo admin_url( 'post-new.php?post_type=sp_performance' ); ?>"><?php _e( 'Add New', 'prosports' ); ?></a>
						<br class="clear">
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<table class="form-table">
		<tbody>
			<?php
			$args = array(
				'post_type' => 'sp_column',
				'numberposts' => -1,
				'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC'
			);
			$data = get_posts( $args );
			?>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<?php _e( 'Table Columns', 'prosports' ) ?>
					<p class="description"><?php _e( 'Used for league tables.', 'prosports' ); ?></p>
				</th>
			    <td class="forminp">
					<table class="widefat sp-admin-config-table">
						<thead>
							<tr>
								<th scope="col"><?php _e( 'Label', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Key', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Equation', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Rounding', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Sort Order', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Description', 'prosports' ); ?></th>
								<th scope="col" class="edit"></th>
							</tr>
						</thead>
						<?php if ( $data ): $i = 0; foreach ( $data as $row ): ?>
							<tr<?php if ( $i % 2 == 0 ) echo ' class="alternate"'; ?>>
								<td class="row-title"><?php echo $row->post_title; ?></td>
								<td><?php echo $row->post_name; ?></td>
								<td><?php echo sp_get_post_equation( $row->ID ); ?></td>
								<td><?php echo sp_get_post_precision( $row->ID ); ?></td>
								<td><?php echo sp_get_post_order( $row->ID ); ?></td>
								<td><p class="description"><?php echo $row->post_excerpt; ?></p></td>
								<td class="edit"><a class="button" href="<?php echo get_edit_post_link( $row->ID ); ?>"><?php _e( 'Edit', 'prosports' ); ?></s></td>
							</tr>
						<?php $i++; endforeach; else: ?>
							<tr class="alternate">
								<td colspan="7"><?php _e( 'No results found.', 'prosports' ); ?></td>
							</tr>
						<?php endif; ?>
					</table>
					<div class="tablenav bottom">
						<a class="button alignleft" href="<?php echo admin_url( 'edit.php?post_type=sp_column' ); ?>"><?php _e( 'View All', 'prosports' ); ?></a>
						<a class="button button-primary alignright" href="<?php echo admin_url( 'post-new.php?post_type=sp_column' ); ?>"><?php _e( 'Add New', 'prosports' ); ?></a>
						<br class="clear">
					</div>
				</fieldset>
				</td>
			</tr>
		</tbody>
	</table>
	<table class="form-table">
		<tbody>
			<?php
			$args = array(
				'post_type' => 'sp_metric',
				'numberposts' => -1,
				'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC'
			);
			$data = get_posts( $args );
			?>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<?php _e( 'Player Metrics', 'prosports' ) ?>
					<p class="description"><?php _e( 'Used for player lists.', 'prosports' ); ?></p>
				</th>
			    <td class="forminp">
					<table class="widefat sp-admin-config-table">
						<thead>
							<tr>
								<th scope="col"><?php _e( 'Label', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Variable', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Description', 'prosports' ); ?></th>
								<th scope="col" class="edit"></th>
							</tr>
						</thead>
						<?php if ( $data ): $i = 0; foreach ( $data as $row ): ?>
							<tr<?php if ( $i % 2 == 0 ) echo ' class="alternate"'; ?>>
								<td class="row-title"><?php echo $row->post_title; ?></td>
								<td><?php echo $row->post_name; ?></td>
								<td><p class="description"><?php echo $row->post_excerpt; ?></p></td>
								<td class="edit"><a class="button" href="<?php echo get_edit_post_link( $row->ID ); ?>"><?php _e( 'Edit', 'prosports' ); ?></s></td>
							</tr>
						<?php $i++; endforeach; else: ?>
							<tr class="alternate">
								<td colspan="4"><?php _e( 'No results found.', 'prosports' ); ?></td>
							</tr>
						<?php endif; ?>
					</table>
					<div class="tablenav bottom">
						<a class="button alignleft" href="<?php echo admin_url( 'edit.php?post_type=sp_metric' ); ?>"><?php _e( 'View All', 'prosports' ); ?></a>
						<a class="button button-primary alignright" href="<?php echo admin_url( 'post-new.php?post_type=sp_metric' ); ?>"><?php _e( 'Add New', 'prosports' ); ?></a>
						<br class="clear">
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<table class="form-table">
		<tbody>
			<?php
			$args = array(
				'post_type' => 'sp_statistic',
				'numberposts' => -1,
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC'
			);
			$data = get_posts( $args );
			?>
			<tr valign="top">
				<th scope="row" class="titledesc">
					<?php _e( 'Player Statistics', 'prosports' ) ?>
					<p class="description"><?php _e( 'Used for player lists.', 'prosports' ); ?></p>
				</th>
			    <td class="forminp">
					<table class="widefat sp-admin-config-table">
						<thead>
							<tr>
								<th scope="col"><?php _e( 'Label', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Key', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Equation', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Rounding', 'prosports' ); ?></th>
								<th scope="col"><?php _e( 'Description', 'prosports' ); ?></th>
								<th scope="col" class="edit"></th>
							</tr>
						</thead>
						<?php if ( $data ): $i = 0; foreach ( $data as $row ): ?>
							<tr<?php if ( $i % 2 == 0 ) echo ' class="alternate"'; ?>>
								<td class="row-title"><?php echo $row->post_title; ?></td>
								<td><?php echo $row->post_name; ?></td>
								<td><?php echo sp_get_post_equation( $row->ID ); ?></td>
								<td><?php echo sp_get_post_precision( $row->ID ); ?></td>
								<td><p class="description"><?php echo $row->post_excerpt; ?></p></td>
								<td class="edit"><a class="button" href="<?php echo get_edit_post_link( $row->ID ); ?>"><?php _e( 'Edit', 'prosports' ); ?></s></td>
							</tr>
						<?php $i++; endforeach; else: ?>
							<tr class="alternate">
								<td colspan="6"><?php _e( 'No results found.', 'prosports' ); ?></td>
							</tr>
						<?php endif; ?>
					</table>
					<div class="tablenav bottom">
						<a class="button alignleft" href="<?php echo admin_url( 'edit.php?post_type=sp_statistic' ); ?>"><?php _e( 'View All', 'prosports' ); ?></a>
						<a class="button button-primary alignright" href="<?php echo admin_url( 'post-new.php?post_type=sp_statistic' ); ?>"><?php _e( 'Add New', 'prosports' ); ?></a>
						<br class="clear">
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<?php do_action( 'prosports_config_page' ); ?>
</div>