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
 * @package Slightly_Gigantic
 */

get_header();
?>

	<main id="primary" class="site-main front-page">
		<div class="container-fluid fp-main-container">
			<div class="row">
				<div class="col-12">
					<div class="fp-logo-container">
						<div class="sg-mainlogo">
							<img class="sg-logoimage" src="../../../wp-content/uploads/2021/07/cropped-Slightly-Gigantic-logo-Vector.png" alt="Slightly Gigantic" height="65%" width="65%">
						</div>
						<img class="fp-topimage" src="../../../wp-content/uploads/2021/09/slightlygigantic-home2.jpg" alt="Slightly Gigantic Band Members" height="100%" width="100%">						
						<div class="container fp-topsocial">
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
						<h1 class="fp-news">GIGANTIC NEWS</h1>
					</div><!-- logo container -->
					<div class="container-fluid fp-newscontainer">
						<div class="row">
							
							<?php
							$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 4 ) );				
							if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
							?>

								<div class="col-12 col-xl-3 g-0">
									<div class="container fp-newsitem">
										<div class="row">
											<div class="col-sm-12 col-md-5 col-lg-4 col-xl-12 fp-newsitem-image">
												<?php the_post_thumbnail( array(300,300) ); ?>
											</div>
											<div class="col-sm-12 col-md-7 col-lg-8 col-xl-12">
												<div class="container">
													<div class="row">
														<div class="col-12 fp-newsitem-title px-3 py-2">
														<h2><?php the_title(); ?></h2>
														</div>
														<div class="col-12 fp-newsitem-excerpt px-3">
															<?php the_excerpt(); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							<?php endwhile; endif; ?>

						</div>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">		
					<div class="fp-music-container">
						<h1 class="fp-text-overlay fp-music">MUSIC</h1>
						<a href="/slightly-gigantic-music" alt="Slightly Gigantic Music"><img src="../../../wp-content/uploads/2021/08/SG-square-1440-nologo.jpg" alt="Slightly Gigantic Music" height="100%" width="100%"></a>
						<div class="container-fluid fp-streaming-container">
							<div class="row">
								<div class="col-12">
									<h4>NOW STREAMING</h4>
								</div><!-- col -->
							</div><!-- row -->
							<div class="row">
								<div class="col-4 col-md-2">				
									<a href="https://open.spotify.com/artist/60u52bXTmH7MpDedBl68bx" target="_blank"><img class="streaming-png" src="../../../wp-content/uploads/2021/08/spotify-black.png" alt="Stream On Spotify" height="50px" width="50px"></a>	
								</div>
								<div class="col-4 col-md-2">	
									<a href="https://music.apple.com/us/artist/slightly-gigantic/1570012279" target="_blank"><img class="streaming-png" src="../../../wp-content/uploads/2021/08/apple-black.png" alt="Stream On Apple Music" height="50px" width="50px"></a>
								</div>
								<div class="col-4 col-md-2">	
									<a href="https://music.amazon.com/artists/B0965NMR9F/slightly-gigantic" target="_blank"><img class="streaming-png" src="../../../wp-content/uploads/2021/08/amazonmusic-black.png" alt="Stream On Amazon Music" height="50px" width="50px"></a>
								</div>
								<div class="col-4 col-md-2">	
									<a href="https://soundcloud.com/slightlygigantic" target="_blank"><img class="streaming-png" src="../../../wp-content/uploads/2021/08/soundcloud-black.png" alt="Stream On Pandora" height="50px" width="50px"></a>
								</div>
								<div class="col-4 col-md-2">	
									<a href="https://music.youtube.com/channel/UCtHV4bn2g8ptSiZ-NjtNGDQ" target="_blank"><img class="streaming-png" src="../../../wp-content/uploads/2021/08/youtube-black.png" alt="Stream On YouTube Music" height="50px" width="50px"></a>
								</div>
								<div class="col-4 col-md-2">	
									<a href="https://www.pandora.com/artist/slightly-gigantic/ARkK5j2lZcKllrZ" target="_blank"><img class="streaming-png" src="../../../wp-content/uploads/2021/07/pandora-black.png" alt="Stream On Pandora" height="50px" width="50px"></a>				
								</div><!-- col -->
							</div><!-- row -->
						</div><!-- container -->
						<div class="container fp-spotifycontainer">
							<div class="row">
								<div class="col-12">
									<iframe src="https://open.spotify.com/embed/artist/60u52bXTmH7MpDedBl68bx" width="100%" height="200px" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
								</div><!-- col -->
							</div><!-- row -->
						</div><!-- container -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="fp-video-container">
						<h1 class="fp-text-overlay fp-video">VIDEO</h1>
						<a href="/slightly-gigantic-media/#videogallery" alt="Slightly Gigantic Videos"><img src="../../../wp-content/uploads/2021/08/kryptonite-videoimage-1440.jpg" alt="Slightly Gigantic Videos" height="100%" width="100%"></a>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
