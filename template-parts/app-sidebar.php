<!-- App Sidebar -->
<?php $app_sidebar_color = get_field('app_sidebar_color', 'option'); ?>
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
	<div class="modal-dialog " role="document">
		<div class="modal-content <?php echo $app_sidebar_color; ?>">
			<div class="modal-body p-0 ">
				<?php 
					// This ONLY loads the facet. It is displayed in the app-alert-filter-button.php
					facetwp_display( 'facet', 'alert-types' ); 

					the_custom_logo();

					wp_nav_menu( array(
						'theme_location' 	=> 'appSidebarMenu',
						'menu_class'        => 'listview flush transparent no-line image-listview mb-2',
						'container' 		=> '',
						// 'container_class' 	=> 'action-button-list',
						'depth' 			=> 1,
						'walker' 			=> new appSidebarMenu_Walker
					) );
				
					if( is_user_logged_in() ) {
						get_template_part( 'template-parts/app-profile-box' ); 
					}

				?>

				<div class="appFooter mt-0">
					<div class="footer-title">Copyright &copy; <?php echo bloginfo( 'name' ) . date(' Y') ?>.<br>All Rights Reserved.</div>
					<?php echo bloginfo('description'); ?>
					<br>
					<?php
						$my_theme = wp_get_theme();
						//echo __('Έκδοση Λογισμικού: ', 'elegrad-mobile') . esc_html( $my_theme->get( 'Version' ) );
					?>
					<div class="chip chip-media chip-dark mt-2">
						<i class="chip-icon bg-primary icon ion-md-code-working"></i>
						<span class="chip-label"><?php echo __('Έκδοση Λογισμικού: ', 'elegrad-mobile') . esc_html( $my_theme->get( 'Version' ) ); ?></span>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * App Sidebar -->