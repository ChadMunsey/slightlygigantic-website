<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
		<?php // get_template_part( 'template-parts/header/entry-header' ); ?>
	</div><!-- logo container -->

	<div class="container">
		<div class="row">
			<div class="col-sm-12 px-3 py-2">
				<header class="entry-header alignwide">
					<?php the_title( '<h1>', '</h1>' ); ?>
				</header><!-- .entry-header -->			
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-lg-4 px-1">	
				<?php twenty_twenty_one_post_thumbnail(); ?>
			</div>
			<div class="col-sm-12 col-lg-8 px-3 py-3 py-lg-0">
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
			<footer>
				<?php twenty_twenty_one_entry_meta_footer(); ?>
			</footer><!-- .entry-footer -->
			</div><!-- .entry-content -->
		</div>
	</div>

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
