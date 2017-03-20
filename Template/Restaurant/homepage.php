<?php
/**
Template name: Homepage
 *
 * @package Fabthemes
 */

get_header(); ?>

<!-- Slider Section  -->

<div id="slider-section">
<div id="home-slider">
		<?php 
		$slider_id = ft_of_get_option('fabthemes_slider','');
		$sliders = gs_get_field('custom_slider', $slider_id ,true); ?>
		<?php 
			if ($slider_id != '') {
			foreach($sliders as $slider) {
					$slide = $slider['slide_image']['id']; 
					$title = $slider['slide_title'];
					$description = $slider['slide_description'];
					$url = $slider['slide_link'];
					?>
					<div class="slide-item">
						<div class="owlcaption">
							<h2> <a href=" <?php echo $url; ?>"><?php echo $title; ?> </a></h2>
							<p><?php echo $description; ?></p>
						</div>

						<?php $slidepic = wp_get_attachment_image_src( $slide, 'slider-pic' ); ?>
						<a href="<?php echo $url ?>"><img src="<?php echo aq_resize( $slidepic[0], 1920, 768, true,true,true );?>" alt="<?php echo $title; ?>"></a>
					</div>
		<?php  }  } ?>	

</div>
</div>

<!-- About us section  -->

<div id="home-about" class="home-section">
<div class="container"> <div class="row"> 
	<div class="col-md-12"> 

		<div class="home-section-title">
			<h2> <?php _e( 'About Us', 'fabthemes' ); ?> <span> <?php _e( 'Story of our restaurant', 'fabthemes' ); ?> </span></h2>
		</div>

		<div class="row"> 
		<?php
		$about_page = ft_of_get_option('fabthemes_aboutpage','5');
		$about_loop = new WP_Query( array( 'page_id' => $about_page ) );
		if( $about_loop->have_posts() ):
		    while( $about_loop->have_posts() ): $about_loop->the_post(); ?>

		<div class="col-md-6 about-col">
				<?php 
				$thumb = get_post_thumbnail_id();
				$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
				$image = aq_resize( $img_url, 768, 460, true,true,true ); //resize & crop the image
				?>
				<?php if($image) : ?>
						<img src="<?php echo $image ?>" />
				<?php endif; ?>		
		</div>
		<div class="col-md-6 about-col">
			<h2> <?php the_title(); ?>    </h2>
			<?php the_excerpt(); ?>
			<a class="hl-button" href="<?php echo get_permalink($about_loop->ID); ?>">Read more</a>
		</div>

		<?php  
		endwhile;
		endif;
		wp_reset_postdata(); ?>
		</div>

	</div>
</div></div>
</div>

<!-- Specials  -->

<div id="home-special-menu" class="home-section">
<div class="container"> <div class="row"> 
	<div class="col-md-12"> 

		<div class="home-section-title">
			<h2> <?php _e( 'Special Today', 'fabthemes' ); ?> <span> <?php _e( 'Special today in our restaurant', 'fabthemes' ); ?> </span></h2>
		</div>

		<div class="home-menu-list">
			<div class="row">
				<div class="col-sm-6">
					<?php $speacial1 = ft_of_get_option('fabthemes_specialmenucol1',''); ?>
					<?php echo do_shortcode(''.$speacial1.''); ?>
				</div>
				<div class="col-sm-6">
					<?php $speacial2 = ft_of_get_option('fabthemes_specialmenucol2',''); ?>
					<?php echo do_shortcode(''.$speacial2.''); ?>					
				</div>
			</div>

		</div>

<div class="off-page-link">
	<?php $menu_page = ft_of_get_option('fabthemes_menupage','5'); ?>
	<a class="hl-button" href="<?php echo get_permalink($menu_page); ?>">Our Complete menu</a>
</div>

		
	</div>
</div></div>
</div>

<!-- Our Staff  -->

