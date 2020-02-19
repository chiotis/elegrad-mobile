<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegrad_Mobile
 */

get_header();
?>

		<?php
		while ( have_posts() ) :
			the_post();
		?>
			<?php if ( has_post_thumbnail() && ! is_front_page() ) { ?>
			<div class="card bg-dark text-white">
				<?php the_post_thumbnail('large', array( 'class' => 'card-img' )); ?>
                <div class="card-img-overlay">
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <!-- <p class="card-text">Some card text here and more natural text content.</p> -->
                </div>
            </div>
        	<?php } ?>

            <div class="section <?php if ( ! has_post_thumbnail() && ! is_front_page() ) { echo 'mt-2'; } ?> mb-1">
            	<?php if ( ! has_post_thumbnail() && ! is_front_page() ) { ?>
				<!-- <div class="section-title large mt-1 mb-1"><?php the_title(); ?></div> -->
				<?php } ?>
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

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;
			echo '</div>';
		endwhile; // End of the loop.
		?>

<?php
get_footer();
