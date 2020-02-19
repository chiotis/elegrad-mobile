<!-- profile box -->
<?php
$app_sidebar_color = get_field('app_sidebar_color', 'option'); 
$user = wp_get_current_user();
$user_info = get_userdata( $user->ID );
if ( $user ) : ?>
<div class="profileBox pt-2 pb-2">
	<div class="image-wrapper">
		<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="image" class="imaged rounded w48">
	</div>
	<div class="in">
		<strong <?php if ( $app_sidebar_color != 'modal-content' ) { echo 'class="text-light"'; } ?> ><?php echo $user_info->user_email; ?></strong>

		<?php 
			if ( current_user_can('administrator') ) { 
				$url = home_url( $path = 'wp-admin', $scheme = 'relative' );
				echo '<a href="' . $url . '" type="button" class="btn btn-success btn-sm mt-1">' . __('Superadmin', 'elegrad-mobile') . '</a>';
			} 
		?>

		<a href="<?php echo wp_logout_url(); ?>" type="button" class="btn btn-primary btn-sm mt-1">Logout</a>
	</div>
</div>
<?php endif; ?>
<!-- * profile box -->