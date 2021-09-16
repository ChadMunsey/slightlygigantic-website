<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php // get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<!-- text signup form -->
<div class="container py-4 ez-widget subscribe-pg">
	<div class="row">
		<div class="col-12">
			<h2 class="text-center">Join Our Text Club</h2>
			<form
				enctype="application/x-www-form-urlencoded"
				action="https://app.clubtexting.com/widgets?_method=subscribe"
				id="ez-form"
				method="post"
				target="subscribed"
				onsubmit="window.open(
					'',
					'subscribed',
					'width=530,' +
					'height=370,' +
					'scrollbars=no,resizable=yes,status=no,toolbar=0'
				);"
			>
				<input type="hidden" name="serializedData" value="eNptUsFu1DAQ/RXjC5fQJs2GTfdWrcqyiFZIXcSBcnDsSTzg2FFsk66q/jvjpBS15fjezLz3POO1kFVV1tDkK6mKUhXr93ldN/V5BavVuqnuOfrd6OLgb8CADOjshTFuAsU3POcZFwtaevjmO6/yVV2c8R8ZbxGMmrkzaix5VhDpsbNx+AhCwUgSNwY7HcyR7bATNqBkB7gLbGtiQzM+Sgnet9E8DRy0sL/Y0UXWupElNbQdi8MMgwb2WjEkRUmKJ+wbvDWGNcA8WJUGBZvASNfD0oWWmBYm1hNlg2fS2RbHPrWS52JIbicUDv2lFY0B9cmhvaKYogMKWFDp5zPmReQ4DG4MSfF1VGHVv0COJcen9G8oPZuQ8s9U0ps0WPgNJEoDQf9fU4thAOufRb7sBZprF7BFKdJRH68Jif/gxhclqoTjkN6SLmlFDwspow+u39OSvo6GKB3CsLk9vT2lWi/uHlfgv8B45WzQaTt5nnwmVDOsZqQhZSZYlgminE1p7z68m0HGo4dxT3/uPK/zjHfpt31GTzP3fz/chm8Pu/3u4vqw3/KHhz+dFvMt">		
				<div class="form-group ez-form-group">
					<label class="ez-lb" for="PhoneNumber">Phone Number</label>
					<input id="PhoneNumber" class="form-control" name="PhoneNumber" type="tel" value="" placeholder="(e.g. 2223334444 no dots)" />
				</div>
				<div class="form-group ez-form-group">
					<label class="ez-lb" for="FirstName">First Name</label>
					<input id="FirstName" class="form-control" name="FirstName" type="text" value="" autocomplete="off" />
				</div>
				<div class="form-group ez-form-group">
					<label class="ez-lb" for="LastName">Last Name</label>
					<input id="LastName" class="form-control" name="LastName" type="text" value="" autocomplete="off" />
				</div>    
				<div class="form-group text-center py-3">                         
					<button class="btn btn-light btn-sm" type="submit">Join Now</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col px-3 text-center">
				<small>Msg &amp; data rates may apply. To unsubscribe, text <b>STOP</b> to 25827.
				For help text <b>HELP</b> anytime. Available in USA. Your privacy is always protected and your information will not be shared.</small>
		</div>
	</div>
</div><!-- end text signup container -->


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="row">
				<div class="col-md-2">
					<div class="site-name">
						<?php if ( has_custom_logo() ) : ?>
							<div class="site-logo"><?php the_custom_logo(); ?></div>
						<?php else : ?>
							<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
								<?php if ( is_front_page() && ! is_paged() ) : ?>
									<?php bloginfo( 'name' ); ?>
								<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
					</div><!-- .site-name -->
				</div><!-- col -->
				<div class="col-md-4">
					<div class="container">
						<div class="row">
							<div class="col footer-socialarea">

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

							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- col -->
				<div class="col-md-6">
					<div class="container-fluid ">
						<div class="row">
							<div class="col ftr-toprow">

							<?php wp_nav_menu( 
								array( 
									'theme_location' => 'footer-alt-menu',
									'container' => false,
								) 
							); ?>

							<!--
								<ul class="footer-list">
									<li>
										<a href="">PRIVACY POLICY</a> 
									</li>
									<li>
										<a href="">TERMS AND CONDITIONS</a>
									</li>
								</ul>
							-->
							</div><!-- col -->
						</div><!-- row -->
						<div class="row">
							<div class="col ftr-bottomrow">
								<ul class="footer-list">
									<li class="menu-item">
										&copy;<?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a>
									</li>
									<li>
										Designed By: <a href="http://mindbinge.net" target="_blank">Mindbinge Media</a>
									</li>
								</ul>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- col -->
			</div> <!-- row -->
		</div><!-- .site-info .container -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
