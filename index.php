<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header >
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
			</div> <!-- top social container-->
			<h1 class="interior-headline"><?php single_post_title(); ?></h1>
		</div><!-- logo container -->		
	</header><!-- .page-header -->
<?php endif; ?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

get_footer();
