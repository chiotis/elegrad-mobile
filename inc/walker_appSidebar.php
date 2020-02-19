<?php
// New Walker for App Bottom Menu
/**
 * Create HTML list of nav menu items.
 * Replacement for the native Walker, using the description.
 *
 * @see    http://wordpress.stackexchange.com/q/14037/
 * @author toscho, http://toscho.de
 */
class appSidebarMenu_Walker extends Walker_Nav_Menu {
	/**
	 * Start the element output.
	 *
	 * @param  string $output Passed by reference. Used to append additional content.
	 * @param  object $item   Menu item data object.
	 * @param  int $depth     Depth of menu item. May be used for padding.
	 * @param  array $args    Additional strings.
	 * @return void
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes     = empty ( $item->classes ) ? array () : (array) $item->classes;

		$class_names = join(
			' '
		,   apply_filters(
				'nav_menu_css_class'
			,   array_filter( $classes ), $item
			)
		);

		! empty ( $class_names )
			and $class_names = ' class="item '. esc_attr( $class_names ) . '"';

		$output .= "<li id='menu-item-$item->ID'>";

		$attributes  = '';

		! empty( $item->attr_title )
			and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
		! empty( $item->target )
			and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
		! empty( $item->xfn )
			and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
		! empty( $item->url )
			and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';

		// Load the App Sidebar color options
		$app_sidebar_color = get_field('app_sidebar_color', 'option');

		// insert description for top level elements only
		// you may change this
		$description = ( ! empty ( $item->description ) and 0 == $depth )
			? '<div class="icon-box ' . $app_sidebar_color . '"><i class="icon ' . esc_attr( $item->description ) . '"></i></div>' : '';

		$title = apply_filters( 'the_title', $item->title, $item->ID );

		// Check if anything but the default is active and add text-light to item class
		if ( $app_sidebar_color != 'modal-content' ) {
			$item_output = "<a $attributes $class_names>"
				. $description
				. '<div class="in text-light">'
				. $title
				. '</div>'
				. '</a></li>';
		} else {
			$item_output = "<a $attributes $class_names>"
				. $description
				. '<div class="in">'
				. $title
				. '</div>'
				. '</a></li>';
		}

		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters(
			'walker_nav_menu_start_el'
		,   $item_output
		,   $item
		,   $depth
		,   $args
		);
	}
}