<div id="home-staff" class="home-section">
<div class="container"> <div class="row"> 
	<div class="col-md-12"> 
		<div class="home-section-title">
			<h2> <?php _e( 'Our staff', 'fabthemes' ); ?> <span> <?php _e( 'Meet our stars', 'fabthemes' ); ?> </span></h2>
		</div>
		<div class="home-staff-wrap">
			<div class="row"> 
				<div class="staff-slider">
				<?php
				$args = array( 'post_type' => 'staff');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="home-staff-item"> 
						<?php 
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 450, 450, true,true,true ); //resize & crop the image
						?>
						<?php if($image) : ?>
								<img class="staff-thumb" src="<?php echo $image ?>" />
						<?php endif; ?>	
							
						<h3> <?php the_title(); ?>
							<span> <?php echo gs_get_field('staff_title', $post->ID ,true); ?></span>
						</h3>


					</div>
				<?php endforeach; 
				wp_reset_postdata();?>	
				</div>
			</div>
		</div>
		<div class="off-page-link">
			<?php $staff_page = ft_of_get_option('fabthemes_staffpage','5'); ?>
			<a class="hl-button" href="<?php echo get_permalink($staff_page); ?>">Meet our staff</a>
		</div>
	</div>
</div></div>
</div>


<!-- Testimonials  -->

<div id="home-testimonials" class="home-section">
<div class="container"> <div class="row"> 
	<div class="col-md-12"> 
		<div class="home-section-title">
			<h2> <?php _e( 'Happy Customers', 'fabthemes' ); ?> <span> <?php _e( 'What our happy customers say', 'fabthemes' ); ?> </span></h2>
		</div>

		<div class="testimonial-wrap">
			<?php
			$args = array( 'post_type' => 'testimonial');
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="testimonial-item">
					<?php the_content(); ?>
					<h4> <?php the_title(); ?></h4>
				</div>

			<?php endforeach; 
			wp_reset_postdata();?>	
		</div>
		
	</div>
</div></div>
</div>

<!-- Blog  -->

<div id="home-posts" class="home-section">
<div class="container"> <div class="row"> 
	<div class="col-md-12"> 
		<div class="home-section-title">
			<h2> <?php _e( 'From Blog', 'fabthemes' ); ?> <span> <?php _e( 'Latest posts from our blog', 'fabthemes' ); ?> </span></h2>
		</div>

		<div class="blog-wrap">
			<div class="row"> 
				<?php
				$args = array( 'post_type' => 'post', 'posts_per_page' => 4);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="col-md-3 col-sm-6"> 
						<div class="home-blog-item"> 
						<?php 
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 768, 400, true,true,true ); //resize & crop the image
						?>
						<?php if($image) : ?>
								<a href="<?php echo get_permalink($post->ID); ?>"> <img class="post-thumb" src="<?php echo $image ?>" /> </a>
						<?php endif; ?>	
							
						<h3> <?php the_title(); ?> </h3>
						<div class="home-blog-meta"> <?php the_category( ', ' ); ?> </div>
						<p> <?php echo excerpt('20'); ?> </p>
						<a class="hl-button" href="<?php echo get_permalink($post->ID); ?>"> Read More </a>
						</div>
					</div>
				<?php endforeach; 
				wp_reset_postdata();?>	
			</div>
		</div>
		
	</div>
</div></div>
</div>

<!-- Reservation  -->

<div id="home-widgets" class="home-section">
<div class="container"> <div class="row"> 

	<div class="col-md-12"> 
		<div class="home-section-title">
			<h2> <?php _e( 'Reservation', 'fabthemes' ); ?> <span> <?php _e( 'Make reservations', 'fabthemes' ); ?> </span></h2>
		</div>

		<div class="reservation-box">
			<?php $reservation_form = ft_of_get_option('fabthemes_bookingform','5'); ?>
			<?php echo do_shortcode(''.$reservation_form.'' ); ?>
		</div>

	</div>
</div></div>
</div>

<?php get_footer();