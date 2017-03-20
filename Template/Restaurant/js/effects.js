jQuery(document).ready(function(){

	jQuery("#home-slider").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		singleItem:true,
		autoHeight : true,
		pagination:false,
		navigationText: ["&#xf104;","&#xf105;"],
		addClassActive: true,
		rewindNav:false,
		
	    afterMove: previousslide,
	    beforeMove: nextslide,	

	});

	function previousslide() {
	    jQuery(".owlcaption").addClass('animated fadeInLeft');
	}

	function nextslide() {
	     jQuery(".owlcaption").removeClass('animated fadeInLeft');
	}


	jQuery(".testimonial-wrap").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		singleItem:true,
		autoHeight : true,
		pagination:true,
		navigation:false,
		addClassActive: true,
		rewindNav:false,
	});


	jQuery(".staff-slider").owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
  	
	});


	jQuery(".sbutton").click(function(){
		jQuery(".search-beam").show();
	});

	jQuery(".sclose").click(function(){
		jQuery(".search-beam").hide();
	});


	jQuery("#restaurant").tinyNav({
	  active: 'selected', // String: Set the "active" class
	  header: 'Select Menu', // String: Specify text for "header" and show header instead of the active item
	  indent: '- ', // String: Specify text for indenting sub-items
	  label: '' // String: Sets the <label> text for the <select> (if not set, no label will be added)
	});


});