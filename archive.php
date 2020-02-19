<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegrad_Mobile
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>

			<div class="section mt-2 mb-2">
				<?php
					$title = __( 'Archives' );
					if ( is_category() ) {
						/* translators: Category archive title. %s: Category name. */
						$title = sprintf( __( 'Category' ), single_cat_title( '', false ) );
					} elseif ( is_tax() ) {
						/* translators: Tag archive title. %s: Tag name. */
						$title = sprintf( __( 'TAX' ), single_term_title( '', false ) );
					} elseif ( is_tag() ) {
						/* translators: Tag archive title. %s: Tag name. */
						$title = sprintf( __( 'Tag' ), single_tag_title( '', false ) );
					} elseif ( is_author() ) {
						/* translators: Author archive title. %s: Author name. */
						$title = sprintf( __( 'Author' ), '<span class="vcard">' . get_the_author() . '</span>' );
					} elseif ( is_year() ) {
						/* translators: Yearly archive title. %s: Year. */
						$title = sprintf( __( 'Year' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
					} elseif ( is_month() ) {
						/* translators: Monthly archive title. %s: Month name and year. */
						$title = sprintf( __( 'Month' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
					} elseif ( is_day() ) {
						/* translators: Daily archive title. %s: Date. */
						$title = sprintf( __( 'Day' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
					}
				?>
				<div class="section-title large">
					<?php 
						if( is_post_type_archive() ) {
							post_type_archive_title();
						} else {
							single_term_title();
						}
					?>
				</div>
				<?php the_archive_description( '', '' ); ?>
			</div>

			<!-- listview -->
			<ul class="listview image-listview media">

			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<a href="<?php echo esc_url( get_permalink() ); ?>" class="item">
						<?php 
							if ( has_post_thumbnail() ) {
								echo '<div class="imageWrapper">';
								the_post_thumbnail( 'thumbnail', array( 'class' => 'imaged w64' ) );
								echo '</div>';
							}
							else {
								echo '<div class="icon-box bg-danger">';
								echo '<i class="icon ion-ios-flame"></i>';
								echo '</div>';
							}
						?>
						<div class="in">
							<div>
								<strong><?php the_title(); ?></strong>
								<?php 
									if ( is_post_type_archive('alert') ) {
										$point_location = get_field('point_location');
										echo '<div class="text-muted">'.$point_location['address'].'</div>';
									} else {
										$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
										$time_string = sprintf( $time_string,
											esc_attr( get_the_date( DATE_W3C ) ),
											esc_html( get_the_date() )
										);
										echo '<div class="text-muted">' . $time_string . '</div>';
									}
								?>
							</div>
							
						</div>
					</a>
				</li>
			<?php endwhile; ?>

			</ul>
			<!-- * listview -->

			<?php elegrad_number_pagination(); ?>

			<?php //the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

<?php
get_footer();