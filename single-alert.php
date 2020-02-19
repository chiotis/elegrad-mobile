<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Elegrad_Mobile
 */

get_header();
?>

		<?php
		while ( have_posts() ) :
			the_post();
		?>
			<?php $home_url = home_url( $path = 'alert' ); ?>
			<a href="<?php echo $home_url; ?>" type="button" class="btn btn-secondary btn-lg btn-block square "><i class="icon ion-md-arrow-dropleft"></i><?php echo __('ΟΛΑ ΤΑ ALERTS', 'elegrad-mobile'); ?></a>
			
			<div class="section mt-1">
				<div class="section-title"><?php if( is_user_logged_in() ) { echo __('ΕΠΕΞΕΡΓΑΣΙΑ ', 'elegrad-mobile'); } ?>ALERT</div>
			</div>

			<!-- title -->
			<div class="section mt-1 mb-1">
				<div class="section-title large"><?php the_title(); ?></div>
			</div>
			<!-- * title -->

			<?php 
				if( is_user_logged_in() ) {
					echo do_shortcode('[advanced_form form="form_5e2484f4c34f0" post="current"]');
				} else {
			?>

			<figure>
				<?php the_post_thumbnail('thumbnail', array( 'class' => 'imaged img-fluid' )); ?>
			</figure><!-- .post-thumbnail -->

			<!-- post body -->
			<div class="postBody">
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'elegrad-mobile' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				?>

			</div>
			<!-- * post body -->

			<!-- post buttons -->
			<div class="row mt-2">
				<div class="col-6">
					<a href="javascript:;" class="btn btn-primary btn-block">
						<i class="icon ion-md-share"></i> Share
					</a>
				</div>
				<div class="col-6">
					<a href="javascript:;" class="btn btn-danger btn-block">
						<i class="icon ion-ios-heart"></i> 1.2k
					</a>
				</div>
			</div>
			<!-- * post buttons -->

			<?php } ?>

		<?php
		endwhile; // End of the loop.
		?>

<?php
get_footer();