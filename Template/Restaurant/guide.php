<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){ ?>

		
<div id="welcome-panel" class="about-wrap">
<div class="container">

<div class="row">

	<div class="col3 col">
		<img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
	</div>
	<div class="col34 col">
		<h2>Welcome to <?php echo wp_get_theme(); ?> WordPress theme!</h2>
		<p> <?php echo wp_get_theme(); ?> is a free premium responsive WordPress theme from fabthemes.com. This theme is built 
			on <b>Bootstrap 3</b> framework. This is a  feature packed theme built for resturant and food related businesses. With this theme user can setup and online extension of a
			resturant business complete with featured slider, menus, specials , Staff details, testimonials and blog section.   </p>
	</div>

</div>

<div class="row">

	<div class="col col1">
		<h3>Required Plugins</h3>
		<p> The theme requires the following plugin to work as advertised.  
			You will find a notification on the admin panel prompting you to install the required plugins. 
			Please install and activate the plugins.  
		</p>
		<ol>
			<li><b> <a href="https://wordpress.org/plugins/food-and-drink-menu/"> Food and drink menu </a> </b>  - This plugin is required for creating the food menu items and menu collections. </li>
			<li><b> <a href="https://wordpress.org/plugins/magic-meta-box/"> Magic metabox </a> </b>  - This plugin is required for metabox fields attached to different custom post types used in the theme. </li>
			<li><b> <a href="https://wordpress.org/plugins/contact-form-7/"> Contact form 7 </a> </b>  - This plugin is required for creating contact forms and reservation forms . </li>
			<li><b> <a href="https://wordpress.org/plugins/contact-form-7-datepicker/"> Contact form 7 datepicker </a> </b>  - This plugin is required for enabling date picker fields on the contact form 7 forms. It is useful for reservation forms. </li>
		
		</ol>
	</div>

</div>	

<div class="row">

	<div class="col col1">
		<h3>Theme setup</h3>

		<h4>1. Installing theme</h4>
		<p> Download the theme zip file from Fabthemes.com. Open your WordPress admin panel and go to <b> Appearance > Themes</b> . Click <b> Add new </b> and then <b> Upload the theme </b> to your themes directory and activate it.  </p>

		<h4>2. Install plugins</h4>
		<p> After theme activation, you will find a notification that prompts you to install and activate the required plugin listed earlier. Please install and activate them.</p>

	</div>

</div>


<div class="row">

	<div class="col col1">
		<h3>Setting up different pages.</h3>

		<h4>1. Setup Homepage and Blog </h4>
		<p>	The theme uses a custom homepage template. After theme activation, go to the Pages and create a new page named “Home”. 
			In the page attribute section you can find a drop-down box for page templates. Select the “Homepage” template from the dropdown list. 
			Leave the page content section empty and publish the page. Go to settings > Reading > Front page displays. Select the “static page” option and 
			for front page select “Home” from the drop-down page list. Select a different page for the blog items.
		</p>	
		
		<h4>2. Create slide items </h4>
		<p> On the admin panel you will find a menu item called Slides. Click 'Add new slides' and it will take you to the slide editor page. You can give your slider a name and below the title
		bar you will find a metabox section. This is a repeater metabox section through which you can add slide images, slide image title, description and slide link. Once you have added enough number of slides
		just hit publish button to ublish the slider. Then go to the theme options page and under the homepage tab, you will find the option for Slider. Just select the slider item from the dropdown list.</p>
		<p><iframe width="560" height="315" src="https://www.youtube.com/embed/RNGQ3Tywcro" frameborder="0" allowfullscreen></iframe></p> <br>
	
		<h4>3. Create staff items</h4>
		<p> On the admin panel you will find a menu item called Staff. Click on 'Add new staff' and it will take you to the staff editor. Enter your staff name as the title and then fill the metabox details like 
		 staff job title, small description and social media information. To create the staff page, go to the 'Pages' and create add new page. Give it a title called Staff and then select 'Staffpage' template from the 
		 Template page attribute of the page.  </p>

		<h4>4. Testimonials </h4>
		<p> On the admin panel you will find a menu item called Testimonial. Click on 'Add new testimonial' and it will take you to the testimonial editor. Enter the person name as the title and 
			the testimonial in the post content area. </p>

		<h4>5. Food Menu and menu items </h4>
		<p> Food menu is another important feature on this WordPress theme. Install the Food and Drink menu plugin and activate it. On it's settings page select 'Dont load any CSS styles' option. This is to make sure that the
		menu is styled based on the theme stylesheet. Set the width and height as 400px and 300px respectively. Please check the video below to see how to create individual menu items and menu page.
		</p>
		<p><iframe width="560" height="315" src="https://www.youtube.com/embed/TmeqXO6__0M" frameborder="0" allowfullscreen></iframe></p> <br>

		<h4>6. Specials today section on homepage </h4>
		<p> On the homepage there is a 2 column section for the special menu items. Enter the menu item shortcodes in the theme option panel to configure this section. Please check the video to see how it is done. </p>
		<p> <iframe width="560" height="315" src="https://www.youtube.com/embed/askPJ13b53s" frameborder="0" allowfullscreen></iframe> </p> <br>

		<h4>7. Reservation page </h4>
		<p> Reservation page is a modified contact page. We will make use of the Contact form 7 plugin to create a custom form to invite reservation. Create a new page and give it a title called 
			'Reservation' . Select the 'Reservation page' from the template attribute drop down select. Publish the page. Then go to the theme options page and under Booking Settings you  will find all the
			options to configure the reservation page. </p>

	</div>

</div>


<div class="row">

	<div class="col col1"> 
		<h3>Theme Options </h3>
		<p> Theme comes with an options panel to customize its settings. </p>

	 </div>
	 <div class="col col1">
	 	<h4> 1. Homepage </h4>
	 	<p> On the theme option page the first tab is for configuring the homepage. </p>
	 	<div class="incol">
		<p> <b>1. Slider</b><br>  Select the slider of the homepage from the dropdown selector. </p>
		<p> <b>2. About page</b><br>  Select the page for the About us Section. The page and its featured image will make the about us section. </p>
		<p> <b>3. Retaurant menu page</b><br>  Select the page you have set as restaurant menu from the dropdown selector. </p>
		<p> <b>4. Special menu columns</b><br>  Add the shortcodes for menu items for the 2 columns of the specials section on homepage. </p>
		<p> <b>5. Staff page</b><br>  Select the page you have set as staff page from the dropdown selector. </p>	
		</div>	
	 </div>

	 <div class="col col1">
	 	<h4> 2. Booking page settings </h4>
	 	<p> You have options to configure the reservation page here.</p>
	 	<div class="incol">
		<p> <b>1. Reservation page</b><br>  Select the page set as reservation page from the dropdown selector. </p>
		<p> <b>2. Booking form </b><br>  Enter the shortcode for the contact form created by the contact form 7 plugin. </p>
		<p> <b>3. Location map </b><br>  Enter the embed code for the google map </p> 	
		<p> <b>4. Address </b><br>  Enter the address details here </p> 	
		<p> <b>5. Contact numbers </b><br>  Enter contact details like phone and fax numbers etc </p> 
		</div>					
	 </div>

	 <div class="col col1">
	 	<h4> 3. Social styling </h4>
	 	<p> Use these options to configure the social media buttons.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 4. Custom styling</h4>
	 	<p> Use this options to color customize your theme.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 5. Banner settings </h4>
	 	<p> Use this options to customize the banner ads on the sidebar.</p>
	 </div>

</div>

<div class="row">
	<div class="col col1">
			<?php echo file_get_contents(dirname(__FILE__) . '/FT/license-html.php'); ?>
	</div>
</div>


</div>
</div>



<style media="screen" type="text/css">

	.container{	width: 960px;}
	.row { background: #fff;  margin-bottom: 20px; padding: 20px 0px;}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after {  clear: both;	}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after { clear: both; }
	.col{ padding:0px 20px 0px 20px;  position:relative; 	 }
	.col1{ width: 920px; }
	.col2{ width: 440px; float: left;}
	.col3{ width: 280px; float: left;}
	.col34{ width: 600px; float: left;}
	.col h2{ font-weight: 700; font-size: 30px;}
	.col h3{ font-weight: 300; font-size: 24px; margin:0px 0px 20px 0px; background: #333; color:#fff; padding: 10px; }
	.col h4{ font-weight: bold; font-size: 16px; margin:10px 0px;}
	.incol{ padding:0px 40px;	}
	.clear{clear: both;}
	.red{color: red;}
</style>	

<?php }
