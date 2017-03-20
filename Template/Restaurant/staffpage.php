<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 Template name: Staffpage
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fabthemes
 */

get_header(); ?>

<div class="top-header">
	<div class="container"> <div class="row">
		<div class="col-md-12">
			<h1> <?php the_title(); ?> </h1>
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

			<div class="staff-page-wrap">
			<div class="row"> 
				<?php
				$args = array( 'post_type' => 'staff','posts_per_page' => '-1');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="col-md-4 col-xs-6 "> 
						<?php 
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 360, 360, true,true,true ); //resize & crop the image
						?>
						<?php if($image) : ?>
								<img class="staff-thumb" src="<?php echo $image ?>" />
						<?php endif; ?>	
							
						<h3> <?php the_title(); ?>
							<span> <?php echo gs_get_field('staff_title', $post->ID ,true); ?></span>
						</h3>
						<p> <?php echo gs_get_field('staff_description', $post->ID ,true); ?></p>

						<div class="staff-meta">
							<ul>
								<li> <a href="<?php echo gs_get_field('staff_twitter', $post->ID ,true); ?>"><i class="fa fa-twitter"></i></a></li>
								<li> <a href="<?php echo gs_get_field('staff_facebook', $post->ID ,true); ?>"><i class="fa fa-facebook"></i></a></li>
								<li> <a href="<?php echo gs_get_field('staff_linkedin', $post->ID ,true); ?>"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				<?php endforeach; 
				wp_reset_postdata();?>	
			</div>			
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
</div></div>
<?php get_footer();
