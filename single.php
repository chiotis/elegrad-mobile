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

			<div class="section mt-1 mb-1">
				<div class="section-title large mt-1 mb-1"><?php the_title(); ?></div>
				<figure>
					<?php the_post_thumbnail('thumbnail', array( 'class' => 'imaged img-fluid' )); ?>
				</figure><!-- .post-thumbnail -->

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

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elegrad-mobile' ),
					'after'  => '</div>',
				) );
				?>

				<div class="divider mt-2 mb-4"></div>

				<?php 
				the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			 ?>

			</div>
			<!-- * post body -->


			

		<?php

		endwhile; // End of the loop.
		?>

<?php
get_footer();