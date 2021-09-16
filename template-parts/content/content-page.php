<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_front_page() ) : ?>
		<header>
			<div class="fp-logo-container">
				<div class="sg-mainlogo">
					<img class="sg-logoimage" src="../../../wp-content/uploads/2021/07/cropped-Slightly-Gigantic-logo-Vector.png" alt="Slightly Gigantic" height="65%" width="65%">
				</div>
				<img class="fp-topimage interior-topimage" src="../../../wp-content/uploads/2021/09/slightlygigantic-interior2.jpg" alt="Slightly Gigantic Band Members" height="100%" width="100%">						

				<div class="container fp-topsocial interior-topsocial">
					<div class="row">
						<div class="col">
							
							<?php if ( has_nav_menu( 'footer' ) ) : ?>			
								<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
									<ul class="footer-navigation-wrapper">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'footer',
												'items_wrap'     => '%3$s',
												'container'      => false,
												'depth'          => 1,
												'link_before'    => '<span>',
												'link_after'     => '</span>',
												'fallback_cb'    => false,
											)
										);
										?>
									</ul>
								</nav>
							<?php endif; ?>

						</div>
					</div>
				</div><!-- top social container-->
				<?php get_template_part( 'template-parts/header/entry-header' ); ?>
			</div><!-- logo container -->
			</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
