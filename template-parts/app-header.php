<!-- App Header -->
	<div class="<?php the_field('app_header_color', 'option'); ?>">
		<div class="left">
			<a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
				<i class="icon ion-ios-menu mr-1"></i> <!-- MENU -->
			</a>
		</div>
		<div class="pageTitle">
			<?php 
				if ( is_page() && ! is_front_page() ) {
					the_title();
				}   else {
					bloginfo( 'name' );
				}
			?>
		</div>
		<div class="right">
			<a href="javascript:;" class="headerButton toggle-searchbox">
				<i class="icon ion-ios-search"></i>
			</a>
		</div>
	</div>
	<!-- * App Header -->

	<!-- Search Component -->
	<div id="search" class="appHeader">
		<form class="search-form" action="/" method="get">
			<div class="form-group searchbox">
				<input type="text" class="form-control" name="s" />
				<i class="input-icon icon ion-ios-search"></i>
				<a href="javascript:;" class="ml-1 close toggle-searchbox"><i class="icon ion-ios-close-circle"></i></a>
			</div>
		</form>
	</div>
	<!-- * Search Component -->