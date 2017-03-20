<?php
	header("Content-type: text/css;");
	
	if( file_exists('../../../../wp-load.php') ) :
		include '../../../../wp-load.php';
	else:
		include '../../../../../wp-load.php';
	endif;
?>

<?php
	// Styles	
	$primary 	= ft_of_get_option('fabthemes_primary_color','#ff6600');
	$secondary	= ft_of_get_option('fabthemes_secondary_color','');
	$link 		= ft_of_get_option('fabthemes_link_color','');
	$hover 		= ft_of_get_option('fabthemes_hover_color','');
	
?>

.top-bar .search-beam,
.home-section .home-section-title:after,
a.hl-button,
.fdm-item-price-wrapper span,
#home-testimonials .owl-theme .owl-controls .owl-page.active span, #home-testimonials .owl-theme .owl-controls.clickable .owl-page:hover span,
#secondary .widget h2.widget-title:after,
#secondary .widget .tagcloud a,
.fdm-item-panel .fdm-item-title:after,
.squarebanner h3.sidetitl:after,
#comments ol.comment-list li .comment-body .reply a,
#comments #respond .comment-form p .submit:hover
{
	background: <?php echo $primary ?>!important;
}

#footer-widgets
{
	background: <?php echo $secondary ?>;
}


/* Links */

a:link, a:visited {
	color: <?php echo $link ?>;
}

a:hover,
a:focus,
a:active {
	color:<?php echo $hover ?>;
	text-decoration: none;
}


