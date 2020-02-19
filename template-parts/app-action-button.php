<a href="#" type="button" class="btn btn-icon btn-primary btn-add" data-toggle="modal" data-target="#actionSheetInset"><i class="icon ion-md-add"></i></a>

<!-- Default Action Sheet Inset -->
<div class="modal fade action-sheet inset" id="actionSheetInset" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo __('Προσθήκη Νέου...', 'elegrad-mobile') ?></h5>
			</div>
			<div class="modal-body">
				<?php
					wp_nav_menu( array(
						'theme_location' 	=> 'appActionButtonMenu',
						'menu_class'        => "action-button-list",
						'container' 		=> '',
						// 'container_class' 	=> 'action-button-list',
						'depth' 			=> 1,
						'walker' 			=> new appActionButtonMenu_Walker
					) );
				?>
				<button type="button" data-toggle="modal" data-target="#actionSheetInset" class="btn btn-text-secondary btn-block mt-1 mb-1"><?php echo __('ΚΛΕΙΣΙΜΟ', 'elegrad-mobile') ?></button>
			</div>
		</div>
	</div>
</div>
<!-- * Default Action Sheet Inset -->