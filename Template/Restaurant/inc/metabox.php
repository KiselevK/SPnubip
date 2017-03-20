<?php 
if(function_exists('add_magic_meta_box')){

// Second metabox 

	add_magic_meta_box('slider_metabox', array(
		'title' => 'Image Slider',
		'pages' => array('fab_slide'),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(

			array(
			'type' => 'repeat',
			'name' => 'Slider images',
			'id' => 'custom_slider',
			'desc' => 'Add image slider items',
			'repeat_fields' => array(
					// add any fields you want
					array(
					'type' => 'image',
					'name' => 'Slide image',
					'id' => 'slide_image',
					'desc' => 'Upload the image',
					),				
					array(
					'type' => 'text',
					'name' => 'Slide title',
					'id' => 'slide_title',
					'desc' => 'Add slide title here',
					'placeholder' => 'A title goes here',
					),
					array(
					'type' => 'textarea',
					'name' => 'Slide description',
					'id' => 'slide_description',
					'placeholder' => 'Enter a description for the slide',
					'desc' => 'Put Your Description Here',
					),
					array(
					'type' => 'url',
					'name' => 'Slide link',
					'id' => 'slide_link',
					'desc' => 'Provide a url for the slider',
					'placeholder' => 'Enter url',
					),					
				)
			)
		 ), //end fields
	)); //slider metabox end


	add_magic_meta_box('staff_metabox', array(
		'title' => 'Staff details',
		'pages' => array('staff'),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(

					array(
					'type' => 'text',
					'name' => 'Staff title',
					'id' => 'staff_title',
					'desc' => 'Enter job title of the staff',
					'placeholder' => 'Staff title goes here',
					),
					array(
					'type' => 'textarea',
					'name' => 'Description',
					'id' => 'staff_description',
					'desc' => 'Couple of lines about the staff member',
					'placeholder' => 'Staff description goes here',
					),

					array(
					'type' => 'text',
					'name' => 'Twitter',
					'id' => 'staff_twitter',
					'desc' => 'Twitter link',
					'placeholder' => 'Twitter link goes here',
					),
	
					array(
					'type' => 'text',
					'name' => 'Facebook',
					'id' => 'staff_facebook',
					'desc' => 'Facebook link',
					'placeholder' => 'Facebook link goes here',
					),

					array(
					'type' => 'text',
					'name' => 'Linkedin',
					'id' => 'staff_linkedin',
					'desc' => 'Linkedin link',
					'placeholder' => 'Linked in link goes here',
					),					

		 ), //end fields
	)); 


}
