<!-- App Bottom Menu -->
	<?php
		if( is_user_logged_in() ) {
			wp_nav_menu( array(
				'theme_location' 	=> 'appBottomMenuAdmin',
				'container' 		=> 'div',
				'container_class' 	=> get_field('app_bottom_menu_color', 'option'),
				'items_wrap'		=> '%3$s',
				'depth' 			=> 1,
				'walker' 			=> new appBottomMenu_Walker
			) );
		} else {
			wp_nav_menu( array(
				'theme_location' 	=> 'appBottomMenu',
				'container' 		=> 'div',
				'container_class' 	=> get_field('app_bottom_menu_color', 'option'),
				'items_wrap'		=> '%3$s',
				'depth' 			=> 1,
				'walker' 			=> new appBottomMenu_Walker
			) );
		}
	?>