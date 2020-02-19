<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elegrad_Mobile
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="manifest" href="<?php get_template_directory() . '/manifest.json'; ?>">
	<?php // if ( is_page_template( 'page-fullmap.php' ) ) { echo '<META HTTP-EQUIV="REFRESH" CONTENT="60">'; } ?>
	<?php wp_head(); ?>
	<style type="text/css">
		body.page .appContent,
		body.archive .appContent,
		body.single .appContent {
			max-width: <?php the_field('app_content_maxwidth', 'option'); ?>px;
		}
	</style>
</head>

<body <?php body_class(); ?>>
	
    <?php get_template_part( 'template-parts/app-loader' ); ?>

    <?php get_template_part( 'template-parts/app-header' ); ?>

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="appContent">
        	<?php if ( get_field('alert_homepage_top_active', 'option') && is_front_page() ) { ?>
			<div class="section mt-2 mb-2">
				<div class="alert alert<?php if ( get_field('alert_homepage_top_background', 'option') ) { echo '-outline'; } ?>-<?php the_field('alert_homepage_top_alert_look', 'option'); ?> mb-2 <?php if ( get_field('alert_homepage_top_dismissable', 'option') ) { echo 'alert-dismissible'; } ?> fade show" role="alert">
					<strong><?php the_field('alert_homepage_top_header', 'option'); ?></strong><br><?php the_field('alert_homepage_top_text', 'option'); ?>
					<?php if ( get_field('alert_homepage_top_dismissable', 'option') ) { ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<i class="icon ion-md-close"></i>
					</button>
					<?php } ?>
				</div>
			</div>
			<?php } ?>