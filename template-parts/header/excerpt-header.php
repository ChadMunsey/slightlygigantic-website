<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// Don't show the title if the post-format is `aside` or `status`.
$post_format = get_post_format();
if ( 'aside' === $post_format || 'status' === $post_format ) {
	return;
}
?>

<div class="container-fluid latest-news">
	<div class="row">
		<div class="col-sm-12 col-md-5 col-lg-4 col-xl-3 fp-newsitem-image">
			<?php twenty_twenty_one_post_thumbnail(); ?>		
		</div>
		<div class="col-sm-12 col-md-7 col-lg-8 col-xl-9">
			<div class="container">
				<div class="row">
					<div class="col-12 px-2 py-2 py-lg-5">
						<header class="entry-header">
							<?php the_title( sprintf( '<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						</header><!-- .entry-header -->				
					</div>
