<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elegrad_Mobile
 */

?>
		</div>
	</div>
    <!-- * appCapsule -->

	<?php get_template_part( 'template-parts/app-bottom' ); ?>

    <?php get_template_part( 'template-parts/app-sidebar' ); ?>

	<?php 
		if( is_page_template('page-fullmap.php') ) {
			get_template_part( 'template-parts/app-map-filter-button' );
		}
		if( is_post_type_archive('alert') ) {
			get_template_part( 'template-parts/app-alert-filter-button' );
		}
		if( is_user_logged_in() && get_field('app-action-button', 'option') ) {
			get_template_part( 'template-parts/app-action-button' ); 
		}
	?>

	<?php wp_footer(); ?>
</body>
</html>