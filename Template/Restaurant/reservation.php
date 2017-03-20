<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 Template name: Reservation page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fabthemes
 */

get_header(); ?>

<div class="top-header">
	<div class="container"> <div class="row">
		<div class="col-md-12">
			<h1> <?php the_title(); ?></h1>
		</div>
	</div></div>
</div>

<div class="container"> <div class="row"> 
	<div class="col-md-12">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
			$image = aq_resize( $img_url, 1200, 420, true,true,true ); //resize & crop the image
			?>
			<?php if($image) : ?>
					<img class="img-header" src="<?php echo $image ?>" />
			<?php endif; ?>	

			<div class="row">
				<div class="col-md-8">
					<div class="location-box">
						<?php echo ft_of_get_option('fabthemes_mapcode','');?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="address-box">
					<h3> <?php _e('Our Location','fabthemes' ); ?> </h3>
						<?php echo ft_of_get_option('fabthemes_address','');?>
					</div>
					<div class="phone-details">
						<?php echo ft_of_get_option('fabthemes_phone','');?>
					</div>
				</div>
			</div>


			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="reservation-box">
					<div class="entry-content">
						<?php
							the_content();
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fabthemes' ),
								'after'  => '</div>',
							));
						?> 
					</div><!-- .entry-content -->
				</div>
				</article><!-- #post-## -->

			<?php	// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
</div></div>
<?php get_footer();
