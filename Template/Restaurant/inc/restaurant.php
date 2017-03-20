<?php 

// Register Slide Post Type

function fab_slides() {

	$labels = array(
		'name'                  => _x( 'Slides', 'Post Type General Name', 'fabthemes' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'fabthemes' ),
		'menu_name'             => __( 'Slides', 'fabthemes' ),
		'name_admin_bar'        => __( 'Slides', 'fabthemes' ),
		'archives'              => __( 'Item Archives', 'fabthemes' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fabthemes' ),
		'all_items'             => __( 'All Items', 'fabthemes' ),
		'add_new_item'          => __( 'Add New Item', 'fabthemes' ),
		'add_new'               => __( 'Add New', 'fabthemes' ),
		'new_item'              => __( 'New Item', 'fabthemes' ),
		'edit_item'             => __( 'Edit Item', 'fabthemes' ),
		'update_item'           => __( 'Update Item', 'fabthemes' ),
		'view_item'             => __( 'View Item', 'fabthemes' ),
		'search_items'          => __( 'Search Item', 'fabthemes' ),
		'not_found'             => __( 'Not found', 'fabthemes' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fabthemes' ),
		'featured_image'        => __( 'Featured Image', 'fabthemes' ),
		'set_featured_image'    => __( 'Set featured image', 'fabthemes' ),
		'remove_featured_image' => __( 'Remove featured image', 'fabthemes' ),
		'use_featured_image'    => __( 'Use as featured image', 'fabthemes' ),
		'insert_into_item'      => __( 'Insert into item', 'fabthemes' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fabthemes' ),
		'items_list'            => __( 'Items list', 'fabthemes' ),
		'items_list_navigation' => __( 'Items list navigation', 'fabthemes' ),
		'filter_items_list'     => __( 'Filter items list', 'fabthemes' ),
	);
	$args = array(
		'label'                 => __( 'Slide', 'fabthemes' ),
		'description'           => __( 'Slide items', 'fabthemes' ),
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'fab_slide', $args );

}
add_action( 'init', 'fab_slides', 0 );


// Register staff Post Type

function fab_staff() {

	$labels = array(
		'name'                  => _x( 'Staffs', 'Post Type General Name', 'fabthemes' ),
		'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'fabthemes' ),
		'menu_name'             => __( 'Staff', 'fabthemes' ),
		'name_admin_bar'        => __( 'Staff', 'fabthemes' ),
		'archives'              => __( 'Item Archives', 'fabthemes' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fabthemes' ),
		'all_items'             => __( 'All Items', 'fabthemes' ),
		'add_new_item'          => __( 'Add New Item', 'fabthemes' ),
		'add_new'               => __( 'Add New staff', 'fabthemes' ),
		'new_item'              => __( 'New Staff', 'fabthemes' ),
		'edit_item'             => __( 'Edit Item', 'fabthemes' ),
		'update_item'           => __( 'Update Item', 'fabthemes' ),
		'view_item'             => __( 'View Item', 'fabthemes' ),
		'search_items'          => __( 'Search Item', 'fabthemes' ),
		'not_found'             => __( 'Not found', 'fabthemes' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fabthemes' ),
		'featured_image'        => __( 'Featured Image', 'fabthemes' ),
		'set_featured_image'    => __( 'Set featured image', 'fabthemes' ),
		'remove_featured_image' => __( 'Remove featured image', 'fabthemes' ),
		'use_featured_image'    => __( 'Use as featured image', 'fabthemes' ),
		'insert_into_item'      => __( 'Insert into item', 'fabthemes' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fabthemes' ),
		'items_list'            => __( 'Items list', 'fabthemes' ),
		'items_list_navigation' => __( 'Items list navigation', 'fabthemes' ),
		'filter_items_list'     => __( 'Filter items list', 'fabthemes' ),
	);
	$args = array(
		'label'                 => __( 'Staff', 'fabthemes' ),
		'description'           => __( 'Restaurant staff members', 'fabthemes' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-id',		
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'staff', $args );

}
add_action( 'init', 'fab_staff', 0 );


// Register Testimonials Post Type

function fab_testimonial() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'fabthemes' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'fabthemes' ),
		'menu_name'             => __( 'Testimonials', 'fabthemes' ),
		'name_admin_bar'        => __( 'Testimonials', 'fabthemes' ),
		'archives'              => __( 'Item Archives', 'fabthemes' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fabthemes' ),
		'all_items'             => __( 'All Items', 'fabthemes' ),
		'add_new_item'          => __( 'Add New Item', 'fabthemes' ),
		'add_new'               => __( 'Add New Testimonial', 'fabthemes' ),
		'new_item'              => __( 'New Item', 'fabthemes' ),
		'edit_item'             => __( 'Edit Item', 'fabthemes' ),
		'update_item'           => __( 'Update Item', 'fabthemes' ),
		'view_item'             => __( 'View Item', 'fabthemes' ),
		'search_items'          => __( 'Search Item', 'fabthemes' ),
		'not_found'             => __( 'Not found', 'fabthemes' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fabthemes' ),
		'featured_image'        => __( 'Featured Image', 'fabthemes' ),
		'set_featured_image'    => __( 'Set featured image', 'fabthemes' ),
		'remove_featured_image' => __( 'Remove featured image', 'fabthemes' ),
		'use_featured_image'    => __( 'Use as featured image', 'fabthemes' ),
		'insert_into_item'      => __( 'Insert into item', 'fabthemes' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fabthemes' ),
		'items_list'            => __( 'Items list', 'fabthemes' ),
		'items_list_navigation' => __( 'Items list navigation', 'fabthemes' ),
		'filter_items_list'     => __( 'Filter items list', 'fabthemes' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'fabthemes' ),
		'description'           => __( 'User Testimonials', 'fabthemes' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,		
		'menu_icon'           => 'dashicons-testimonial',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'fab_testimonial', 0 );