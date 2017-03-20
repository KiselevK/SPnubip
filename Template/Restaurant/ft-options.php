<?php
function FT_OP_update()
{
	$settings = get_option('ft_op');
	$settings['id'] = 'ft_' . FT_scope::tool()->optionsName;
	update_option('ft_op', $settings);
}

function FT_OP_options()
{
	
	// Test data
	$test_array = array("1" => "Tutorials","2" => "Posts");
	
	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
	
		// Pull all the pages into an array
	$options_slider = array();  
	$options_slider_obj = get_posts('post_type=fab_slide');
	$options_slider[''] = 'Select a slider:';
	foreach ($options_slider_obj as $post) {
    	$options_slider[$post->ID] = $post->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_bloginfo('stylesheet_directory') . '/images/';
		
	$options = array();
	
	
																	
	
	$options[] = array( "name" => "Homepage",
						"type" => "heading");	
						

		$options[] = array( "name" => "Slider",
							"desc" => "Select the slider for homepage.",
							"id" => "fabthemes_slider",
							"type" => "select",
							"options" => $options_slider);	


		$options[] = array( "name" => "About page",
							"desc" => "Select the about page.",
							"id" => "fabthemes_aboutpage",
							"type" => "select",
							"options" => $options_pages);	


		$options[] = array( "name" => "Restaurant menu page",
							"desc" => "Select the restaurant menu page.",
							"id" => "fabthemes_menupage",
							"type" => "select",
							"options" => $options_pages);	

		$options[] = array( "name" => "Special menu column 1",
							"desc" => "Enter the menu item shortcodes for column 1.",
							"id" => "fabthemes_specialmenucol1",
							"std" => "",
							"type" => "textarea");	

		$options[] = array( "name" => "Special menu column 2",
							"desc" => "Enter the menu item shortcodes for column 2.",
							"id" => "fabthemes_specialmenucol2",
							"std" => "",
							"type" => "textarea");	

		$options[] = array( "name" => "Staff page",
							"desc" => "Select the staff page.",
							"id" => "fabthemes_staffpage",
							"type" => "select",
							"options" => $options_pages);	




	$options[] = array( "name" => "Booking settings",
						"type" => "heading");		
						
		$options[] = array( "name" => "Reservation page",
							"desc" => "Select the Reservation page.",
							"id" => "fabthemes_bookingpage",
							"type" => "select",
							"options" => $options_pages);	

		$options[] = array( "name" => "Booking form",
							"desc" => "Enter the shortcode for booking form.",
							"id" => "fabthemes_bookingform",
							"std" => "",
							"type" => "textarea");	

		$options[] = array( "name" => "Location map",
							"desc" => "Enter the map embed code for location.",
							"id" => "fabthemes_mapcode",
							"std" => "",
							"type" => "textarea");	

		$options[] = array( "name" => "Address",
							"desc" => "Enter the address.",
							"id" => "fabthemes_address",
							"std" => "",
							"type" => "textarea");	

		$options[] = array( "name" => "Contact numbers",
							"desc" => "Enter the contact numbers.",
							"id" => "fabthemes_phone",
							"std" => "",
							"type" => "textarea");	


	$options[] = array( "name" => "Social settings",
						"type" => "heading");		
						

		$options[] = array( "name" => "Twitter",
							"desc" => "Twitter ID.",
							"id" => "fabthemes_twitter",
							"std" => "",
							"type" => "text");	

		$options[] = array( "name" => "Facebook",
							"desc" => "Facebook url.",
							"id" => "fabthemes_facebook",
							"std" => "",
							"type" => "text");	

		$options[] = array( "name" => "Google plus",
							"desc" => "Google plus.",
							"id" => "fabthemes_gplus",
							"std" => "",
							"type" => "text");	

		$options[] = array( "name" => "Tripadvisor",
							"desc" => "Tripadvisor.",
							"id" => "fabthemes_tripadvisor",
							"std" => "",
							"type" => "text");	

	$options[] = array( "name" => "Style Settings",
						"type" => "heading");		


	$options[] = array( "name" => "Main Color scheme",
						"desc" => "Theme main color",
						"id" => "fabthemes_primary_color",
						"std" => "",
						"type" => "color");
						

	$options[] = array( "name" => "Accent color",
						"desc" => "Secondary accent color",
						"id" => "fabthemes_secondary_color",
						"std" => "",
						"type" => "color");						
						
					
	$options[] = array( "name" => "Link color",
						"desc" => "Link color",
						"id" => "fabthemes_link_color",
						"std" => "",
						"type" => "color");		
									
	$options[] = array( "name" => "Link hover color",
						"desc" => "Link color on hover",
						"id" => "fabthemes_hover_color",
						"std" => "",
						"type" => "color");							
						
					

	if (file_exists(dirname(__FILE__) . '/FT/options/banners.php'))
			include ('FT/options/banners.php');

	if (file_exists(dirname(__FILE__) . '/FT/options/colors.php'))
			include ('FT/options/colors.php');

	if (file_exists(dirname(__FILE__) . '/FT/options/common.php'))
			include ('FT/options/common.php');

	return $options;
}