<a href="#" type="button" class="btn btn-icon btn-primary btn-filter" data-toggle="modal" data-target="#mapfilter"><i class="icon ion-ios-options"></i></a>
<!-- Default Action Sheet Inset -->
<div class="modal fade action-sheet inset" id="mapfilter" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo __('Φιλτράρισμα Χάρτη', 'elegrad-mobile') ?></h5>
			</div>
			<div class="modal-body p-2">
				<?php echo facetwp_display( 'facet', 'alert-types' ); ?>
				<button onclick="FWP.reset()" type="button" class="btn btn-outline-dark btn-block mt-1"><?php echo __('ΚΑΘΑΡΙΣΜΟΣ ΦΙΛΤΡΩΝ', 'elegrad-mobile') ?></button>
				<button type="button" data-toggle="modal" data-target="#mapfilter" class="btn btn-text-secondary btn-block mt-1 mb-1"><?php echo __('ΚΛΕΙΣΙΜΟ', 'elegrad-mobile') ?></button>
			</div>
		</div>
	</div>
</div>
<!-- * Default Action Sheet Inset -->